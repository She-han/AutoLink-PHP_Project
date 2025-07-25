<?php
// Check car availability AJAX handler
include '../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$car_id = isset($_POST['car_id']) ? (int)$_POST['car_id'] : 0;
$pickup_date = isset($_POST['pickup_date']) ? $_POST['pickup_date'] : '';
$return_date = isset($_POST['return_date']) ? $_POST['return_date'] : '';

if ($car_id <= 0 || empty($pickup_date) || empty($return_date)) {
    echo json_encode(['success' => false, 'message' => 'Missing required fields']);
    exit();
}

// Validate dates
if (!strtotime($pickup_date) || !strtotime($return_date)) {
    echo json_encode(['success' => false, 'message' => 'Invalid date format']);
    exit();
}

if (strtotime($pickup_date) >= strtotime($return_date)) {
    echo json_encode(['success' => false, 'message' => 'Return date must be after pickup date']);
    exit();
}

if (strtotime($pickup_date) < strtotime(date('Y-m-d'))) {
    echo json_encode(['success' => false, 'message' => 'Pickup date cannot be in the past']);
    exit();
}

try {
    // Check if car exists and is available
    $stmt = $pdo->prepare("SELECT * FROM cars WHERE id = ? AND status = 'available'");
    $stmt->execute([$car_id]);
    $car = $stmt->fetch();

    if (!$car) {
        echo json_encode(['success' => false, 'message' => 'Car not found or not available']);
        exit();
    }

    // Check for conflicting bookings
    $stmt = $pdo->prepare("
        SELECT COUNT(*) FROM bookings 
        WHERE car_id = ? 
        AND status IN ('confirmed', 'active')
        AND (
            (pickup_date <= ? AND return_date > ?) OR
            (pickup_date < ? AND return_date >= ?) OR
            (pickup_date >= ? AND return_date <= ?)
        )
    ");
    $stmt->execute([
        $car_id,
        $pickup_date, $pickup_date,
        $return_date, $return_date,
        $pickup_date, $return_date
    ]);
    
    $conflicts = $stmt->fetchColumn();

    if ($conflicts > 0) {
        echo json_encode([
            'success' => false, 
            'available' => false,
            'message' => 'Car is not available for the selected dates'
        ]);
    } else {
        // Calculate total days and price
        $days = (strtotime($return_date) - strtotime($pickup_date)) / (60 * 60 * 24);
        $total_amount = $days * $car['price_per_day'];

        echo json_encode([
            'success' => true,
            'available' => true,
            'car' => $car,
            'days' => $days,
            'total_amount' => $total_amount,
            'message' => 'Car is available for booking'
        ]);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
?>
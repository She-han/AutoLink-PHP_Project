<?php
// Add to wishlist AJAX handler
include '../includes/config.php';
include '../includes/session.php';

header('Content-Type: application/json');

if (!is_logged_in()) {
    echo json_encode(['success' => false, 'message' => 'Please login first']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$car_id = isset($_POST['car_id']) ? (int)$_POST['car_id'] : 0;
$user_id = $_SESSION['user_id'];

if ($car_id <= 0) {
    echo json_encode(['success' => false, 'message' => 'Invalid car ID']);
    exit();
}

try {
    // Check if car exists
    $stmt = $pdo->prepare("SELECT id FROM cars WHERE id = ?");
    $stmt->execute([$car_id]);
    if (!$stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Car not found']);
        exit();
    }

    // Check if already in wishlist
    $stmt = $pdo->prepare("SELECT id FROM wishlist WHERE user_id = ? AND car_id = ?");
    $stmt->execute([$user_id, $car_id]);
    if ($stmt->fetch()) {
        // Remove from wishlist
        $stmt = $pdo->prepare("DELETE FROM wishlist WHERE user_id = ? AND car_id = ?");
        $stmt->execute([$user_id, $car_id]);
        echo json_encode(['success' => true, 'action' => 'removed', 'message' => 'Removed from wishlist']);
    } else {
        // Add to wishlist
        $stmt = $pdo->prepare("INSERT INTO wishlist (user_id, car_id) VALUES (?, ?)");
        $stmt->execute([$user_id, $car_id]);
        echo json_encode(['success' => true, 'action' => 'added', 'message' => 'Added to wishlist']);
    }

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
?>
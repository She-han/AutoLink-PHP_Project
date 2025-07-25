<?php
// Search cars AJAX handler
include '../includes/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
    exit();
}

$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$make = isset($_GET['make']) ? trim($_GET['make']) : '';
$year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
$min_price = isset($_GET['min_price']) ? (float)$_GET['min_price'] : 0;
$max_price = isset($_GET['max_price']) ? (float)$_GET['max_price'] : 0;
$limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;
$offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

try {
    $sql = "SELECT * FROM cars WHERE status = 'available'";
    $params = [];

    if (!empty($search)) {
        $sql .= " AND (make LIKE ? OR model LIKE ? OR description LIKE ?)";
        $searchTerm = "%$search%";
        $params[] = $searchTerm;
        $params[] = $searchTerm;
        $params[] = $searchTerm;
    }

    if (!empty($make)) {
        $sql .= " AND make LIKE ?";
        $params[] = "%$make%";
    }

    if ($year > 0) {
        $sql .= " AND year = ?";
        $params[] = $year;
    }

    if ($min_price > 0) {
        $sql .= " AND price_per_day >= ?";
        $params[] = $min_price;
    }

    if ($max_price > 0) {
        $sql .= " AND price_per_day <= ?";
        $params[] = $max_price;
    }

    $sql .= " ORDER BY created_at DESC LIMIT ? OFFSET ?";
    $params[] = $limit;
    $params[] = $offset;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $cars = $stmt->fetchAll();

    // Get total count
    $countSQL = str_replace("SELECT *", "SELECT COUNT(*)", $sql);
    $countSQL = str_replace(" LIMIT ? OFFSET ?", "", $countSQL);
    array_pop($params); // Remove offset
    array_pop($params); // Remove limit
    
    $countStmt = $pdo->prepare($countSQL);
    $countStmt->execute($params);
    $total = $countStmt->fetchColumn();

    echo json_encode([
        'success' => true,
        'cars' => $cars,
        'total' => $total,
        'limit' => $limit,
        'offset' => $offset
    ]);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
?>
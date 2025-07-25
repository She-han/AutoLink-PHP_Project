<?php
// Update profile AJAX handler
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

$user_id = $_SESSION['user_id'];
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$address = isset($_POST['address']) ? trim($_POST['address']) : '';

// Validate required fields
if (empty($name) || empty($email)) {
    echo json_encode(['success' => false, 'message' => 'Name and email are required']);
    exit();
}

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit();
}

try {
    // Check if email is already taken by another user
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? AND id != ?");
    $stmt->execute([$email, $user_id]);
    if ($stmt->fetch()) {
        echo json_encode(['success' => false, 'message' => 'Email is already taken']);
        exit();
    }

    // Handle profile image upload
    $profile_image = null;
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = $_FILES['profile_image']['type'];
        
        if (in_array($file_type, $allowed_types)) {
            $upload_dir = '../uploads/users/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            $file_extension = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
            $filename = 'user_' . $user_id . '_' . time() . '.' . $file_extension;
            $upload_path = $upload_dir . $filename;
            
            if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $upload_path)) {
                $profile_image = $filename;
            }
        }
    }

    // Update user profile
    $sql = "UPDATE users SET name = ?, email = ?, phone = ?, address = ?";
    $params = [$name, $email, $phone, $address];
    
    if ($profile_image) {
        $sql .= ", profile_image = ?";
        $params[] = $profile_image;
    }
    
    $sql .= " WHERE id = ?";
    $params[] = $user_id;

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    echo json_encode([
        'success' => true,
        'message' => 'Profile updated successfully',
        'profile_image' => $profile_image
    ]);

} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error']);
}
?>
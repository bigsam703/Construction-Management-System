<?php
// Include database configuration and functions
require_once 'db_config.php';

// Set appropriate headers for JSON response
header("Content-Type: application/json");

// Get action parameter from the request
$action = $_GET['action'];

// Handle API actions
if ($action === 'get_user_by_username') {
    $username = $_GET['username'];
    $user = getUserByUsername($username);
    echo json_encode($user);
} elseif ($action === 'get_vendor_by_name') {
    $vendor_name = $_GET['vendor_name'];
    $vendor = getVendorByName($vendor_name);
    echo json_encode($vendor);
} else {
    echo json_encode(['error' => 'Invalid action']);
}

// getUserByUsername function
function getUserByUsername($username) {
    global $connection;

    $query = "SELECT id, username, ... FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        return $row;
    }

    return ['error' => 'User not found'];
}

// getVendorByName function
function getVendorByName($vendor_name) {
    global $connection;

    $query = "SELECT id, vendor_name, email, ... FROM vendors WHERE vendor_name = '$vendor_name'";
    $result = mysqli_query($connection, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        return $row;
    }

    return ['error' => 'Vendor not found'];
}
?>

// db_config.php
$connection = mysqli_connect("localhost", "username", "password", "database_name");

// addUser function
function addUser($username, $password, $otherUserData) {
    global $connection;
    
    $query = "INSERT INTO users (username, password, ...) VALUES ('$username', '$password', ...)";
    mysqli_query($connection, $query);
    // Handle errors and return appropriate response
}

// addVendor function
function addVendor($vendor_name, $email, $password, $otherVendorData) {
    global $connection;
    
    $query = "INSERT INTO vendors (vendor_name, email, password, ...) VALUES ('$vendor_name', '$email', '$password', ...)";
    mysqli_query($connection, $query);
    // Handle errors and return appropriate response
}

// getUserIdByUsername function
function getUserIdByUsername($username) {
    global $connection;
    
    $query = "SELECT id FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    
    if ($row = mysqli_fetch_assoc($result)) {
        return $row['id'];
    }
    
    return null; // User not found
}

// getVendorIdByName function
function getVendorIdByName($vendor_name) {
    global $connection;
    
    $query = "SELECT id FROM vendors WHERE vendor_name = '$vendor_name'";
    $result = mysqli_query($connection, $query);
    
    if ($row = mysqli_fetch_assoc($result)) {
        return $row['id'];
    }
    
    return null; // Vendor not found
}

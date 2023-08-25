<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Include database configuration and functions

// Handle vendor deletion
if (isset($_GET['delete_vendor'])) {
    $vendor_id = $_GET['delete_vendor'];
    // Delete vendor from the database (implement the deletion logic)
}

// Fetch list of vendors
// $vendors = fetchVendors(); // Implement this function

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Vendors</title>
</head>
<body>
    <h2>Manage Vendors</h2>
    <a href="admin_panel.php">Back to Admin Panel</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php foreach ($vendors as $vendor) { ?>
            <tr>
                <td><?php echo $vendor['id']; ?></td>
                <td><?php echo $vendor['name']; ?></td>
                <td><?php echo $vendor['email']; ?></td>
                <td><a href="?delete_vendor=<?php echo $vendor['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

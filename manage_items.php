<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Include database configuration and functions

// Handle item deletion
if (isset($_GET['delete_item'])) {
    $item_id = $_GET['delete_item'];
    // Delete item from the database (implement the deletion logic)
}

// Fetch list of items
// $items = fetchItems(); // Implement this function

?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Items</title>
</head>
<body>
    <h2>Manage Items</h2>
    <a href="admin_panel.php">Back to Admin Panel</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php foreach ($items as $item) { ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['category']; ?></td>
                <td><a href="?delete_item=<?php echo $item['id']; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

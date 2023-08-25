<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Include database configuration and functions

// Fetch list of orders
// $orders = fetchOrders(); // Implement this function

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
</head>
<body>
    <h2>View Orders</h2>
    <a href="admin_panel.php">Back to Admin Panel</a>
    <table>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Item</th>
            <th>Quantity</th>
        </tr>
        <?php foreach ($orders as $order) { ?>
            <tr>
                <td><?php echo $order['id']; ?></td>
                <td><?php echo $order['user']; ?></td>
                <td><?php echo $order['item']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <ul>
        <li><a href="manage_vendors.php">Manage Vendors</a></li>
        <li><a href="manage_items.php">Manage Items</a></li>
        <li><a href="view_orders.php">View Orders</a></li>
        <li><a href="view_feedback.php">View Feedback</a></li>
    </ul>
    <a href="logout.php">Logout</a>
</body>
</html>

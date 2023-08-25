<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Include database configuration and functions

// Fetch list of feedback
// $feedback = fetchFeedback(); // Implement this function

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Feedback</title>
</head>
<body>
    <h2>View Feedback</h2>
    <a href="admin_panel.php">Back to Admin Panel</a>
    <table>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Feedback</th>
        </tr>
        <?php foreach ($feedback as $item) { ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['user']; ?></td>
                <td><?php echo $item['feedback']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

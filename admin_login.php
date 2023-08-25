<?php
session_start();
if(isset($_SESSION['admin_id'])) {
    header("Location: admin_panel.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check admin credentials (replace with your authentication logic)
    $admin_username = "admin";
    $admin_password = "adminpassword";

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $admin_username && $input_password == $admin_password) {
        $_SESSION['admin_id'] = 1;
        header("Location: admin_panel.php");
        exit;
    } else {
        $error_message = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>

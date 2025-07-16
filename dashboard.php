<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Hello Admin, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    
    <p>Welcome to the admin dashboard.</p>

    <a href="logout.php">Logout</a>
</body>
</html>

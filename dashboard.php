<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit;
}
?>

<h2>Welcome <?= htmlspecialchars($_SESSION['username']) ?> (User)</h2>
<p>This is your dashboard.</p>
<a href="logout.php">Logout</a>

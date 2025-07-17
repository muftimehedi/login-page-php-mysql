<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = ($_POST['password']);

    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    try {
        $stmt->execute([$username, $password]);
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<h2>Register</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>

<?php
include_once('connection.php');
session_start();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['password'] === $password) {

        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id'] = $user['id']; 
        header("Location: dashboard.php");
        exit();
    } else {
    $_SESSION['error'] = "Wrong username or password.";
    header("Location: index.php");
    exit();
}

}
?>

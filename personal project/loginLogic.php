<?php
session_start();
include_once("config.php"); 

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "<p style='color:red;'>Please fill in all fields.</p>";
        echo "<a href='login.php'>Go back to login</a>";
        exit();
    }

    try {
        $sql = "SELECT id, emri, username, email, password, is_admin FROM users WHERE username = :username LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            echo "<p style='color:red;'>The user does not exist.</p>";
            echo "<a href='login.php'>Go back to login</a>";
        } else {
            if (password_verify($password, $user['password'])) {
                
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['emri'] = $user['emri'];
                $_SESSION['is_admin'] = $user['is_admin'];

                header('Location: dashboard.php');
                exit();
            } else {
                echo "<p style='color:red;'>The password is not valid.</p>";
                echo "<a href='login.php'>Go back to login</a>";
            }
        }
    } catch (PDOException $e) {
        echo "<p style='color:red;'>Database error: " . $e->getMessage() . "</p>";
    }
} else {
    
    header("Location: login.php");
    exit();
}
?>

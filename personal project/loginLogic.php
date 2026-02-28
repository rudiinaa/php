<?php
session_start();   // REQUIRED
require 'config.php';

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        echo "Fill all the fields!";
        header("refresh:2; url=login.php");
        exit();
    }

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if($stmt->rowCount() > 0){

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if(password_verify($password, $data["password"])){

            $_SESSION['email'] = $data['email'];
            $_SESSION['name']  = $data['name'];
            $_SESSION['id']    = $data['id'];

            header("Location: dashboard.php");
            exit(); // IMPORTANT

        } else {
            echo "Password is incorrect";
            header("refresh:2; url=login.php");
            exit();
        }

    } else {
        echo "User not found!";
        header("refresh:2; url=login.php");
        exit();
    }
}
?>
<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['add'])) {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $stmt = $pdo->prepare(
        "INSERT INTO students (fullname, email, phone) VALUES (?, ?, ?)"
    );
    $stmt->execute([$fullname, $email, $phone]);

    header('Location: index.php');
    exit();
}
?>

<h2>Add Student</h2>

<form method="POST">
    <input type="text" name="fullname" placeholder="Full name" required><br><br>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="text" name="phone" placeholder="Phone"><br><br>
    <button type="submit" name="add">Save</button>
</form>
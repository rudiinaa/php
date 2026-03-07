<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['add'])) {

    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    $stmt = $pdo->prepare("INSERT INTO students (fullname, email, phone) VALUES (?, ?, ?)");
    $stmt->execute([$fullname, $email, $phone]);

    header('Location: dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h4>Add Student</h4>
</div>

<div class="card-body">

<form method="POST">

<div class="mb-3">
<label class="form-label">Full Name</label>
<input type="text" name="fullname" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<button type="submit" name="add" class="btn btn-primary">
Save Student
</button>

<a href="dashboard.php" class="btn btn-secondary">
Back
</a>

</form>

</div>
</div>

</div>

</body>
</html>
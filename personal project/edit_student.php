<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$id = $_GET['id'] ?? 0;

$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();

if (!$student) {
    exit('Student not found.');
}

if (isset($_POST['update'])) {

    $stmt = $pdo->prepare(
        "UPDATE students SET fullname=?, email=?, phone=? WHERE id=?"
    );
    $stmt->execute([
        trim($_POST['fullname']),
        trim($_POST['email']),
        trim($_POST['phone']),
        $id
    ]);

    header('Location: index.php');
    exit();
}
?>

<h2>Edit Student</h2>

<form method="POST">
    <input type="text" name="fullname"
           value="<?= htmlspecialchars($student['fullname']) ?>" required><br><br>

    <input type="email" name="email"
           value="<?= htmlspecialchars($student['email']) ?>"><br><br>

    <input type="text" name="phone"
           value="<?= htmlspecialchars($student['phone']) ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>
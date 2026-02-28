<?php
session_start();
include_once('config.php');


if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}
// ✅ Get total students
$stmtStudents = $conn->prepare("SELECT COUNT(*) as total FROM students");
$stmtStudents->execute();
$studentData = $stmtStudents->fetch(PDO::FETCH_ASSOC);
$totalStudents = $studentData['total'];

// ✅ Get total users
$stmtUsers = $conn->prepare("SELECT COUNT(*) as total FROM users");
$stmtUsers->execute();
$userData = $stmtUsers->fetch(PDO::FETCH_ASSOC);
$totalUsers = $userData['total'];

// ✅ Get all students for table
$stmtAll = $conn->prepare("SELECT * FROM students ORDER BY id DESC");
$stmtAll->execute();
$students = $stmtAll->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard - Student System</title>

<style>
body {
    font-family: Arial, sans-serif;
    background:#f4f6f9;
    margin:0;
}

.navbar {
    background:#2c3e50;
    color:white;
    padding:15px;
}

.navbar a {
    color:white;
    text-decoration:none;
}

.container {
    width:90%;
    margin:20px auto;
}

.cards {
    display:flex;
    gap:20px;
    margin-bottom:20px;
}

.card {
    background:white;
    padding:20px;
    border-radius:8px;
    flex:1;
    box-shadow:0 2px 6px rgba(0,0,0,0.1);
}

table {
    width:100%;
    border-collapse:collapse;
    background:white;
}

th, td {
    padding:10px;
    border-bottom:1px solid #ddd;
    text-align:left;
}

.actions a {
    margin-right:8px;
    text-decoration:none;
}
</style>
</head>

<body>

<div class="navbar">
    Welcome, <?= htmlspecialchars($_SESSION['name']) ?> |
    <a href="logout.php">Logout</a>
</div>

<div class="container">

    <h2>📊 Dashboard</h2>

    <div class="cards">
        <div class="card">
            <h3>Total Students</h3>
            <h1><?= $totalStudents ?></h1>
        </div>

        <div class="card">
            <h3>Total Users</h3>
            <h1><?= $totalUsers ?></h1>
        </div>

        <div class="card">
            <h3>Quick Actions</h3>
            <a href="add_student.php">➕ Add Student</a>
        </div>
    </div>

    <h3>📋 Students List</h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

        <?php if (count($students) > 0): ?>
            <?php foreach ($students as $s): ?>
            <tr>
                <td><?= $s['id'] ?></td>
                <td><?= htmlspecialchars($s['fullname']) ?></td>
                <td><?= htmlspecialchars($s['email']) ?></td>
                <td><?= htmlspecialchars($s['phone']) ?></td>
                <td class="actions">
                    <a href="edit_student.php?id=<?= $s['id'] ?>">✏️ Edit</a>
                    <a href="delete_student.php?id=<?= $s['id'] ?>"
                       onclick="return confirm('Delete this student?')">🗑 Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No students found.</td>
            </tr>
        <?php endif; ?>
    </table>

</div>
</body>
</html>
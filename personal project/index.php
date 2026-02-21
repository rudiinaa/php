<?php
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
$students = $stmt->fetchAll();
?>

<h2>Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?></h2>

<p>
    <a href="add_student.php">Add Student</a> |
    <a href="logout.php">Logout</a>
</p>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Actions</th>
</tr>

<?php foreach ($students as $s): ?>
<tr>
    <td><?= $s['id'] ?></td>
    <td><?= htmlspecialchars($s['fullname']) ?></td>
    <td><?= htmlspecialchars($s['email']) ?></td>
    <td><?= htmlspecialchars($s['phone']) ?></td>
    <td>
        <a href="edit_student.php?id=<?= $s['id'] ?>">Edit</a> |
        <a href="delete_student.php?id=<?= $s['id'] ?>"
           onclick="return confirm('Delete this student?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
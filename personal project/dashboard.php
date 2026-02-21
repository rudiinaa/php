

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
}
</style>
</head>

<body>

<div class="navbar">
    Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?> |
    <a href="logout.php" style="color:#fff;">Logout</a>
</div>

<div class="container">

    <h2>📊 Dashboard</h2>

    <!-- statistika -->
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

    </table>

</div>
</body>
</html>
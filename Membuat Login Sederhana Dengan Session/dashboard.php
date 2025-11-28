<?php
session_start();

// Cek apakah sudah login
if (!isset($_SESSION['user_id'])) {
    echo "<h2>Anda belum login</h2>";
    echo '<a href="login.php">Login di sini</a>';
    exit();
}

$nama = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3>Selamat datang, <?= $nama ?></h3>
        <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
</div>

</body>
</html>

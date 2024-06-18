<?php
include 'db.php';

if (isset($_GET['edit'])) {
    $npm = $_GET['edit'];

    $sql = "SELECT * FROM mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai Mahasiswa</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Edit Nilai Mahasiswa
            </div>
            <div class="card-body">
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="npm">NPM MAHASISWA:</label>
                        <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $row['npm']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Mahasiswa:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
                    </div>
                    <div class="form-group">

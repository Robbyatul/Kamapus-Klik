<?php
include 'db.php';

// Handle Create operation
if (isset($_POST['create'])) {
    $npm = $_POST['npm'];
    $name = $_POST['name'];
    $prodi = $_POST['prodi'];
    $kelamin = $_POST['gender'];

    $sql = "INSERT INTO mahasiswa (npm, name, prodi, gender) VALUES ('$npm', '$name', '$prodi', '$kelamin')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil ditambahkan'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan'); window.location.href = 'index.php';</script>";
    }
}

// Handle Delete operation
if (isset($_GET['delete'])) {
    $npm = $_GET['delete'];

    $sql = "DELETE FROM mahasiswa WHERE npm='$npm'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); window.location.href = 'index.php';</script>";
    }
}

// Handle Update operation
if (isset($_POST['update'])) {
    $npm = $_POST['npm'];
    $name = $_POST['name'];
    $prodi = $_POST['prodi'];
    $kelamin = $_POST['gender'];

    $sql = "UPDATE mahasiswa SET name='$name', prodi='$prodi', gender='$kelamin' WHERE npm='$npm'";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diupdate'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Data gagal diupdate'); window.location.href = 'index.php';</script>";
    }
}
?>

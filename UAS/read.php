<?php
include 'db.php';

$search = '';
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
}

$sql = "SELECT * FROM mahasiswa";
if (!empty($search)) {
    $sql .= " WHERE npm LIKE '%$search%' OR name LIKE '%$search%' OR prodi LIKE '%$search%' OR gender LIKE '%$search%'";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['npm']."</td>
                <td>".$row['name']."</td>
                <td>".$row['prodi']."</td>
                <td>".$row['gender']."</td>
                <td>
                    <a href='update.php?edit=".$row['npm']."' >Edit |</a>
                    <a href='process.php?delete=".$row['npm']."''>Hapus</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
}
?>

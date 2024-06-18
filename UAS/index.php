<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Nilai Mahasiswa</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .form-control {
            text-align: left; /* Mengatur text alignment untuk inputan form menjadi rata kiri */
        }

        .table {
            text-align: left; /* Mengatur text alignment untuk tabel menjadi rata kiri */
        }

        .card-body, .card-header {
            text-align: left; /* Mengatur text alignment untuk card body dan header menjadi rata kiri */
        }

        .container {
            margin-left: 0; /* Mengatur margin ke arah kiri untuk container */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        
        <div class="card">
        <div class="card-header">
                Input Nilai Mahasiswa
            </div>
            
            <div class="card-body">
                <h1>Input Nilai Mahasiswa</h1>
                <hr>
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label for="npm">NPM MAHASISWA:</label> <br>
                        <input type="text" class="" id="npm" name="npm" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Mahasiswa:</label> <br>
                        <input type="text" class="" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi Mahasiswa:</label> <br>
                        <input type="text" class="" id="prodi" name="prodi" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin:</label> <br>
                        <input type="radio" id="gender" name="gender" value="gender" required>
                        <label for="gender">Laki-laki</label>
                        <input type="radio" id="Perempuan" name="gender" value="Perempuan" required>
                        <label for="Perempuan">Perempuan</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="create">PROSES</button>
                    <button type="reset" class="btn">Cancel</button>
                </form>
            </div>
            </div>

        <div class="card mt-5">
            <div class="card-header">
                Data Mahasiswa
                
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>NPM Mahasiswa</th>
                            <th>Nama Mahasiswa</th>
                            <th>Prodi Mahasiswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'read.php';
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

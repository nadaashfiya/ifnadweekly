<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1, h2{
            text-align: center;
        }

        .navbar{
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .navbar td{
            border: 1px solid #ccc;
            text-align: center;
            padding: 10px;
        }

        .navbar a{
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .btn{
            display: inline-block;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover{
            background: #0056b3;
        }

        .mahasiswa{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .mahasiswa th,
        .mahasiswa td{
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .mahasiswa th{
            background: #f2f2f2;
        }

        .foto-mahasiswa{
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>

<body>

<h1>Portofolio Qothrunnada Ashfiya</h1>

<hr>

<table class="navbar">
    <tr>
        <td><a href="index.php">Home</a></td>
        <td><a href="profile.php">Profile</a></td>
        <td><a href="contact.php">Kontak</a></td>
        <td><a href="DataMahasiswa.php">Data Mahasiswa</a></td>
    </tr>
</table>

<h2>Data Mahasiswa</h2>

<a href="Inputdata.php" class="btn">+ Tambah Data Mahasiswa</a>

<table class="mahasiswa">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Foto</th>
    </tr>

    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    $no = 1;

    while($data = mysqli_fetch_assoc($query)){
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['nim']; ?></td>
        <td><?= $data['jurusan']; ?></td>
        <td><?= $data['email']; ?></td>
        <td><?= $data['no_hp']; ?></td>

        <td>
            <?= $data['foto']; ?><br>
            <img src="assets/images/<?= $data['foto']; ?>" class="foto-mahasiswa">
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
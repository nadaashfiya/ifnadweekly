<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <!-- Hubungkan CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- HEADER -->
    <h1>Portofolio Qothrunnada Ashfiya</h1>

    <hr>

    <!-- NAVBAR -->
    <table class="navbar">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="profile.php">Profile</a></td>
            <td><a href="contact.php">Kontak</a></td>
            <td><a href="DataMahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <!-- JUDUL -->
    <h2>Data Mahasiswa</h2>

    <!-- BUTTON -->
    <a href="Inputdata.php">
        <button>+ Tambah Data Mahasiswa</button>
    </a>

    <br><br>

    <!-- TABEL DATA MAHASISWA -->
    <table class="mahasiswa">

        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">NIM</th>
            <th rowspan="2">Foto</th>
            <th colspan="3">Nilai</th>
        </tr>

        <tr>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Qothrunnada Ashfiya</td>
            <td>13182420029</td>
            <td>
                <img src="assets/images/FOTO NADA JAS UNIMUS.png" alt="Foto Nada">
            </td>
            <td>85</td>
            <td>88</td>
            <td>100</td>
        </tr>

        <tr>
            <td>2</td>
            <td>Ashfiya Qothrunnada</td>
            <td>1000000014</td>
            <td>
                <img src="assets/images/foto almet bg merah.png" alt="Foto Ashfiya">
            </td>
            <td>90</td>
            <td>92</td>
            <td>95</td>
        </tr>

    </table>

    <hr>

    <!-- LATIHAN -->
    <h3>Latihan</h3>

    <table class="latihan">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" align="center">?</td>
            <td>2,4</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>

        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</body>
</html>
<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>

```
<!-- Hubungkan CSS -->
<link rel="stylesheet" href="style.css">
```

</head>
<body>

```
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
<h2>Form Input Data Mahasiswa</h2>

<!-- FORM -->
<form action="proses_input.php" method="post" enctype="multipart/form-data">

    <table>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td>:</td>
            <td>
                <input type="text"
                       id="nama"
                       name="nama"
                       placeholder="Masukkan nama mahasiswa"
                       required>
            </td>
        </tr>

        <tr>
            <td><label for="nim">NIM</label></td>
            <td>:</td>
            <td>
                <input type="text"
                       id="nim"
                       name="nim"
                       placeholder="Masukkan NIM"
                       required>
            </td>
        </tr>

        <tr>
            <td><label for="foto">Foto</label></td>
            <td>:</td>
            <td>
                <input type="file"
                       id="foto"
                       name="foto"
                       accept="image/*">
            </td>
        </tr>

        <tr>
            <td><label for="uts">Nilai UTS</label></td>
            <td>:</td>
            <td>
                <input type="number"
                       id="uts"
                       name="uts"
                       min="0"
                       max="100"
                       placeholder="0 - 100"
                       required>
            </td>
        </tr>

        <tr>
            <td><label for="uas">Nilai UAS</label></td>
            <td>:</td>
            <td>
                <input type="number"
                       id="uas"
                       name="uas"
                       min="0"
                       max="100"
                       placeholder="0 - 100"
                       required>
            </td>
        </tr>

        <tr>
            <td><label for="tugas">Nilai Tugas</label></td>
            <td>:</td>
            <td>
                <input type="number"
                       id="tugas"
                       name="tugas"
                       min="0"
                       max="100"
                       placeholder="0 - 100"
                       required>
            </td>
        </tr>

        <tr>
            <td colspan="3" align="center">
                <button type="submit">
                    Simpan Data
                </button>

                <button type="reset">
                    Reset
                </button>
            </td>
        </tr>
    </table>

</form>
```

</body>
</html>

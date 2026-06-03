<?php
include 'koneksi.php';
?>

<h2>Contact Mahasiswa</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
    </tr>

    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
    $no = 1;

    while($data = mysqli_fetch_assoc($query)){
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['email']; ?></td>
        <td><?= $data['no_hp']; ?></td>
    </tr>
    <?php } ?>

</table>
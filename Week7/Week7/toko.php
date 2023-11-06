<?php   
require 'functions.php';
$toko = query("SELECT * FROM toko")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin Toko Olahraga</title>
</head>
    <body>
    <h1>Daftar Barang Toko Olahraga</h1>

    <a href="tambah.php">Tambah Barang Toko Olahraga</a>
    <br> <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($toko as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" >Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><?= $row["stok"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </body> 
</html>
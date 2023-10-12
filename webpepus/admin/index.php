<?php

require 'function.php';

$siswa = query ("SELECT * FROM t_anggota");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    

    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>f_id</th>
        <th>f_nis</th>
        <th>f_nama</th>
        <th>f_username</th>
        <th>f_password</th>
        <th>f_alamat</th>
        <th>f_tanggallahir</th>
    </tr>

    <?php $i = 1?>
    <?php foreach($siswa as $row) :?>

    <tr>
        <td><?= $i ?></td>
        <td><?= $row ["f_id"];?></td>
        <td><?= $row ["f_nis"];?></td>
        <td><?= $row ["f_nama"];?></td>
        <td><?= $row ["f_username"];?></td>
        <td><?= $row ["f_password"];?></td>
        <td><?= $row ["f_alamat"];?></td>
        <td><?= $row ["f_tanggallahir"];?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
    </tr>
    
    <?php $i++; ?>
    <?php endforeach;?>
</table>

</body>
</html>
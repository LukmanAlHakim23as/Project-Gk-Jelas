<?php

require 'function.php';

$conn = mysqli_connect("localhost", "root", "", "perpussmkn40");
//cek apakah tombol submit sudah di click
if(isset($_POST["submit"])) { 

    // cek apakah data berhasil di tambahkan atau tidak
    if(tambah($_POST) >0){
        echo "<script> alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script> alert('Data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <h1>Tambah Data mahasiwa</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="f_nis">f_nis : </label>
                <input type="text" name="f_nis" id="f_nis" required>
            </li>
            <li>
                <label for="f_nama">f_nama : </label>
                <input type="text" name="f_nama" id="f_nama">
            </li>
            <li>
                <label for="f_username">f_username : </label>
                <input type="text" name="f_username" id="f_username">
            </li>
            <li>
                <label for="f_password">f_password : </label>
                <input type="text" name="f_password" id="f_password">
            </li>
            <li>
                <label for="f_alamat">f_alamat : </label>
                <input type="text" name="f_alamat" id="f_alamat">
            </li>
            <li>
                <label for="f_tanggallahir">f_tanggallahir : </label>
                <input type="text" name="f_tanggallahir" id="f_tanggallahir">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>

</body>
</html>
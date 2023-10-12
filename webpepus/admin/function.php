<?php

$conn = mysqli_connect("localhost","root", "","perpussmkn40");

function query($query){
    global $conn;
    $result = mysqli_query($conn ,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data){
    global $conn;
    //ambil data dari tiap element dalam form
    $f_nis = htmlspecialchars($data)["f_nis"];
    $f_nama = htmlspecialchars($data)["f_nama"];
    $f_username = htmlspecialchars($data)["f_username"];
    $f_password = htmlspecialchars($data)["f_password"];
    $f_alamat = htmlspecialchars($data)["f_alamat"];
    $f_tanggallahir = htmlspecialchars($data)["f_tanggallahir"];

    //query insert data
    $query = "INSERT INTO t_anggota VALUES ('', '$f_nis','$f_nama', '$f_username', '$f_password', '$f_alamat', '$f_tanggallahir')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>
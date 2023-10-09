<?php

function koneksi(){
//    $conn = mysqli_connect('localhost', 'root', '','prakweb2023b_213040046' or die('Koneksi gagal!'));
    // Koneksi ke database MySQL
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prakweb2023b_213040046";

    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}

function query($query){
    $conn = koneksi();
//    query ke table buku
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

//    siapkan data buku
    $rows = [];
    while ($row = mysqli_fetch_assoc($res)){
        $rows[]=$row;
    }
    return $rows;
}
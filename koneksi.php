<?php 
    $conn = mysqli_connect("localhost", "root", "", "komik");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>
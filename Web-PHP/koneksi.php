<?php
$conn = mysqli_connect("localhost", "root", "", "puncakjawa");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
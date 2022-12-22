<?php
include('credential.php');
$server = "localhost"; // Nama hostnya
$user = $credential["username"]; // Username
$password = $credential["password"]; // Password (Isi jika menggunakan password)
$nama_database = "CRUD2"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
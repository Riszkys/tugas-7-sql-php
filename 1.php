<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Membuat koneksi
$conn =  mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// Membuat tabel buku tamu
$sql = "CREATE TABLE buku_tamu (
ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(200) NOT NULL,
EMAIL VARCHAR(50) NOT NULL,
ISI TEXT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel buku tamu berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

// Menutup koneksi
mysqli_close($conn);

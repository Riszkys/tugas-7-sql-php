<?php

// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password);

// Cek koneksi
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// Membuat database
$sql = "CREATE DATABASE employee";
if (mysqli_query($conn, $sql)) {
    echo "Database berhasil dibuat";
} else {
    echo "Error creating database: " . $conn->error;
}

// Menutup koneksi
mysqli_close($conn);

// Informasi koneksi database baru
$dbname = "employee";
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// Membuat tabel pegawai
$sql = "CREATE TABLE pegawai (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(100),
    telepon VARCHAR(20),
    gaji INT(11),
    departemen_id INT(6),
    FOREIGN KEY (departemen_id) REFERENCES departemen(id)
    )";

if ($conn->query($sql) === TRUE) {
    echo "Tabel pegawai berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}

// Membuat tabel departemen
$sql = "CREATE TABLE departemen (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    alamat VARCHAR(100),
    telepon VARCHAR(20)
    )";

if ($conn->query($sql) === TRUE) {
    echo "Tabel departemen berhasil dibuat";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

// Menyimpan
$sql = "INSERT INTO pegawai (departemen_id, nama, alamat, telepon, gaji) VALUES ('003', 'Moch Fattachul Alim', 'Waru, Sidoarjo', '082166789090', '450000')";
if (mysqli_query($conn, $sql)) {
    echo " Data Berhasil DI INPUT! <br> ";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_connect_error($conn);
}

// menghapus
$sql = "DELETE FROM pegawai WHERE nama = 'Moch Fattachul Alim'";
if (mysqli_query($conn, $sql)) {
    echo " Data Berhasil DIHAPUS! <br> ";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_connect_error($conn);
}

// mengubah
$sql = "UPDATE pegawai set alamat = 'Buduran, Sidoarjo' WHERE id = '1'";
if (mysqli_query($conn, $sql)) {
    echo " Data Berhasil DIPERBARUI! <br> ";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_connect_error($conn);
}




mysqli_close($conn);

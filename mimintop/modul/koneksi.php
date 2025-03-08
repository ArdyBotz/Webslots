<?php
date_default_timezone_set("Asia/Jakarta");

// Informasi website
$nama_website = 'Nexus77';
$alamat_website = 'https://webslots.up.railway.app'; // Sesuaikan dengan domain Railway
$alamat_website_admin = 'https://webslots.up.railway.app/mimintop/';

$qris_link = '';

// Ambil variabel dari Railway
$host = getenv('MYSQLHOST') ?: "mysql.railway.internal";
$username = getenv('MYSQLUSER') ?: "root";
$password = getenv('MYSQLPASSWORD') ?: "evObyMlvgjtPHPaGuqpZoBizwLedXJgr"; // Bisa diganti dengan getenv()
$database = getenv('MYSQLDATABASE') ?: "railway";
$port = getenv('MYSQLPORT') ?: 3306;

// Koneksi ke database
$koneksi = mysqli_connect($host, $username, $password, $database, $port);

// Cek koneksi
if (!$koneksi) {
    die("Kesalahan: Tidak dapat terhubung ke database.\nKode Kesalahan: " . mysqli_connect_errno() . "\nPesan Kesalahan: " . mysqli_connect_error());
} else {
    echo "Koneksi ke database berhasil!";
}
?>

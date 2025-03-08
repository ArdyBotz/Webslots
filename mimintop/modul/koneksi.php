<?php
date_default_timezone_set("Asia/Jakarta");

$nama_website = 'Nexus77';
$alamat_website = 'https://webslots.up.railway.app'; // Sesuaikan dengan domain Railway
$alamat_website_admin = 'https://webslots.up.railway.app/mimintop/';

$qris_link = '';

// Konfigurasi koneksi database menggunakan variabel dari Railway
$host = "mysql.railway.internal";
$username = "root";
$password = "evObyMlvgjtPHPaGuqpZoBizwLedXJgr";
$database = "railway";
$port = 3306;

$koneksi = mysqli_connect($host, $username, $password, $database, $port);

if (!$koneksi) {
    echo "Kesalahan: Tidak dapat terhubung ke database." . PHP_EOL;
    echo "Kode Kesalahan: " . mysqli_connect_errno() . PHP_EOL;
    echo "Pesan Kesalahan: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>

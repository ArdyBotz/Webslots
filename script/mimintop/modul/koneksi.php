<?php
  date_default_timezone_set("Asia/Jakarta");
  $nama_website = 'Nexus77';
  $alamat_website = 'http://localhost/'; // Sesuaikan untuk simulasi lokal
  $alamat_website_admin = 'http://localhost/mimintop/'; // Sesuaikan untuk simulasi lokal
  $qris_link = '';
  
  $host = "localhost";
  $username = "root"; // Default user MySQL di Cloud Shell
  $password = ""; // Default password kosong di MySQL Cloud Shell
  $database = "nexus77_db"; // Nama database yang akan kita buat

  $koneksi = mysqli_connect($host, $username, $password, $database);
  if (!$koneksi) {
    echo "Kesalahan : Tidak dapat terhubung ke database." . PHP_EOL;
    echo "Kode Kesalahan : " . mysqli_connect_errno() . PHP_EOL;
    echo "Pesan Kesalahan : " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
?>
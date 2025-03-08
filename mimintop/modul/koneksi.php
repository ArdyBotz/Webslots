<?php
  date_default_timezone_set("Asia/Jakarta");
  $nama_website = 'Nexus77';
  $alamat_website = 'https://your-railway-app-url/'; // Gantilah dengan URL Railway nanti
  $alamat_website_admin = 'https://your-railway-app-url/admin/'; // Sesuaikan nanti
  $qris_link = '';

  // Konfigurasi sementara (gantilah dengan kredensial Railway nanti)
  $host = "containers-us-west-XX.railway.app"; // Host akan didapat setelah membuat database di Railway
  $username = "root"; // Username dari Railway Database
  $password = "yourpassword"; // Password dari Railway Database
  $database = "nexus77_db"; // Nama database yang dibuat di Railway
  $port = 12345; // Port akan diberikan oleh Railway

  $koneksi = mysqli_connect($host, $username, $password, $database, $port);
  if (!$koneksi) {
    echo "Kesalahan : Tidak dapat terhubung ke database." . PHP_EOL;
    echo "Kode Kesalahan : " . mysqli_connect_errno() . PHP_EOL;
    echo "Pesan Kesalahan : " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
?>
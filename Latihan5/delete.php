<?php
require 'function.php';
$id = $_GET['id'];
$conn = koneksi();

if (delete($id) > 0) {
  echo "<script>
    alert('Data Berhasil Dihapus');
    document.location.href='index.php';
    </script>";
} else {
  echo "<script>
  alert('Data gagal dihapus');
  document.location.href='index.php';
  </script>";
}

<?php
require 'function.php';

$conn = koneksi();
$id = $_GET['id'];

if (delete($id) > 0) {
  echo "<script>
  alert ('data berhasil dihapus')
  document.location.href= 'index.php';
  </script>";
} else {
  "<script>
    alert ('data gagal di hapus')
    document.location.href= 'index.php';
    </script>";
}

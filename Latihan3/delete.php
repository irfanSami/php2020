<?php

require 'function.php';
//jika tidak ada ID
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$conn = koneksi();
$id = $_GET['id'];

if (delete($id) > 0) {
  echo "<script>
  alert('Deleted');
  document.location.href= 'index.php';
  </script>";
}

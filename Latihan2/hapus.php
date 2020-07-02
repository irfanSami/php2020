<?php
require 'function.php';

//jika tidak ada ID
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];

if (delete($id) > 0) {
  echo "<script>
  alert ('Deleted');
  document.location.href= 'index.php';
  </script>";
} else {
  echo "<script>
  alert ('Failed');
  document.location.href= 'index.php';
  </script>";
}

<?php
require 'function.php';
//jika tidak ada ID
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
$emp = query("SELECT * FROM employees WHERE EmployeeID = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Detail</title>
</head>

<body>
  <h3>Employee Detail</h3>

  <ul>
    <li>FirstName : <?= $emp['FirstName']; ?></li>
    <li>LastName : <?= $emp['LastName']; ?></li>
    <li>Address : <?= $emp['Address']; ?></li>
    <li><a href="ubah.php?id=<?= $emp['EmployeeID']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $emp['EmployeeID']; ?>" onclick="return confirm('Are you sure?');">Hapus</a></li>
    <li><a href="index.php">Kembali</a></li>
  </ul>
</body>

</html>
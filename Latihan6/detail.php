<?php
require 'function.php';
$id = $_GET['id'];
$s = query("SELECT * FROM shippers WHERE ShipperID = $id");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Shipper</title>
</head>

<body>
  <h3>Detail Shipper</h3>
  <ul>
    <li>
      Company Name : <?= $s['CompanyName']; ?>
    </li>
    <li>
      Phone Number : <?= $s['Phone']; ?>
    </li>
    <li>
      <a href="edit.php?id=<?= $s['ShipperID']; ?>">Edit</a> | <a href="delete.php?id=<?= $s['ShipperID']; ?>" onclick="return confirm('Apakah anda yakin ?')">Delete</a>
    </li>
    <li>
      <a href="index.php">Back</a>
    </li>
  </ul>
</body>

</html>
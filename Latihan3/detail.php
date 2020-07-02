<?php
require 'function.php';
//jika tidak ada ID
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id = $_GET['id'];
$c = query("SELECT * FROM shippers WHERE ShipperID = $id");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shipper Detail</title>
</head>

<body>
  <h3>Shipper Detail</h3>

  <ul>
    <li>Company Name : <?= $c['CompanyName']; ?></li>
    <li>Phone : <?= $c['Phone']; ?></li>
    <li><a href="edit.php?id=<?= $c['ShipperID'] ?>">Edit</a> | <a href="delete.php?id=<?= $c['ShipperID'] ?>" onclick="return confirm('Are you Sure?')">Delete</a></li>
    <li><a href="index.php">Back</a></li>

  </ul>
</body>

</html>
<?php
require 'function.php';
$id = $_GET['id'];
$s = query("SELECT * FROM suppliers WHERE SupplierID = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suppliers Detail</title>
</head>

<body>
  <h3>Suppliers Detail</h3>

  <ul>
    <li>Company Name : <?= $s['CompanyName']; ?></li>
    <li>Contact Name : <?= $s['ContactName']; ?></li>
    <li><a href="edit.php">Edit</a> | <a href="Add.php">Add</a></li>
    <li><a href="index.php">Back</a></li>
  </ul>
</body>

</html>
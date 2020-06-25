<?php
require 'function.php';

//Cara mengambil ID menggunakan GET
$id = $_GET['id'];

//Cara query employee berdasarkan ID
$emp = query("SELECT * FROM employees WHERE EmployeeID = $id")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Details</title>
</head>

<body>
  <h3>Employee Details</h3>
  <ul>
    <li>Last Name : <?= $emp['LastName']; ?></li>
    <li>Fist Name : <?= $emp['FirstName']; ?></li>
    <li>Title : <?= $emp['Title']; ?></li>
    <li>Title of Courtesy : <?= $emp['TitleOfCourtesy']; ?></li>
    <li>Birth Date : <?= $emp['BirthDate']; ?></li>
    <li>Hire Date : <?= $emp['HireDate']; ?></li>
    <li>Address : <?= $emp['Address']; ?></li>
    <li>City : <?= $emp['City']; ?></li>
    <li>Region :<?= $emp['Region']; ?> </li>
    <li>Postal Code : <?= $emp['PostalCode']; ?></li>
    <li>Country : <?= $emp['Country']; ?></li>
    <li>Home Phone : <?= $emp['HomePhone']; ?></li>
    <li>Extension : <?= $emp['Extension']; ?></li>
    <li>Notes : <?= $emp['Notes']; ?></li>
    <li>Reports To : <?= $emp['ReportsTo']; ?></li>
    <li><a href="ubah.php?id=<?= $emp['EmployeeID']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $emp['EmployeeID']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
    <li><a href=" index.php">Back</a></li>
  </ul>
</body>

</html>
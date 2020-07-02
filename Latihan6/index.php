<?php
require 'function.php';
$shipper = query("SELECT * FROM shippers");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shipper List</title>
</head>

<body>
  <h3>Shipper List</h3>
  <a href="add.php">Add Shipper</a>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Company Name</th>
      <th>Action</th>
    </tr>
    <?php
    $i = 1;
    foreach ($shipper as $s) : ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $s['CompanyName']; ?></td>
        <td><a href="detail.php?id=<?= $s['ShipperID']; ?>">Detail</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
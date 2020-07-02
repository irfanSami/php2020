<?php
require 'function.php';
$supplier = query("SELECT * FROM suppliers");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suppliers List</title>
</head>

<body>
  <h3>Suppliers List</h3>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>Company Name</th>
      <th>City</th>
      <th>Action</th>
    </tr>
    <?php foreach ($supplier as $s) : ?>
      <tr>
        <td><?= $s['CompanyName'] ?></td>
        <td><?= $s['City'] ?></td>
        <td><a href="detail.php?id=<?= $s['SupplierID']; ?>">Lihat Detail</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>
<?php
require 'function.php';
$employee = query("SELECT * FROM employees");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee List</title>
</head>

<body>
  <h3>Employee List</h3>
  <a href="add.php">Add Employee</a>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
    <?php
    $i = 1;
    foreach ($employee as $emp) : ?>
      <tr>
        <td>
          <?= $i++ ?>
        </td>
        <td><?= $emp['FirstName'] ?></td>
        <td><?= $emp['Address'] ?></td>
        <td><a href="detail.php?id=<?= $emp['EmployeeID']; ?>">Lihat Detail </a></td>
      </tr>
    <?php endforeach; ?>

  </table>
</body>

</html>
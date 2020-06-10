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
  <h3>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1;
      foreach ($employee as $emp) : ?>
        <tr>
          <td><?= $i++ ?></td>
          <td><?= $emp['FirstName'] ?></td>
          <td>
            <a href="detail_employee.php?id=<?= $emp['EmployeeID']; ?>">Lihat Detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </h3>
</body>

</html>
<?php
require 'function.php';
$employee = query("SELECT * FROM employees");

if (isset($_POST['cari'])) {
  $employee = cari($_POST['keyword']);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee List</title>
</head>
<h3>Employee List</h3>
<a href="tambah.php">Add Employee</a>
<br><br>
<form action="" method="POST">
  <input type="text" name="keyword" size="30" autofocus placeholder="Cari yang anda butuhkan" autocomplete="off">
  <button type="submit" name="cari">CARI</button>
</form>


<body>
  <h3>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Aksi</th>
      </tr>

      <?php if (empty($employee)) : ?>
        <tr>
          <td colspan="10">
            <p>Data Tidak Ditemukan</p>
          </td>
        </tr>
      <?php endif; ?>

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
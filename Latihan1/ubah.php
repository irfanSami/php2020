<?php
require 'function.php';

//Jika tidak ada id di URL
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

$id = $_GET['id'];

//query employee berdasarkan id
$emp = query("SELECT * FROM employees WHERE EmployeeID = $id");

if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data sudah diubah');
    document.location.href = 'index.php';
    
    </script>";
  } else {
    echo "failed";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Employee</title>
</head>

<body>
  <h3>Ubah Employee</h3>
  <form action="" method="POST">
    <ul>
      <input type="hidden" name="id" required value="<?= $emp['EmployeeID'] ?>">
      <li>
        <label>
          Last Name :
          <input type="text" name="lastname" required autofocus value="<?= $emp['LastName'] ?>">
        </label>
      </li>
      <li>
        <label>
          First Name :
          <input type="text" name="firstname" required value="<?= $emp['FirstName'] ?>">
        </label>
      </li>
      <li>
        <label>
          Title :
          <input type="text" name="title" required value="<?= $emp['Title'] ?>">
        </label>
      </li>
      <li>
        <label>
          Title Of Courtesy :
          <input type="text" name="titleofcourtesy" required value="<?= $emp['TitleOfCourtesy'] ?>">
        </label>
      </li>
      <li>
        <label>
          Birth Date :
          <input type="date" name="birthdate" required value="<?= $emp['BirthDate'] ?>">
        </label>
      </li>
      <li>
        <label>
          Hire Date :
          <input type="date" name="hiredate" required value="<?= $emp['HireDate'] ?>">
        </label>
      </li>
      <li>
        <label>
          Address :
          <input type="text" name="address" required value="<?= $emp['Address'] ?>">
        </label>
      </li>
      <li>
        <label>
          City :
          <input type="text" name="city" required value="<?= $emp['City'] ?>">
        </label>
      </li>
      <li>
        <label>
          Region :
          <input type="text" name="region" required value="<?= $emp['Region'] ?>">
        </label>
      </li>
      <li>
        <label>
          Postal Code :
          <input type="number" name="postalcode" required value="<?= $emp['PostalCode'] ?>">
        </label>
      </li>
      <li>
        <label>
          Country :
          <input type="text" name="country" required value="<?= $emp['Country'] ?>">
        </label>
      </li>
      <li>
        <label>
          Home Phone :
          <input type="number" name="homephone" required value="<?= $emp['HomePhone'] ?>">
        </label>
      </li>
      <li>
        <label>
          Extension
          <input type="number" name="extension" required value="<?= $emp['Extension'] ?>">
        </label>
      </li>
      <li>
        <label>
          Notes :
          <input type="text" name="notes" required value="<?= $emp['Notes'] ?>">
        </label>
      </li>
      <li>
        <label>
          Reports to :
          <input type="number" name="reportsto" required value="<?= $emp['ReportsTo'] ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">
          Ubah
        </button>
      </li>
    </ul>
  </form>
</body>

</html>
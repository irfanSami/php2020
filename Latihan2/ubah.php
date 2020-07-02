<?php
require 'function.php';
//jika tidak ada ID
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
$id = $_GET['id'];

$emp = query("SELECT * FROM employees WHERE EmployeeID = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('Success');
    document.location.href= 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('Failed');
    document.location.href= 'index.php';
    </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Employee</title>
</head>

<body>
  <h3>Add Employee</h3>

  <form action="" method="POST">
    <ul>
      <input type="hidden" name="id" value="<?= $emp['EmployeeID']; ?>">
      <li>
        <label>
          Last Name :
          <input type="text" name="LastName" autofocus required value="<?= $emp['LastName']; ?>">
        </label>
      </li>
      <li>
        <label>
          First Name :
          <input type="text" name="FirstName" required value="<?= $emp['FirstName']; ?>">
        </label>
      </li>
      <li>
        <label>
          Title :
          <input type="text" name="Title" value="<?= $emp['Title']; ?>">
        </label>
      </li>
      <li>
        <label>
          Title Of Courtesy :
          <input type="text" name="TitleOfCourtesy" value="<?= $emp['TitleOfCourtesy']; ?>">
        </label>
      </li>
      <li>
        <label>
          Birthdate :
          <input type="date" name="BirthDate" value="<?= $emp['BirthDate']; ?>">
        </label>
      </li>
      <li>
        <label>
          Hire Date :
          <input type="date" name="HireDate" value="<?= $emp['HireDate']; ?>">
        </label>
      </li>
      <li>
        <label>
          Address :
          <input type="text" name="Address" value="<?= $emp['Address']; ?>">
        </label>
      </li>
      <li>
        <label>
          City :
          <input type="text" name="City" value="<?= $emp['City']; ?>">
        </label>
      </li>
      <li>
        <label>
          Region :
          <input type="text" name="Region" value="<?= $emp['Region']; ?>">
        </label>
      </li>
      <li>
        <label>
          Postal Code :
          <input type="number" name="PostalCode" value="<?= $emp['PostalCode']; ?>">
        </label>
      </li>
      <li>
        <label>
          Country :
          <input type="text" name="Country" value="<?= $emp['Country']; ?>">
        </label>
      </li>
      <li>
        <label>
          Home Phone:
          <input type="number" name="HomePhone" value="<?= $emp['HomePhone']; ?>">
        </label>
      </li>
      <li>
        <label>
          Extension:
          <input type="number" name="Extension" value="<?= $emp['Extension']; ?>">
        </label>
      </li>
      <li>
        <label>
          Notes :
          <input type="text" name="Notes" value="<?= $emp['Notes']; ?>">
        </label>
      </li>
      <li>
        <label>
          Reports To :
          <input type="number" name="ReportsTo" value="<?= $emp['ReportsTo']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">
          Edit
        </button>
      </li>
      <li>
        <label>
          <a href="index.php">Back</a>
        </label>
      </li>
    </ul>

  </form>
</body>

</html>
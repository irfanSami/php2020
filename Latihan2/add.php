<?php
require 'function.php';
if (isset($_POST['add'])) {
  if (add($_POST) > 0) {
    echo "<script>
    alert('Data Added');
    document.location.href= 'index.php';
    </script>";
  } else {
    echo "<script>
    alert('Data Failed');
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
      <li>
        <label>
          Last Name :
          <input type="text" name="LastName" autofocus required>
        </label>
      </li>
      <li>
        <label>
          First Name :
          <input type="text" name="FirstName" required>
        </label>
      </li>
      <li>
        <label>
          Title :
          <input type="text" name="Title">
        </label>
      </li>
      <li>
        <label>
          Title Of Courtesy :
          <input type="text" name="TitleOfCourtesy">
        </label>
      </li>
      <li>
        <label>
          Birthdate :
          <input type="date" name="BirthDate">
        </label>
      </li>
      <li>
        <label>
          Hire Date :
          <input type="date" name="HireDate">
        </label>
      </li>
      <li>
        <label>
          Address :
          <input type="text" name="Address">
        </label>
      </li>
      <li>
        <label>
          City :
          <input type="text" name="City">
        </label>
      </li>
      <li>
        <label>
          Region :
          <input type="text" name="Region">
        </label>
      </li>
      <li>
        <label>
          Postal Code :
          <input type="number" name="PostalCode">
        </label>
      </li>
      <li>
        <label>
          Country :
          <input type="text" name="Country">
        </label>
      </li>
      <li>
        <label>
          Home Phone:
          <input type="number" name="HomePhone">
        </label>
      </li>
      <li>
        <label>
          Extension:
          <input type="number" name="Extension">
        </label>
      </li>
      <li>
        <label>
          Notes :
          <input type="text" name="Notes">
        </label>
      </li>
      <li>
        <label>
          Reports To :
          <input type="number" name="ReportsTo">
        </label>
      </li>
      <li>
        <button type="submit" name="add">
          Add
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
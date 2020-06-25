<?php
require 'function.php';

if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {
    echo "<script>
    alert('data added');
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
  <title>Add Employee</title>
</head>

<body>
  <h3>Add Employee</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Last Name :
          <input type="text" name="lastname" required autofocus>
        </label>
      </li>
      <li>
        <label>
          First Name :
          <input type="text" name="firstname" required>
        </label>
      </li>
      <li>
        <label>
          Title :
          <input type="text" name="title" required>
        </label>
      </li>
      <li>
        <label>
          Title Of Courtesy :
          <input type="text" name="titleofcourtesy" required>
        </label>
      </li>
      <li>
        <label>
          Birth Date :
          <input type="date" name="birthdate" required>
        </label>
      </li>
      <li>
        <label>
          Hire Date :
          <input type="date" name="hiredate" required>
        </label>
      </li>
      <li>
        <label>
          Address :
          <input type="text" name="address" required>
        </label>
      </li>
      <li>
        <label>
          City :
          <input type="text" name="city" required>
        </label>
      </li>
      <li>
        <label>
          Region :
          <input type="text" name="region" required>
        </label>
      </li>
      <li>
        <label>
          Postal Code :
          <input type="number" name="postalcode" required>
        </label>
      </li>
      <li>
        <label>
          Country :
          <input type="text" name="country" required>
        </label>
      </li>
      <li>
        <label>
          Home Phone :
          <input type="number" name="homephone" required>
        </label>
      </li>
      <li>
        <label>
          Extension
          <input type="number" name="extension" required>
        </label>
      </li>
      <li>
        <label>
          Notes :
          <input type="text" name="notes" required>
        </label>
      </li>
      <li>
        <label>
          Reports to :
          <input type="number" name="reportsto" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">
          Add New Employee
        </button>
      </li>
    </ul>
  </form>
</body>

</html>
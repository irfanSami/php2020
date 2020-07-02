<?php
require 'function.php';

//jika tidak ada ID
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
$id = $_GET['id'];
$c = query("SELECT * FROM shippers WHERE ShipperID = $id");


if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo "<script>
    alert('Edit Berhasil');
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
  <title>Add Shippers</title>
</head>

<body>
  <h3>Add Shippers</h3>

  <form action="" method="POST">
    <ul>
      <input type="hidden" name="id" value="<?= $c['ShipperID']; ?>">
      <li>
        <label>
          Company Name :
          <input type="text" name="CompanyName" required autofocus value="<?= $c['CompanyName']; ?>">
        </label>
      </li>
      <li>
        <label>
          Phone Number :
          <input type="text" name="Phone" required value="<?= $c['Phone']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="edit">
          Edit
        </button>
      </li>
      <li>
        <a href="index.php">Back</a>
      </li>
    </ul>

  </form>
</body>

</html>
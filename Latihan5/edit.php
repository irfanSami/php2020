<?php
require 'function.php';
$id = $_GET['id'];
$s = query("SELECT * FROM shippers WHERE ShipperID = $id");

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil Diubah');
    document.location.href='index.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah');
    document.location.href='index.php';
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Shipper</title>
</head>

<body>
  <h3>Add Shipper</h3>
  <form action="" method="POST">
    <ul>
      <input type="hidden" name="id" value="<?= $s['ShipperID']; ?>">
      <li>
        <label>
          Company Name :
          <input type="text" name="cn" autofocus required value="<?= $s['CompanyName']; ?>">
        </label>
      </li>
      <li>
        <label>
          Phone Number :
          <input type="number" name="phone" required value="<?= $s['Phone']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="edit">
          EDIT
        </button>
      </li>
      <li>
        <a href="index.php">Back</a>
      </li>
    </ul>

  </form>
</body>

</html>
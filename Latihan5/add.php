<?php
require 'function.php';
if (isset($_POST['tambah'])) {
  if (add($_POST) > 0) {
    echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href='index.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal ditambahkan');
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
      <li>
        <label>
          Company Name :
          <input type="text" name="cn" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Phone Number :
          <input type="number" name="phone" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">
          ADD
        </button>
      </li>
      <li>
        <a href="index.php">Back</a>
      </li>
    </ul>

  </form>
</body>

</html>
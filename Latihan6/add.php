<?php
require 'function.php';
if (isset($_POST['add'])) {
  if (add($_POST) > 0) {
    echo "<script>
    alert ('data berhasil ditambahkan')
    document.location.href= 'index.php';
    </script>";
  } else {
    echo "<script>
    alert ('data gagal ditambahkan')
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
      <li>
        <label>
          Company Name :
          <input type="text" name="cn">
        </label>
      </li>
      <li>
        <label>
          Phone Number :
          <input type="number" name="pn">
        </label>
      </li>
      <li>
        <button type="submit" name="add">
          Add
        </button>
      </li>
      <li>
        <a href="index.php">Back</a>
      </li>
    </ul>
  </form>
</body>

</html>
<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'northwind');
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function add($data)
{
  $conn = koneksi();
  $cn =  htmlspecialchars($data['CompanyName']);
  $phone = htmlspecialchars($data['Phone']);
  $query = "INSERT INTO shippers VALUES (null,'$cn','$phone')";
  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function delete($id)
{
  $conn = koneksi();
  $query = "DELETE FROM shippers WHERE ShipperID = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}


function edit($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $cn =  htmlspecialchars($data['CompanyName']);
  $phone = htmlspecialchars($data['Phone']);
  $query = "UPDATE shippers SET
            CompanyName = '$cn',
            Phone = '$phone'
            WHERE ShipperID = $id;
            ";

  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

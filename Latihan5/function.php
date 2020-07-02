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
  $company = htmlspecialchars($data['cn']);
  $phone = htmlspecialchars($data['phone']);
  $query = "INSERT INTO shippers VALUES(null,'$company','$phone')";
  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function delete($id)
{
  $conn = koneksi();
  $query = "DELETE FROM shippers WHERE ShipperID = $id";
  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function edit($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $company = htmlspecialchars($data['cn']);
  $phone = htmlspecialchars($data['phone']);
  $query = "UPDATE shippers SET
            CompanyName = '$company',
            Phone = '$phone'
            WHERE ShipperID = $id;
            ";
  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

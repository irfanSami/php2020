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
  $com = $data['cn'];
  $phone = $data['pn'];

  $query = "INSERT INTO shippers VALUES(null,'$com','$phone')";
  $query = mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function delete($id)
{
  $conn = koneksi();
  $query = "DELETE FROM shippers WHERE ShipperID = $id";
  $query = mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function edit($data)
{
  $conn = koneksi();
  $id = $data['id'];
  $com = $data['cn'];
  $phone = $data['pn'];

  $query = "UPDATE shippers SET
            CompanyName = '$com',
            Phone = '$phone'
            WHERE ShipperID = '$id'
              ";
  $query = mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

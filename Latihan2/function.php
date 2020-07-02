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

  $ln = htmlspecialchars($data['LastName']);
  $fn = htmlspecialchars($data['FirstName']);
  $tit = htmlspecialchars($data['Title']);
  $toc = htmlspecialchars($data['TitleOfCourtesy']);
  $bd = htmlspecialchars($data['BirthDate']);
  $hd = htmlspecialchars($data['HireDate']);
  $addrs = htmlspecialchars($data['Address']);
  $city = htmlspecialchars($data['City']);
  $reg = htmlspecialchars($data['Region']);
  $pscode = htmlspecialchars($data['PostalCode']);
  $country = htmlspecialchars($data['Country']);
  $hp = htmlspecialchars($data['HomePhone']);
  $ext = htmlspecialchars($data['Extension']);
  $notes = htmlspecialchars($data['Notes']);
  $rt = htmlspecialchars($data['ReportsTo']);

  $query = "INSERT INTO employees VALUES (null,'$ln','$fn','$tit','$toc','$bd','$hd','$addrs','$city','$reg','$pscode',
  '$country','$hp','$ext','$notes','$rt');";
  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function delete($id)
{
  $conn = koneksi();
  $query = "DELETE FROM employees WHERE EmployeeID = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $ln = htmlspecialchars($data['LastName']);
  $fn = htmlspecialchars($data['FirstName']);
  $tit = htmlspecialchars($data['Title']);
  $toc = htmlspecialchars($data['TitleOfCourtesy']);
  $bd = htmlspecialchars($data['BirthDate']);
  $hd = htmlspecialchars($data['HireDate']);
  $addrs = htmlspecialchars($data['Address']);
  $city = htmlspecialchars($data['City']);
  $reg = htmlspecialchars($data['Region']);
  $pscode = htmlspecialchars($data['PostalCode']);
  $country = htmlspecialchars($data['Country']);
  $hp = htmlspecialchars($data['HomePhone']);
  $ext = htmlspecialchars($data['Extension']);
  $notes = htmlspecialchars($data['Notes']);
  $rt = htmlspecialchars($data['ReportsTo']);

  $query = "UPDATE employees SET 
              LastName = '$ln',
              FirstName = '$fn',
              Title = '$tit',
              TitleOfCourtesy = '$toc',
              BirthDate = '$bd',
              HireDate = '$hd',
              Address = '$addrs',
              City = '$city',
              Region = '$reg',
              PostalCode = '$pscode',
              Country = '$country',
              HomePhone = '$hp',
              Extension = '$ext',
              Notes = '$notes',
              ReportsTo = '$rt'
              WHERE EmployeeID = $id;
              ";
  $query = mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

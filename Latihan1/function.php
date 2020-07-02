<?php
//------STEP by STEP
//1. Buat Koneksi ke DB
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'northwind');
}

//2. Query isi tabel & ubah data kedalam array
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


function tambah($data)
{
  $conn = koneksi();
  $ln = htmlspecialchars($data['lastname']);
  $fn = htmlspecialchars($data['firstname']);
  $tit = htmlspecialchars($data['title']);
  $toc = htmlspecialchars($data['titleofcourtesy']);
  $bd = htmlspecialchars($data['birthdate']);
  $hd = htmlspecialchars($data['hiredate']);
  $addrs = htmlspecialchars($data['address']);
  $city = htmlspecialchars($data['city']);
  $reg = htmlspecialchars($data['region']);
  $pscode = htmlspecialchars($data['postalcode']);
  $country = htmlspecialchars($data['country']);
  $hp = htmlspecialchars($data['homephone']);
  $ext = htmlspecialchars($data['extension']);
  $notes = htmlspecialchars($data['notes']);
  $rt = htmlspecialchars($data['reportsto']);
  $query = "INSERT INTO employees VALUES (null, '$ln','$fn','$tit','$toc','$bd','$hd','$addrs','$city','$reg',
  '$pscode','$country','$hp','$ext','$notes','$rt');
  ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);


  //var_dump($data);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE from employees WHERE EmployeeID = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $ln = htmlspecialchars($data['lastname']);
  $fn = htmlspecialchars($data['firstname']);
  $tit = htmlspecialchars($data['title']);
  $toc = htmlspecialchars($data['titleofcourtesy']);
  $bd = htmlspecialchars($data['birthdate']);
  $hd = htmlspecialchars($data['hiredate']);
  $addrs = htmlspecialchars($data['address']);
  $city = htmlspecialchars($data['city']);
  $reg = htmlspecialchars($data['region']);
  $pscode = htmlspecialchars($data['postalcode']);
  $country = htmlspecialchars($data['country']);
  $hp = htmlspecialchars($data['homephone']);
  $ext = htmlspecialchars($data['extension']);
  $notes = htmlspecialchars($data['notes']);
  $rt = htmlspecialchars($data['reportsto']);
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
              WHERE EmployeeID = $id";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);


  //var_dump($data);
}

function cari($keyword)
{
  $conn = koneksi();
  $query = "SELECT * FROM employees WHERE
            FirstName LIKE '%$keyword%' OR
            LastName LIKE '%$keyword%' OR
            City LIKE '%$keyword%' OR
            Region LIKE '%$keyword%' OR
            HomePhone LIKE '%$keyword%' OR
            TitleOfCourtesy LIKE '%$keyword%' 
            ";
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

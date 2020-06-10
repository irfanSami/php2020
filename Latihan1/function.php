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

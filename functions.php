<?php
// MENGHUBUNGKAN WEB DENGAN DATABSE
$connDB = mysqli_connect("localhost","root", "", "todolist");

// MENGISI & MENGAMBIL DATA PADA TABEL activity DENGAN MENGEMBALIKAN NILAI ARRAY ASOSIATIF
$activity = query("SELECT * FROM activity");
function query($query) {
  global $connDB;
  // MENGABIL TABEL activity DARI DATABASE todolist
  $getTabel = mysqli_query($connDB, $query);
  $data = [];
  while($activity = mysqli_fetch_assoc($getTabel)) {
    $data[] = $activity;
  }
  return $data;
}


// MEMBUAT FUNGSI TAMBAH DATA PADA TABEL activity
function addData($add) {
  global $connDB;
  // AMBIL DATA DARI 
  $nama = htmlspecialchars($add["nama"]);
  // QUERY INSERT DATA
  $query = "INSERT INTO activity VALUES('', '$nama')";
  mysqli_query($connDB, $query);
  return mysqli_affected_rows($connDB);
}


// MEMBUAT FUNGSI HAPUS DATA PADA TABEL activyty
function deleteData($id) {
  global $connDB;
  // QUERY DELETE DATA
  mysqli_query($connDB, "DELETE FROM activity WHERE id = $id");
  return mysqli_affected_rows($connDB);
}


// MEMBUAT FUNGSI CARI DATA
function search($search) {
  $query = "SELECT * FROM activity WHERE nama LIKE '%$search%'";
  return query($query);
}
?>
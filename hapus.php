<?php
require 'functions.php';

// MEMBUAT PERINTAH UNTUK HAPUS DATA
$delete = $_GET["id"];
if(deleteData($delete) > 0) {
  echo "
    <script>
      alert('Data berhasil DIHAPUS!');
      document.location.href = 'index.php';
    </script>
  ";
} else {
  echo "
    <script>
      alert('Data gagal DIHAPUS!');
      document.location.href = 'index.php';
    </script>
  ";
}
?>
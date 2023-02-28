<?php
require 'functions.php';

// MENGECEK APAKAH DATA BERHASIL DITAMBAHKAN ATAU TIDAK
if(isset($_POST["submit-add"])) {
  if(addData($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil DITAMBAHKAN!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
      <script>
        alert('Data gagal DITAMBAHKAN!');
        document.location.href = 'index.php';
      </script>
    ";
  }
}

if(isset($_POST["submit-search"])) {
  $activity = search($_POST["search"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do App</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- ===== Navbar ===== -->
  <nav>
    <!-- Nav Header -->
    <h2>ToDoing</h2>
    <button class="add-button" id="add-button">Add New</button>
    <!-- Form Box -->
    <form action="" method="post" id="add-box" class="form-box add-box">
      <div class="form-header">
        <h3>Add schedule</h3>
      </div>
      <div class="form-handling">
        <input type="text" name="nama" id="nama" class="input-box">
        <button type="submit" name="submit-add" class="btn-button">Add</button>
      </div>
    </form>
    <!-- Form Box -->
    <!-- Akhir Nav Header -->
  </nav>
  <!-- ===== Akhir Navbar ===== -->


  <!-- ===== Main ===== -->
  <main>
    <!-- Form Search -->
    <form action="" method="post" class="search-box">
      <input type="text" name="search" id="search" class="input-box">
      <button type="submit" name="submit-search" class="btn-button">
        <i class="ri-search-line"></i>
      </button>
    </form>
    <!-- Akhir Form Search -->

    <!-- Card List -->
    <?php $no = 1;?>
    <?php foreach ($activity as $item) :?>
    <div class="card">
      <p class="card-number"><?= $no;?>.</p>
      <p class="card-title"><?= $item["nama"];?></p>
      <a href="hapus.php?id=<?= $item["id"];?>" class="delete-button">
        <i class="ri-delete-bin-6-line"></i>
      </a>
    </div>
    <?php $no++;?>
    <?php endforeach;?>
    <!-- Akhir Card List -->
  </main>
  <!-- ===== Akhir Main ===== -->


  <script src="script.js"></script>
</body>
</html>
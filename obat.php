<?php

include "koneksi.php";

$stmt = $db->prepare("SELECT * FROM obat");
$stmt->execute();

$obat = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Apotik Online</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="assets/img/house-heart.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Apotik Online    
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
             <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="obat.php">Obat</a>
                <a class="nav-link active" aria-current="page" href="checkout.php">Checkout</a>
                <a class="nav-link active" aria-current="page" href="logout.php">Keluar</a>
      </div>
        </div>
         </div>
    </nav>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Obat</th>
      <th scope="col">Harga</th>
    </tr>
    <?php
        foreach ($obat as $key) {
    ?>
        <tr>
            <td scope="col"><?= $key["id"] ?></td>
            <td scope="col"><?= $key["obat"] ?></td>
            <td scope="col"><?= $key["harga"] ?></td>
        </tr>
    <?php
        }
    ?>
  </thead>
  <tbody>
  </tbody>
</table>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
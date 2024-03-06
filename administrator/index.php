<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body >
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Dasboard</h1>
 <!-- ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : <?= $_SESSION['nama']; ?> -->

  <?php
  //ambil koneksi
  include "../config.php";

  //hitung jumlah barang dari tb_barang
  $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
  $jumlahBarang = mysqli_fetch_assoc($barang);

  //hitung jumlah pembelian dari tb_penjualan
  $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
  $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

  //hitung jumlah pengguna dari tb_pelanggan
  $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
  $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);
  ?>
<div class="row">
  <div class="col">
<div class="card" style="width: 200px;">
  <img src="../img/barang1.jpg" class="card-img-top" alt="..." height="200px">
  <div class="card-body">
      <p class="card-text">
            <center>
            <button class="btn btn-primary">
              Data Barang <span class="badge text-bg-socondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
            </button>
            </center>
          </p>
         </div>
        </div>
      </div>

      <div class="col">
     <div class="card" style="width: 200px;">
  <img src="../img/gambar2.png" class="card-img-top" alt="..."height="200px">
  <div class="card-body">
      <p class="card-text">
            <center>
            <button class="btn btn-primary">
              Data Pembelian <span class="badge text-bg-socondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
            </button>
            </center>
          </p>
         </div>
        </div>
      </div>
    
     
      <div class="col">
         <div class="card" style="width: 300px;">
         <img src="../img/pelanggan.png" class="card-img -top" alt="..."height="200px">
         <div class="card-body">
          <p class="card-text">
            <center>
            <button class="btn btn-primary">
              Data Pelanggan <span class="badge text-bg-socondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
            </button>
            </center>
          </p>
         </div>
        </div>
      </div>
     
     <div class="card">
      <div class="card-header">
        ID : <?= $_SESSION['id_login']; ?>
      </div>
      <div class="card-body">
        <blockquote class=" blockquate  mb-0">
          <p pengguna></p>
          <footer class="blockquote-footer"><?= $_SESSION['nama']; ?></footer>
</blockquote>
        </div>
     </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>

 
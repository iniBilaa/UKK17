<?php
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_ubah_pengguna.php
$id_login = $_POST['id_login'];
$nama= $_POST['nama'];
$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];
$status = $_POST['status'];

//simpan hasil ubah ke tb_login
$sql = mysqli_query($koneksi, "UPDATE tb_login SET id_login='$id_login',        
                        nama='$nama',username_login='$username_login',password_login='$password_login',         
                        status='$status' WHERE id_login='$id_login'");

//jika berhasil kembali ke halaman v_registrasi.php
if ($sql) {
  header('location: v_registrasi.php');
}
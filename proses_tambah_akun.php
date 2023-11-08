<?php
if($_POST){
    // $id_user=$_POST['id_user'];
    $nama_user=$_POST['nama_user'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    if(empty($nama_user)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_akun.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='tambah_akun.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_akun.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama_user, email, password) value ('".$nama_user."','".$email."','".$password."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tambah_akun.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tambah_akun.php';</script>";
        }
    }
}
?>
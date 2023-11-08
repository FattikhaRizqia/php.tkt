<?php
if ($_POST) {
    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi input
    if (empty($nama_user)) {
        echo "<script>alert('Nama user tidak boleh kosong');location.href='ubah_user.php?id_user=" . $id_user . "';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('Email tidak boleh kosong');location.href='ubah_user.php?id_siswa=" . $id_user . "';</script>";
    } else {
        include "koneksi.php";
        // Periksa apakah password kosong atau tidak untuk menentukan query yang akan dijalankan
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE user SET nama_user='" . $nama_user . "', email='" . $email . "' WHERE id_user = '" . $id_user . "' ") or die(mysqli_error($conn));
        } else {
            $update = mysqli_query($conn, "UPDATE user SET nama_user='" . $nama_user . "', email='" . $email . "', password='" . md5($password) . "' WHERE id_user = '" . $id_user . "'") or die(mysqli_error($conn));
        }

        if ($update) {
            echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_siswa=" . $id_user . "';</script>";
        }
    }
}
?>


<!-- <?php
if($_POST){
    $id_user=$_POST['id_user']
    $email=$_POST['email'];
    $password=$_POST['password'];
    if(empty($nama_user)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_akun.php';</script>";

    } elseif(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='tambah_akun.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama_user='".$nama_user."',
            email='".$email."', id_user = '".$id_user."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama_user='".$nama_user."', email='".$email."', password='".md5($password)."', id_user = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
        
    } 
}
?> -->
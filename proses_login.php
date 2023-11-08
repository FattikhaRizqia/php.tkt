<?php 
    if($_POST){
        $email=$_POST['email'];
        $password=$_POST['password']; 
        include "koneksi.php";
        $email = mysqli_real_escape_string($conn,$email);
        $password = mysqli_real_escape_string($conn,$password);
        $qry_login=mysqli_query($conn,"SELECT * FROM user where email = '".$email."'");

        if(mysqli_num_rows($qry_login)>0){
            $dt_login=mysqli_fetch_array($qry_login);
            session_start();
            $_SESSION['id_user']=$dt_login['id_user'];
            $_SESSION['nama_user']=$dt_login['nama_user'];
            $_SESSION['email']=$dt_login['email'];
            $_SESSION['password']=$dt_login['password'];
            $_SESSION['status_login']=true;
            header("location: home.php");
        }         
    }else {
        echo "<script>alert('Email dan Password tidak benar');location.href='login.php';</script>";
    }
?>






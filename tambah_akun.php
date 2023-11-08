<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <style>
    .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}
.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
</style>

<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5">
        <h3>Tambah Akun</h3>
        <form class="card-body cardbody-color p-lg-5">
    <form action="proses_tambah_akun.php" method="post">
        Nama :
        <input type="text" name="nama_user" value="" class="form-control">
        Email : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input href="proses_tambah_akun.php" type="submit" value="Tambah Akun" class="btn btn-primary my-3">
        <p margin="5px 0"  class="login-text">Sudah punya akun? <a href="login.php">Login</a></p>
         
    </form>
</from>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  
</body>
</html>


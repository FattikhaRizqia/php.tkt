<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php 
    include "koneksi.php";
    $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");
    $dt_user=mysqli_fetch_array($qry_get_user);
    ?>
    <h3>Tambah User</h3>
    <form action="proses_tambah_user.php" method="post">
        Id :
    <input type="text" name="id_user" value= "<?=$dt_user['id_user']?>" class="form-control">
        nama siswa :
  <input type="text" name="nama_user"  value= "<?=$dt_user['id_user']?>" class="form-control">
        Email : 
<input type="text" name="email" value= "<?=$dt_user['id_user']?>" class="form-control">
        Password : 
<input type="password" name="password" value="" class="form-control">
<input type="submit" name="simpan" value="Ubah User" class="btn btn-primary">
    </form>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

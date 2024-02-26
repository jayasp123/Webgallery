<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand bg-warning" href="home.php">Website Gallery Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        
    </div>
      <a href="index.php" class="btn btn-outline-warning m-1">Home</a>
      <a href="album.php" class="btn btn-outline-info m-1">album</a>
      <a href="foto.php" class="btn btn-outline-info m-1">Foto</a>
      <a href="Logout.php" class="btn btn-outline-danger m-1">Logout</a>


    </div>
  </div>
</nav>
    <h1>Halaman Home</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
    
    
</body>
</html>
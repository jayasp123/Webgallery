<?php
    include "koneksi.php";
    session_start();

    $komentarid=$_GET['komentarid'];

    $sql=mysqli_query($conn,"delete from komentar where komentarid='$komentarid'");

    header("location:komentar.php?fotoid=53");
?>
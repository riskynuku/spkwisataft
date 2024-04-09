<?php
    session_start();
    include("koneksi.php");
    if (@$_SESSION['userlogin'] == "")
    {
        header("location:login.php?pesan=Belum Login");
        exit;
    }
    mysqli_query($db, "DELETE FROM admin WHERE username = '$_GET[username]'");
    header("location:dataadmin.php");
?>
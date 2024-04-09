<?php
session_start();
	include("koneksi.php");
	if (@$_SESSION['userlogin'] == "")
	{
		header("location:login.php?pesan=Belum Login");
		exit;
	}
	if (isset($_POST['edit'])) {
	    
        if(!empty($_FILES['uploaded_file'])) {
            
            $path = "destinasi/";
            $path = $path . basename( $_FILES['uploaded_file']['name']);
        
            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                
              mysqli_query($db, "UPDATE alternatif SET nama_alternatif = '$_POST[nama_alternatif]', deskripsi = '$_POST[deskripsi]', gambar = '$path', urlmap = '$_POST[urlmap]'  WHERE id_alternatif = '$_POST[id_alternatif]'");
		      header("location:alternatif.php");
		      
            } else {
                mysqli_query($db, "UPDATE alternatif SET nama_alternatif = '$_POST[nama_alternatif]', deskripsi = '$_POST[deskripsi]', gambar = 'null', urlmap = '$_POST[urlmap]'  WHERE id_alternatif = '$_POST[id_alternatif]'");
		        header("location:alternatif.php");
            }
        }
	} else if (isset($_POST['add'])) {
	    
        if(!empty($_FILES['uploaded_file'])) {
            
            $path = "destinasi/";
            $path = $path . basename( $_FILES['uploaded_file']['name']);
        
            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
                
              mysqli_query($db, "INSERT INTO alternatif(id_alternatif, nama_alternatif, deskripsi, gambar, urlmap) VALUES('$_POST[id_alternatif]', '$_POST[nama_alternatif]', '$_POST[deskripsi]', '$path', '$_POST[urlmap]')");
		      header("location:alternatif.php");
            } else {
                mysqli_query($db, "INSERT INTO alternatif(id_alternatif, nama_alternatif, deskripsi, gambar, urlmap) VALUES('$_POST[id_alternatif]', '$_POST[nama_alternatif]', '$_POST[deskripsi]', 'destinasi/dummy_300x400_ffffff_cccccc.png', '$_POST[urlmap]')");
		        header("location:alternatif.php");
            }
        }
	}
?>
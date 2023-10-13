<?php

session_start();
include "koneksi.php";
include "functionCrud.php";

  //  UNTUK CREATE
if(isset($_POST['simpan'])){
      // PEMANGGILAN FUNGSI
   $tambah_data = create($_POST);

    if( $tambah_data){
      $_SESSION['notif'] = "Success Data Berhasil Ditambahkan!";
      header("location: index.php");
    } else{
        $_SESSION['notif'] = " Data Gagal Ditambahkan!";
      header("location: daftar.php");
    }
}


  // UNTUK UPDATE

if(isset($_POST['update'])){
  
   $edit_data = edit($_POST);

    if($edit_data){
      $_SESSION['notif'] = "Success Data Berhasil Diubah !";
      header("location: tabel.php");
    } else{
        $_SESSION['notif'] = "Data Gagal Diubah!";
        header("location: edit.php");
    }
}


      //  UNTUK DELETE
if(isset($_GET['id_siswa'])){
  
   $hapus_data = hapus($_GET);

    if($hapus_data){
      $_SESSION['notif'] = "Success Data Berhasil Dihapus !";
      header("location: tabel.php");
    } else{
        $_SESSION['notif'] = "Data Tidak Dihapus !";
        header("location: tabel.php");
    }
}


 // UNTUK LOGIN
if(isset($_POST['login'])){

  
  $username = $_POST["username"];
  $password = $_POST["password"];
 
   $result = mysqli_query($koneksi ,"SELECT * FROM users WHERE username = '$username'");
 
    // CEK USERNAME
   if(mysqli_num_rows($result) === 1){
   
     $row = mysqli_fetch_assoc($result);
     // CEK PASSWORD YANG SUDAH DI HASH MENGGUNAKAN FUNCTION PASSWORD VERIFY

    if(password_verify($password, $row["password"])){
       $_SESSION['login']= true;
          header("Location: index.php");
          exit;
    }   else {
      header("location: test.php");
    }
    

   }

 
 }
?>
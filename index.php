 <?php
 session_start();

  if(!isset($_SESSION['login'])){
    header("Location: login.php");
    // $username = $_SESSION['username'];
    exit;
 }    

   include "functionCrud.php";
 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama | DIGITALENT</title>


  </head>
  <body>



 

   
  <div class="container-fluid pt-3">
<div class="row  gap-4 text-center" >

  <div class="col-md-3 ms-3">
    <?php 
       $rn = "home";
       include "template/sidebar.php";  
       ?>
  </div>

  <div class="col-md-8 " >
    <div class="row  gap-4 ">
      <div class="col-md-12  ">
         
      <?php 
      $rn = "home";
      include "template/navbar.php"; 
       ?>


    </div>
    </div>

    <div class="row pt-1">
      <div class="col-md-12 ">

      <div class="container mt-5"  >
   
   <div id="typing">
   <h2 class="text-center" >  SELAMAT DATANG DI WEBSITE PENERIMAAN SISWA BARU !</h2> 
   <h5>
      <?php if($_SESSION['login']) : ?>
        <span class="text-uppercase">
        <?php echo  $_SESSION['username']; ?>
                            </span>
    
    <?php endif; ?>
      
       Anda Login Pada <?php echo date_hour(); ?>

    </h5>
   <p class="fw-light text-center" >Semuanya Bisa Anda Dapatkan Pelatihan  <span id="type_text" style="color: #007AFF ;"></span> Bersama Digitalent</p>

   </div>

      <!-- NOTIF  TAMBAH DATA BERHASIl -->
              <?php
    if(isset($_SESSION['notif']) && $_SESSION['notif'] != '') {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo $_SESSION['notif']?></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php
    unset($_SESSION['notif']);
    }
    ?>    
   
      </div>
    </div>
  </div>

 
</div>
</div>

  
    
  

    <div class="container fixed-bottom">
    <?php
    include "template/footer.php"; 
    ?>
    </div>
  

    <script src="Js/app.js"></script>
 
  </body>
</html>
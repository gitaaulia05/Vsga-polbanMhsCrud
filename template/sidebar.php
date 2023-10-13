
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | DIGITALENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/sidebar.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body style="background-color: #f8f9fa !important;
" >

    <aside class="side bg-white rounded shadow p-3" >
      
<div class=" container-fluid d-flex align-items-start pt-3">
  <div class="nav flex-column  me-3"  aria-orientation="vertical">
  <div class="container-fluid text-center">
    <a class="navbar-brand" href="#">
      <img src="images/digi.png" width="30px">
       DIGITALENT 
    </a>
  </div>
  <hr class=" border border-secondary border-1 opacity-75">
 <ul class="nav nav-2 flex-column text-start">
      <!-- DIBAWAH INI MERUPAKAN CONTOH PERCABANGAN IF DENGAN MENYAMAKAN SETIAP VAR DI SETIAP HALAMAN 
      APABILA SAMA LINK DALAM NAVBAR AKAN AKTIF -->
  <li class="nav-item ">
    <a class="nav-link text-secondary fw-lighter <?php if ($rn == "home") {echo "active"; }?>"href="index.php"> <i class="fa-solid fa-house"></i> <span class="text">Home</span></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-secondary fw-lighter <?php if ($rn == "df") {echo "active"; }?>"  href="daftar.php"> <i class="fa-solid fa-file-circle-plus"></i> <span class="text">Daftar Baru</span> </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-secondary fw-lighter <?php if ($rn == "tbl") {echo "active"; }?>" href="tabel.php">  <i class="fa-solid fa-table"></i>  <span class="text">Pendaftar</span> </a>
  </li>
      <!-- SELESAI MENU ACTIVE -->
  <li class="nav-item  ">

          <a class="nav-link text-secondary " href="logout.php">   <i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
  
</ul>
    </div>
  
  </div>
</aside>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>



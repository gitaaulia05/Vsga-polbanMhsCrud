

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAVBAR | DIGITALENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
      *{
        font-family: 'Open Sans', sans-serif;
     
      }

    </style>

</head>
  <body>
<nav class="navbar navbar-expand-lg  bg-white rounded-3 shadow-sm">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page">Pages / <span class="text-dark">
          <?php  if ($rn == "home") {echo "Home"; }?>
          <?php  if ($rn == "df") {echo "Daftar Baru"; }?>
          <?php  if ($rn == "tbl") {echo "Tabel Pendaftar "; }?>
          <?php  if ($rn == "tble") {echo "Form Edit Data "; }?>
          </span> </a>
        </li>
       
      </ul>

      <div class="user ms-auto">
                 <a>
      <i class="fa fa-user me-sm-1"></i>
      <?php if($_SESSION['login']) : ?>
        <span class="text-uppercase">
        <?php echo  $_SESSION['username']; ?>
                            </span>
    
    <?php endif; ?>
    </a>
      </div>
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 
  </body>
</html>
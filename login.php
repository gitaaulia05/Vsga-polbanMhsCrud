
<?php
session_start();
    // JIKA SUDAH LOGIN LANGSUNG MASUK KEHALAMAN INDEX TIDAK BISA MASUK KE HALAMAN LOGIN LAGI
 if(isset($_SESSION["login"])) {
  header("Location: index.php" );
 }
include "koneksi.php";
// include "functionCrud.php";
if(isset($_POST['login'])){
 $username = $_POST["username"];
 $password = $_POST["password"];

  $result = mysqli_query($koneksi ,"SELECT * FROM users WHERE username = '$username'");

  if(mysqli_num_rows($result) === 1){

    $row = mysqli_fetch_assoc($result);

   if(password_verify($password, $row["password"])){
      $_SESSION['username'] =  $username;
      $_SESSION['login']= true;
         header("Location: index.php");
         exit;
   }   
  
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | DIGITALENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  *{
    font-family: 'Montserrat', sans-serif;
  }

</style>
</head>
<body style="background-color: #f8f9fa">



      <div class="container bg-white mt-5 pb-5 pt-5  rounded shadow " style="width: 50%;" >

 

       <div class="container text-center">

      
    <?php if (isset($error)) : ?>
            <p class="text-danger text-center "> EMAIL ATAU PASSWORD SALAH !</p>
        <?php endif; ?>


        <form action="" method="POST">
             <div class="form" style="margin-left: 10%; margin-right:10%;">
        <div class="form-floating mb-3  ">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"> 
  <label for="floatingInput" >username</label>
</div>
<div class="form-floating  ">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
  
</div>

<div class="d-grid gap-2">
 <button type="submit" class="btn btn-primary mt-5" name="login">LOGIN</button>
    </div>
        </form>
    </div> 

  
  
        </div>
</div>



       <!-- <div class="container" style="margin-top: 10%;">
    <?php if (isset($_GET['error'])) : ?>
            <p>Error: <?php echo $_GET['error']; ?></p>
        <?php endif; ?>


        <form action="" method="POST">
            
     
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"> 
  <label for="floatingInput" >username</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
  <label for="floatingPassword">Password</label>
</div>

 <button type="submit" class="btn btn-primary mt-5" name="login">LOGIN</button>
        </form>
       </div> -->

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>



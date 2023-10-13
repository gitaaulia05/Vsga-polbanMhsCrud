<?php
 session_start();

  if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
 }
 ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMULIR PENDAFTARAN | DIGITALENT</title>
  </head>
  <body>


  <div class="container-fluid pt-3">


<div class="row  gap-4 text-center" >

  <div class="col-md-3 ms-3 ">
    <?php   
       $rn = "df";
     include "template/sidebar.php"; 
      ?>
  </div>

  <div class="col-md-8 " >
    <div class="row  gap-4 ">
      <div class="col-md-12  ">
         
      <?php 
      $rn= 'df';
      include "template/navbar.php"; 
       ?>

    </div>
    </div>

      <!-- MAIN KONTEN -->
    <div class="row pt-1">
      <div class="col-md-12 " >

      <!-- TAMBAH DATA  -->
         <div class="container " style="margin-top: 6%;">

          <div class=" shadow p-3 mb-5 bg-body rounded">
          <h3 class="text-center pb-2">Formulir Pendaftaran Siswa Baru | DIGITALENT</h3>
          <form action="proses.php" method="POST">


          <input type="hidden" class="form-control" id="id_siswa" name="id_siswa">

          <div class="row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          </div>

          <div class="row mb-3">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
          <textarea type="text" class="form-control" id="alamat" name="alamat" required></textarea>
          </div>
          </div>

          <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
          <div class="form-check">

            <div class="row">

              <div class="col-sm-2">
              <input class="form-check-input" type="radio" name="jenkel" id="jenkel"  value="Laki-laki" required>
            <label class="form-check-label" for="jenkel" >
            Laki Laki
            </label>
              </div>

              <div class="col-sm-2">
              <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan" required>
            <label class="form-check-label" for="jenkel">
              Perempuan
            </label>
              </div>
          </div>


          </div>
          </fieldset>


          <div class="row mb-3">
          <label for="agama" class="col-sm-2 col-form-label">Agama</label>
          <div class="col-sm-10">
          <select  name="agama" id="agama" class="form-select" aria-label="Default select example">
          <option selected value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
          </select>
          </div>
          </div>



          <div class="row mb-3">
          <label for="sekolah_asal" class="col-sm-2 col-form-label">Sekolah Asal</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" required>
          </div>
          </div>

          <button type="submit" class="btn btn-primary" name="simpan">Daftar</button>
          <button type="reset" class="btn btn-warning" name="reset">Ulangi</button>

          </form>

          </div>
          </div>
       <!-- TAMBAH DATA  -->

      </div>
    </div>

  </div>

 
</div>
</div>

  
<?php
    include "template/footer.php"; 
    ?>


  </body>
</html>
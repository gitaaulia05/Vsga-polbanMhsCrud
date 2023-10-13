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
    <title> EDIT DATA | DIGITALENT</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body>


  
  <div class="container-fluid pt-3">


<div class="row  gap-4 text-center" >

  <div class="col-md-3 ms-3 ">
    
    <?php   
       $rn = "tbl";
     include "template/sidebar.php"; 
      ?>
  </div>

  <div class="col-md-8 " >
    <div class="row  gap-4 ">
      <div class="col-md-12  ">
         
      <?php
       $rn = "tble";
       include "template/navbar.php";
        ?>


    </div>
    </div>

    <div class="row pt-1">
      <div class="col-md-12 " >
     
            

   <div class="container " style="margin-top: 6%;">
      
      <?php
      include 'koneksi.php';
      $id_siswa= $_GET['id_siswa'];
      $data= mysqli_query($koneksi, "SELECT * FROM daftar_siswa WHERE id_siswa = '$id_siswa'");
      while($d=mysqli_fetch_array($data)){
      ?>
       <div class=" shadow p-3 mb-5 bg-body rounded">
       <h3 class="text-center pb-2"> FORMULIR EDIT DATA | DIGITALENT</h3>
       <form action="proses.php" method="POST">
   
   
       <input type="hidden" class="form-control" id="id_siswa" name="id_siswa" value="<?php echo $d['id_siswa']?>">
   
   <div class="row mb-3">
     <label for="nama" class="col-sm-2 col-form-label">Nama</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama']?>" required>
     </div>
   </div>
   
   
   <div class="row mb-3">
     <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
     <div class="col-sm-10">
       <textarea type="text" class="form-control" id="alamat" name="alamat" required><?php echo $d['alamat']?></textarea>
     </div>
   </div>
   
   <fieldset class="row mb-3">
     <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
     <div class="col-sm-10">
       <div class="form-check">
      
         <div class="row">
   
           <div class="col-sm-3">
           <input class="form-check-input" type="radio" name="jenkel" id="jenkel"  value="Laki-laki" <?php if($d['jenkel']=='Laki-laki'){ ?>
               checked
            <?php }   ?> >
         <label class="form-check-label" for="jenkel" >
         Laki Laki
         </label>
           </div>
   
           <div class="col-sm-3">
           <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan" <?php if($d['jenkel']=='Perempuan'){ ?>
               checked
            <?php }   ?> >
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
   
   <option  value="Islam" <?php if($d['agama']=='Islam'){ ?>
      selected
        <?php }   ?>>Islam</option>
   
   <option value="Kristen" <?php if($d['agama']=='Kristen'){ ?>
       selected 
        <?php }   ?>>Kristen</option>
   
   <option value="Hindu" <?php if($d['agama']=='Hindu'){ ?>
      selected
        <?php }   ?>>Hindu</option>
   <option value="Buddha" <?php if($d['agama']=='Buddha'){ ?>
      selected
        <?php }   ?>>Buddha</option>
   <option value="Konghucu" <?php if($d['agama']=='Konghucu'){ ?>
      selected
        <?php }   ?>>Konghucu</option>
   </select>
     </div>
   </div>
   
   
   
   <div class="row mb-3">
     <label for="sekolah_asal" class="col-sm-2 col-form-label">Sekolah Asal</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" value="<?php echo $d['sekolah_asal']?>" required>
     </div>
   </div>
   
   <button type="submit" class="btn btn-primary" name="update">Edit Data</button>
   <a href="tabel.php" class="btn btn-danger" >Kembali</a>
   </form>
   
       </div>
       <?php
        }
       ?>
    </div>

      </div>
    </div>

  </div>
</div>
</div>


















    </body>
</html>
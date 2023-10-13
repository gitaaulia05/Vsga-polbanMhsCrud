
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
    <title>TABEL PENDAFTAR | DIGITALENT</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/table.css">

      <style>
        .text-xs {
    font-size: 0.75rem !important;
}
      </style>

  </head>
  <body>

  <div class="container-fluid pt-3">


<div class="row  gap-4 text-center" >

  <div class="col-md-3 ms-3 ">
  <?php  
    $rn= 'tbl';  
       include "template/sidebar.php"; 
      ?>
  </div>

  <div class="col-md-8 " >
    <div class="row  gap-4 ">
      <div class="col-md-12  ">
         
      <?php    
       $rn= 'tbl';
       include "template/navbar.php"; 
      ?>

    </div>
    </div>


        <!-- // MAIN KONTEN -->
    <div class="row pt-1">
      <div class="col-md-12 ">
    <div class="container mb-5  " style="margin-top: 7%;">
    
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

<div class="card  border border-0 shadow p-3 mb-5 b">
  <div class="card-header bg-white text-center">
     Data Pendaftar
  </div>
  <div class="card-body">
  
  <table id="myTable" class="table align-items-center">
        <thead>
            <tr>
                <th class="fw-lighter fs-6 font-weight-bolder opacity-7">No </th>
                <th class="fw-lighter fs-6">Nama</th>
                <th class="fw-lighter fs-6">Alamat</th>
                <th class="fw-lighter fs-6">Jenis Kelamin</th>
                <th class="fw-lighter fs-6">Agama</th>
                <th class="fw-lighter fs-6">Sekolah Asal</th>
                <th class="fw-lighter fs-6 text-center  ">Aksi</th>
             
            </tr>
        </thead>
       
        <tbody>
            <!-- DI BAWAH INI MERUPAKAN PERULANGAN MENGGUNAKAN WHILE UNTUK MENAMPILKAN SELURUH DATA DARI TABEL
             DAFTAR SISWA  DARI DATABASE -->
        <?php
        include "koneksi.php";
        $data = mysqli_query( $koneksi ,"select * from daftar_siswa");
        $no = "1";
        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td class="text-secondary"><?= $d['id_siswa']?></td>
                <td class="text-xs"><?= $d['nama']?></td>
                <td class="text-xs"><?= $d['alamat']?></td>
                <td class="text-xs"><?= $d['jenkel']?></td>
                <td class="text-xs"><?= $d['agama']?></td>
                <td class="text-xs"><?= $d['sekolah_asal']?></td>
                <td class="text-center">
                 <a href="edit.php?id_siswa=<?=$d['id_siswa'];?>" class="badge badge-sm bg-gradient-warning text-decoration-none">Edit</a> 
                 <a href="proses.php?id_siswa=<?=$d['id_siswa'];?>" data-id="<?=$d['id_siswa'];?>" name="hapus" class="badge badge-sm bg-gradient-danger text-decoration-none show_confirm"  >Hapus</a>
            
                </td>
            </tr>
            <?php
        }
         ?>
            <!-- PERULANGAN WHILE SELESAI  -->
        </tbody>

       
    </table>

      <!-- HITUNG JUMLAH PENDAFTAR -->
    <?php 
     $sum = mysqli_query($koneksi, "SELECT COUNT(id_siswa) AS id FROM  daftar_siswa");
     $row = mysqli_fetch_array($sum);
     $total = $row[0];
   ?> 
    <h5>Total Pendaftar : <?php echo $total ?>
   </h5>
    
    </div>


  </div>
</div>


      </div>
    </div>

       <!-- // MAIN KONTEN SELESAI -->


  </div>

 
</div>
</div>


   
  
    <?php
    include "template/footer.php"; 
    ?>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>

     <script>
             
        $('.show_confirm').click(function(event) {
           var link = $(this).attr("href");
           var id_siswa = $(this).attr('data-id');
           event.preventDefault();

              swal({
      title: "APA ANDA YAKIN?",
      text: "Anda Akan Menghapus id siswa " + id_siswa + "",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = link
      } else {
        swal("SUCCESS DATA TIDAK TERHAPUS !");
      }
    });
  
       });

     </script>


  </body>
</html>
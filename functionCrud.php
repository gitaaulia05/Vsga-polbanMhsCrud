<?php 

include 'koneksi.php';

  // FUNCTION UNTUK CREATE DATA KE TABLE DAFTAR SISWA
 function create($data){
      //MENGAMBIL DATA ID_SISWA , NAMA , ALAMAT , JENKEL , AGAMA , SEKOLAH ASAL DARI METHOD POST 
    $id_siswa = $data['id_siswa'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $jenkel = $data['jenkel'];
    $agama = $data['agama'];
    $sekolah_asal = $data['sekolah_asal'];
      // VARIABEL KONEKSI DI DEFINE GLOBAL 
   $create = mysqli_query($GLOBALS['koneksi'] , "insert into daftar_siswa values('$id_siswa','$nama','$alamat','$jenkel','$agama','$sekolah_asal')");
   return true;
 }
 // SELESAI FUNCTION CREATE DATA TE TABLE DAFTAR SISWA


  // PROSEDUR UNTUK PRINT HARI TANGGAL DAN JAM USER LOGIN
  function date_hour() {
      // UNTUK MENGATUR TIME DEFAULT DI JAKARTA
    date_default_timezone_set('Asia/Jakarta');
      // MENGGUNAKAN FUNGSI DATE UNTUK MEMANNGIL TAHUN HARI BULAN BESERTA JAM .
    echo date("Y-d-M H:i:s");
  }
    // CARA PEMANGGILAN PROSEDUR 
    // echo date_hour();

 // FUNCTION UNTUK EDIT DATA KE TABLE DAFTAR SISWA
  function edit ($data){
    $id_siswa = $data['id_siswa'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $jenkel = $data['jenkel'];
    $agama = $data['agama'];
    $sekolah_asal = $data['sekolah_asal'];

     $update = mysqli_query($GLOBALS['koneksi'] ,"UPDATE daftar_siswa set id_siswa='$id_siswa' , nama='$nama', alamat='$alamat', jenkel='$jenkel', agama='$agama' , sekolah_asal='$sekolah_asal' WHERE id_siswa='$id_siswa' ");
     return true;
  }

   // SELESAI FUNCTION EDIT DATA TE TABLE DAFTAR SISWA

  function hapus($data) {
    $id_siswa = $data['id_siswa'];
    $delete = mysqli_query( $GLOBALS['koneksi']  ,"DELETE FROM daftar_siswa WHERE id_siswa='$id_siswa'");
    return true;
  }


 

?>
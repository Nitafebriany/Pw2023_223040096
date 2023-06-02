<?php
require('functions.php');

$title = 'Form Tambah Data';

//insert data ke tabel mahasiswa jika tombol di klik

 
if(isset($_POST['registrasi'])){
   if(registrasi($_POST) > 0) {
    echo
   "<script>
    alert('Data berhasil ditambahkan');
    document.location.href= 'index.php';
   </script>";
   }
}
require('views/registrasi.view.php');
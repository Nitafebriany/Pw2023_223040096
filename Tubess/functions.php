<?php
function connect()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes_pw23') or
    die('KONEKSI KE DATABASE GAGAL!');
  return $conn;
}
// tampil data
function query($query)
{
  $conn = connect();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function registrasi($data)
{
  $conn = connect();
  $username = $data['username'];
  $password = $data['password'];
  $nomor_hp = $data['nomor_hp'];
  $email    = $data['email'];


  if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
  }
  // menyimpan data tabel registrasi
  $sql = "INSERT INTO
                 login_account
                 VALUES
                     (null, '$username', '$password', '$nomor_hp', '$email', 'user')";

  if ($conn->query($sql) == TRUE) {
    echo "
                <script>alert('Data registrasi berhasil disimpan.');
                document.location.href= 'login.php';</script>";
  } else {
    echo "error: " . $sql . "<br>" . $conn->error;
  }
}


function tambah_destinasi($data)
{
  $conn = connect();

  $destinasi = $data["nama"];
  $id_kategori = $data["id_kategori"];
  $lokasi = $data["lokasi"];
  $desk = $data["deskripsi"];
  $gambar = $data["gambar"];

  if ($_FILES['gambar']) {
    $gambar = tambah_foto();
  }

  $query = "INSERT INTO `destinasi` 
                        (`nama_destinasi`, `id_kategori` , `location`, `desk`, `gambar`) 
                        VALUES
                        ('$destinasi', '$id_kategori', '$lokasi', '$desk', '$gambar')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = connect();
  $query = "DELETE FROM destinasi WHERE id_destinasi = '$id' ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function edit($data)
{
  $conn = connect();

  $id = $_GET['id'];
  $nama = htmlspecialchars($data['nama']);
  $lokasi = htmlspecialchars($data['lokasi']);
  $desk = htmlspecialchars($data['deskripsi']);
  $gambarlama = $data['gambar_lama'];
  $id_kategori = $data['id_kategori'];
  if (!$_FILES['gambar']['error'] == 4) {
    $gambar = tambah_foto();
  } else {
    $gambar = $gambarlama;
  }


  $query = "UPDATE  
              destinasi
            SET
            gambar = '$gambar',
            nama_destinasi ='$nama',
            location = '$lokasi',
            desk = '$desk',
            id_kategori = '$id_kategori'
          
            WHERE id_destinasi = '$id'
            ";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return 1;
}

function cari_data($data)
{
  $conn = connect();
  $query = "SELECT * FROM destinasi LEFT JOIN kategori ON destinasi.id_kategori = kategori.id WHERE nama_destinasi LIKE '%$data%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah_foto()
{
  $filename = $_FILES['gambar']['name'];
  $size = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpname = $_FILES['gambar']['tmp_name'];


  $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
  $EkstensionImage = explode('.', $filename);
  $EkstensionImage = strtolower(end($EkstensionImage));

  if (!in_array($EkstensionImage, $EkstensionValidImage)) {
    echo "<script>
              alert('Gambar yang anda upload tidak valid!');        
          </script>";
    return false;
  }

  if ($size > 3000000) {
    echo "<script>
              alert('Ukuran gambar tidak bisa diatas 3MB!');        
          </script>
          ";
    return false;
  }

  $newfilename = uniqid();
  $newfilename .= '.';
  $newfilename .= $EkstensionImage;

  move_uploaded_file($tmpname, 'img/' . $newfilename);

  return $newfilename;
}

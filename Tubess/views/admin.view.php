<?php

require('partials/header.php');
require('partials/navbar.admin.php');
// require('session.php');
require('functions.php');
$title = "Admin";

$lokasi = query('SELECT * FROM destinasi LEFT JOIN kategori ON destinasi.id_kategori = kategori.id');

if (isset($_POST["add"])) {
  if (tambah_destinasi($_POST) > 0) {
    echo "
      <script>
        alert('Succes');
        document.location.href='admin.php'
      </script>";
  } else {
    echo "
      <script>
        alert('fail');
      </script>";
  };
}

if (isset($_POST["hapus"])) {
  if (hapus($_POST["id"]) > 0) {
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
    alert('data gagal dihapus!');
    document.location.href = 'admin.php';
 </script>";
  }
}

if (isset($_POST["Search"])) {
  $lokasi = cari_data($_POST["keyword"]);
}

?>

  <div class="content">
    <!-- search -->
    <form class="d-flex" method="post" action="" style="width: 50%; margin: 20 135px; padding-left:100px; float: right;">
      <input id="keyword" name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autofocus>
      <button name="Search" class="btn btn-outline-success" type="submit" style="margin-top: 0.1px;">Search</button>
    </form>
    <!-- search end -->
    <div id="container">
    <?php if ($lokasi) : ?>
      <table class="table table-striped" style="border: 1px solid black;">
        <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Destinasi</th>
          <th scope="col">Kategori</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Deskripsi</th>
          <th></th>
          <th scope="col">Aksi</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
                <?php $i = 1;
        foreach ($lokasi as $lok) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td style="width: 20%;" cellpadding="0">
              <img src="img/<?= $lok['gambar']; ?>" style="width:100%;">
            </td>
            <td>
              <p><?= $lok['nama_destinasi']; ?></p>
            </td>
            <td>
              <p><?= $lok['kategori']; ?></p>
            </td>
            
            <td>
              <p><?= $lok['location']; ?></p>
            </td>
            <td>
              <p><?= $lok['desk']; ?></p>
            </td>
            <td>
              <a href="edit.php?id=<?= $lok['id_destinasi']; ?>"><i class="far fa-edit"></i></a>
            </td>
            <form action="" method="post">
              <input name="id" type="hidden" value="<?= $lok['id_destinasi']; ?>">
              <td>
                <button type="submit" name="hapus" onclick="return confirm ('delete')" id="add"><i class="fas fa-trash-alt"></i></button>
              </td>
            </form>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </div> 
    </table>
    <li>
    <button type="button" class="btn btn-primary">
    <a href="tambah.php" style="margin:40px; color: white;">Tambah</a>
    </button>
    </li>
    <?php else : ?>
  </div>
</div>
<?php endif; ?>


<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
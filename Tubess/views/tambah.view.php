<?php 
$title = "Tambah Data";
require('partials/header.php');
require('functions.php');

$kategori = query("SELECT * FROM kategori");

if(isset($_POST["add"])) {
  if(tambah_destinasi($_POST) > 0) {
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
?>
    <div class="container" style=" width: 100vh; height: 100%;">
      <h1 style="">TAMBAH DATA</h1>
      <div class="row">
            <div class="col-md-8 ">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id">
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar" required>
                    </div>
                    <div class="mb-3 ">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-control" name="id_kategori" required>
                          <option value="">Pilih kategori</option>
                          <?php foreach($kategori as $k): ?>
                            <option value="<?= $k['id'] ?>"><?= $k['kategori'] ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                    <label for="nama" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" id="nama" style="padding:10%" required>
                    </div>
                    <div class="mb-3">
                    <label for="nama" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="nama"  style="padding:20% ;" required>
                    </div>
                    <div class="mb-3 ">
                    <button class="btn btn-primary" type="submit" name="add">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

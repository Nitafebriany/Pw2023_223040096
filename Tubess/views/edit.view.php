<?php
$title = "Ubah Data";
require('partials/header.php');
require('functions.php');

$name = 'Ubah Destinasi';
$kategori = query("SELECT * FROM kategori");

$id = $_GET['id'];
$lokasi = query("SELECT * FROM destinasi WHERE id_destinasi ='$id' ")[0];

if (isset($_POST["id"])) {
    if (edit($_POST) > 0) {
        echo "<script>
    alert('ubah data berhasil!');
    document.location.href = 'admin.php';
    </script>";
    } else {
        echo "<script>
    alert('ubah data gagal');
    </script>";
    }
}
?>
<div class="admin" id="admin">
    <div class="container">
        <div class="row" style="width: 50rem;">
        <h2>UBAH DATA</h2>
            <div class="col-md-8" >
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $lokasi['id_destinasi']; ?>">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="gambar_lama" value="<?= $lokasi['gambar'] ?>">
                        <input type="hidden" name="id">
                        <div class="mb-3 mt-4 ">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="gambar" id="gambar" value="<?= $lokasi['gambar'] ?>">
                        </div>
                        <div class="mb-3 ">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $lokasi['nama_destinasi']; ?>">
                        </div>
                        <div class="mb-3 ">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select class="form-control" name="id_kategori" required>
                                <option value="">Pilih kategori</option>
                                <?php foreach ($kategori as $k) : ?>
                                    <option <?= $k['id'] == $lokasi['id_kategori'] ? 'selected' : '' ?> value="<?= $k['id'] ?>"><?= $k['kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3 ">
                            <label for="nama" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" id="nama" value="<?= $lokasi['location']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="nama" style="padding: 5%;"value="<?= $lokasi['desk']; ?>">
                        </div>
                        <div class="mt-2 mb">
                            <button class="btn btn-primary" type="submit" name="add">EDIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
<style>
    .container {
    width: 100vh;
    height: 100%;
    }
    .container h2 {
        position: ;
    }
    </style>


</html>
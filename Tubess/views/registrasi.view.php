<?php require('partials/header.php'); ?>
<?php require('partials/navbar.php'); ?>

<div class="container mt-3">
  <h1>Tambah Data Mahasiswa</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="Post">
        <div class="mb-3 w-25">
          <label for="username" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" maxlength="9" autofocus required>
        </div>
        <div class="mb-3">
          <label for="nomor_hp" class="form-label">No.Hp</label>
          <input type="text" class="form-control" name="nomor_hp" id="nomor_hp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="text" class="form-control" name="gambar" id="gambar">
        </div>
        <div class="mb-3">
          <label for="level" class="form-label">Level : </label>
          <select id ="level" name="level" required>
            <br>
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
          <!-- <input type="text" class="form-control" name="jurusan" id="jurusan"> -->
        </div>
        <!-- <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" name="gambar" id="gambar">
        </div> -->
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('partials/footer.php'); ?>
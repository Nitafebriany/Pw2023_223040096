<?php 
require '../functions.php';
 $keyword = $_GET['keyword'];
 $query = " SELECT * FROM
             destinasi LEFT JOIN kategori ON destinasi.id_kategori = kategori.id
                   where
             nama_destinasi LIKE '%$keyword%' OR
             location LIKE '%$keyword%' OR
             desk LIKE '%$keyword%'
         ";
 $lokasi = query($query);
 ?>
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
    <?php else : ?>
  </div>
</div>
<?php endif; ?>
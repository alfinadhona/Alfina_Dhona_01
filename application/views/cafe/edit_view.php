<div class="container">
<div class="row mt-3">
  <div class="col-md-6">
  <div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
   <form action="" method="post">
   <div class="form-group">
   <div class="card-body">
   <form action="" method="post">
   <div class="form-group">
   <label for="nama_pelanggan">Name</label>
   <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="<?= $this->form_validation->set_value('nama_pelanggan')?>">
   <small class="form-text text-danger"><?= form_error('nama_pelanggan') ?></small>
   </div>
   <div class="form-group">
   <label for="id_meja">Table</label>
   <input type="text" class="form-control" name="id_meja" id="id_meja" value="<?= $this->form_validation->set_value('id_meja')?>">
   <small class="form-text text-danger"><?= form_error('id_meja') ?></small>
   </div>
   <div class="form-group">
   <label for="person">Person</label>
   <input type="text" class="form-control" name="person" id="person" value="<?= $this->form_validation->set_value('person')?>">
   <small class="form-text text-danger"><?= form_error('person') ?></small>
   </div>
   <div class="form-group">
   <label for="datetime">Date Time</label>
   <input type="datetime-local" class="form-control" name="datetime" id="datetime" value="<?= $this->form_validation->set_value('2017-11-16T20:00')?>">
   <small class="form-text text-danger"><?= form_error('datetime') ?></small>
   </div>
   <!-- <div class="form-group">
   <label for="id_genre">Genre</label>
   <select name="id_genre" id="id_genre" class="form-control">
   <!-- <?php
    foreach ($genre as $g ) { ?>
    <option <?php if($buku['id_genre'] == $g['id_genre']) {echo "selected";}?> value="<?= $g['id_genre'] ?>"><?= $g['genre'] ?></option>
    <?php
    }
   ?> -->
</select>
</div>
   <button type="submit" class="btn btn-primary float-right">Simpan</button>
   </form>
  </div>
</div>
  </div>
</div>
</div>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <h1>Edit Buku</h1>
  
  <form class="" action="<?php echo base_url('Buku/edit_proses') ?>" method="post">
  
    <table>
        <tr>
          <td><label>Judul</label></td>
          <td>:</td>
          <td><input type="text" name="judul" value="<?php echo $buku['judul']; ?>"></td>
        </tr>
        <tr>
          <td><label>Penulis</label></td>
          <td>:</td>
          <td><input type="text" name="penulis" value="<?php echo $buku['penulis']; ?>"></td>
        </tr>
        <tr>
          <td><label>Tahun Terbit</label></td>
          <td>:</td>
          <td><input type="number" name="tahun_terbit" value="<?php echo $buku['tahun_terbit']; ?>"></td>
        </tr>
        <tr>
          <td><label>Harga</label></td>
          <td>:</td>
          <td><input type="number" name="harga" value="<?php echo $buku['harga']; ?>"></td>
        </tr>
        <td> <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku']; ?>"> </td>
        <tr>
          <td> <input type="submit" name="" value="Simpan"></td>
        </tr>
      </form>
    </table>
  </body>
</html> -->
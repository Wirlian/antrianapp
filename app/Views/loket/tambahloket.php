<?= $this->include('template/header'); ?>
<div class="container">

  <header class=" card-header bg-primary text-white">
    <h1 class="text-center">Kelola Loket</h1>
  </header>

  <div class="container">
    <h2 class="text-center"><?= $title; ?></h2>
    <a href="<?= base_url("/loket")?>"><p class="text-right">Kembali</p></a>
    <hr>
    <form action="" method="post">
        <label for="nama">Nama :</label>
        <p><input type="text" name="nama"></p>
        
        <label for="keterangana">Keterangan :</label>
        <p><textarea name="keterangan" cols="50" rows="3"></textarea></p>
        
        <label for="pelayanan">Pelayanan :</label>
        <select id="selbuku" class="form-control" name="pelayanan_id">
          <option  value="">Pilih</option>
          <?php foreach ($pelayanandata as $row): ?>
          <option  value=<?=$row['id'];?>><?= $row['nama']; ?></option>
          <?php endforeach; ?>
        </select>
        <br>
        <p><input type="submit" value="Simpan"></p>
        </form>
    </div>
</div>  
<?= $this->include('template/footer'); ?>
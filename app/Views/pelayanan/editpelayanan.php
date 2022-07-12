<?= $this->include('template/header'); ?>
<div class="container">

  <header class=" card-header bg-primary text-white">
    <h1 class="text-center">Kelola Pelayanan</h1>
  </header>

  <div class="container">
    <h2 class="text-center"><?= $title; ?></h2>
    <a href="<?= base_url("/pelayanan")?>"><p class="text-right">Kembali</p></a>
    <hr>
    <form action="" method="post">
        <label for="nama">Nama :</label>
        <p><input type="text" name="nama" value="<?= $data['nama'];?>" ></p>
        
        <label for="nama">Keterangan :</label>
        <p><textarea name="keterangan" cols="50" rows="3" ><?= $data['keterangan'];?></textarea></p>
        
        <label for="kode">Kode :</label>
        <p><input type="text" name="kode" value="<?= $data['kode'];?>"></p>
        
        <p><input type="submit" value="Simpan"></p>
        </form>
    </div>
</div>  
<?= $this->include('template/footer'); ?>
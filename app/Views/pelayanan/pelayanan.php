<?= $this->include('template/header'); ?>
<div class="container">

  <header class=" card-header bg-primary text-white">
    <h1 class="text-center">Kelola Pelayanan</h1>
  </header>

  <div class="container">
    <h1 class="text-center">Daftar Pelayanan</h1>
    <hr>
    <a href="<?= base_url("/")?>"><p class="text-left">Kembali</p></a>
    <a href="<?= base_url('/pelayanan/add/')?>"><p class="text-right">Tambah</p></a>
    <table class="table table-bordered">
      <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Pelayanan</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Kode</th>
        <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if($pelayanan): foreach($pelayanan as $row):?>
        <tr>
          <td><?= $row['id'];?></td>
          <td><?= $row['nama'];?></td>
          <td><?= $row['keterangan'];?></td>
          <td><?= $row['kode'];?></td>
          <td>
            <a href="<?= base_url('/pelayanan/edit/'.$row['id']);?>">Edit</a>
            <a onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/pelayanan/delete/'.$row['id']);?>">Hapus</a>
          </td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
          <td colspan="4">Belum ada data.</td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>  
<?= $this->include('template/footer'); ?>  

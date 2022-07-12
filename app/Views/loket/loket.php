<?= $this->include('template/header'); ?>
<div class="container">

  <header class=" card-header bg-primary text-white">
    <h1 class="text-center">Kelola Loket</h1>
  </header>

  <div class="container">
    <h1 class="text-center">Daftar Loket</h1>
    <hr>
    <a href="<?= base_url("/")?>"><p class="text-left">Kembali</p></a>
    <a href="<?= base_url('/loket/add/')?>"><p class="text-right">Tambah</p></a>
    <table class="table table-bordered">
      <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama Loket</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Pelayanan</th>
        <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($data_loket as $row): ?>
        <tr>
          <td><?= $row->id;?></td>
          <td><?= $row->namaloket;?></td>
          <td><?= $row->ketloket;?></td>
          <td><?= $row->nama;?></td>
          <td>
            <a href="<?= base_url('/loket/edit/'.$row->id);?>">Edit</a>
            <a onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/loket/delete/'.$row->id);?>">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>  
<?= $this->include('template/footer'); ?>  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Jenis Hewan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="row">
    <div class="col-sm-12">
      <?php
        Flasher::Message();
      ?>
    </div>
  </div>
      <!-- Default box -->

      <div class="card ">
        <div class="card-header">
          <h3 class="card-title"><?= $data['title'] ?></h3> <a href="<?= base_url; ?>/jenis/tambah" class="btn float-right btn-xs btn btn-success ">Tambah Jenis Hewan</a>
        </div>
        <div class="card-body">

      <form action="<?= base_url; ?>/jenis/cari" method="post">
 <div class="row mb-3">
    <div class="col-lg-6">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="" name="key" >
    <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit">Cari Data</button>
          <a class="btn btn-outline-danger" href="<?= base_url; ?>/jenis" >Reset</a>
    </div>
  </div>

  </div>
</div>
    </form>
          <table class="table table-bordered">
                  <thead class="table-info">
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Jenis Hewan</th>
                      <th style="width: 150px">Action</th>
                    </tr>
                  </thead>
                  <tbody >
                  <?php $no=1; ?>
                    <?php foreach ($data['jenis'] as $row) :?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $row['jenis_hewan'];?></td>
                      <td>
                        <a href="<?= base_url; ?>/jenis/edit/<?= $row['id'] ?>" class="badge badge-warning ">Ubah</a> <a href="<?= base_url; ?>/jenis/hapus/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; endforeach; ?>
                  </tbody>
                </table>
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

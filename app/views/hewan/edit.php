  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Data Hewan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?= base_url; ?>/hewan/updateHewan" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $data['hewan']['id']; ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nama Hewan</label>
                    <input type="text" class="form-control" placeholder="masukkan judul buku..." name="nama_hewan" value="<?= $data['hewan']['nama_hewan'];?>">
                  </div>
                  <div class="form-group">
                    <label >Nama Latin</label>
                    <input type="text" class="form-control" placeholder="masukkan penerbit buku..." name="nama_latin" value="<?= $data['hewan']['nama_latin'];?>">
                  </div>
                  <div class="form-group">
                    <label >Habitat</label>
                    <input type="text" class="form-control" placeholder="masukkan pengarang buku..." name="habitat" value="<?= $data['hewan']['habitat'];?>">
                  </div>
                  <div class="form-group">
                    <label >Status</label>
                    <input type="text" class="form-control" placeholder="masukkan tahun buku..." name="status" value="<?= $data['hewan']['status'];?>">
                  </div>
                  <div class="form-group">
                    <label >Jenis Hewan</label>
                    <select class="form-control" name="jenis_id">
                        <option value="">Pilih</option>
                         <?php foreach ($data['jenis'] as $row) :?>
                        <option value="<?= $row['id']; ?>" <?php if($data['hewan']['jenis_id'] == $row['id']) { echo "selected"; } ?>><?= $row['jenis_hewan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label >Jumlah di Alam</label>
                    <input type="text" class="form-control" placeholder="masukkan harga buku..." name="jumlah" value="<?= $data['hewan']['jumlah'];?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
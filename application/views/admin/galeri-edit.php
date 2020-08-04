  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Galeri</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-md-12">
            <?php if ($this->session->flashdata('flash')) : ?>
              <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong><?= $this->session->flashdata('flash'); ?></strong>
              </div>

              <script>
                $(".alert").alert();
              </script>
            <?php endif; ?>
            <div class="card">
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="foto">Foto (maks. 2MB)</label>
                    <input type="file" class="form-control-file" name="foto" id="foto" placeholder="Foto" onchange="ValidateSize(this)">
                    <small class=" form-text text-danger"><?= form_error('foto'); ?></small>
                  </div>

                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"><?= $galeri['keterangan']; ?></textarea>
                    <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                  </div>

                  <button type="submit" class="btn btn-success">Simpan</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </form>


              </div>
            </div>

          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
    function ValidateSize(file) {
      var FileSize = file.files[0].size / 1024 / 1024; // in MB
      if (FileSize > 2) {
        alert('Ukuran file tidak boleh lebih dari 2MB');
        $(file).val(''); //for clearing with Jquery
      } else {

      }
    }
  </script>

  <!-- /.content-wrapper -->
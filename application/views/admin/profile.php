  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profil</h1>
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
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong><?= $this->session->flashdata('flash'); ?></strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
          <?php endif; ?>

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form action="" method="post">

                  <div class="form-group">
                    <label for="sejarah">Sejarah</label>
                    <textarea class="form-control" name="sejarah" id="sejarah" placeholder="Sejarah"><?= $profile['sejarah']; ?></textarea>
                    <small class="form-text text-danger"><?= form_error('sejarah'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea class="form-control" name="visi" id="visi" placeholder="Visi"><?= $profile['visi']; ?></textarea>
                    <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea class="form-control" name="misi" id="misi" placeholder="Misi"><?= $profile['misi']; ?></textarea>
                    <small class="form-text text-danger"><?= form_error('misi'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="No. HP" value="<?= $profile['no_hp']; ?>">
                    <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?= $profile['email']; ?>">
                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="misi">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"><?= $profile['alamat']; ?></textarea>
                    <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
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
 
  <!-- /.content-wrapper -->
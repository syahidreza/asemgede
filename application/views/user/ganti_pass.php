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

          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <form action="" method="post">

                  <div class="form-group">
                    <label for="pw_lama">Password Lama</label>
                    <input type="password" class="form-control" name="pw_lama" id="pw_lama" placeholder="Password Lama">
                    <small class="form-text text-danger"><?= form_error('pw_lama'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="pw_baru">Password Baru</label>
                    <input type="password" class="form-control" name="pw_baru" id="pw_baru" placeholder="Password Baru">
                    <small class="form-text text-danger"><?= form_error('pw_baru'); ?></small>
                  </div>
                  <div class="form-group">
                    <label for="konf_pw_baru">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" name="konf_pw_baru" id="konf_pw_baru" placeholder="Konfirmasi Password Baru">
                    <small class="form-text text-danger"><?= form_error('konf_pw_baru'); ?></small>
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
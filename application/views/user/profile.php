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
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="nama_lengkap" value="<?= $peserta['nama_lengkap']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama_lengkap'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input type="text" class="form-control" name="nama_panggilan" id="nama_panggilan" placeholder="nama_panggilan" value="<?= $peserta['nama_panggilan']; ?>">
                    <small class="form-text text-danger"><?= form_error('nama_panggilan'); ?></small>
                  </div>

                  <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jk" id="jk" value="L" <?= ($peserta['jk']=='L' ? 'checked' : ''); ?> >
                        Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jk" id="jk" value="P"  <?= ($peserta['jk']=='P' ? 'checked' : ''); ?>>
                        Perempuan
                      </label>
                    </div>
                    <small class="form-text text-danger"><?= form_error('jk'); ?></small>
                  </div>

                  <div class="form-group">
                    <label for="tmpt_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmpt_lahir" id="tmpt_lahir" placeholder="tmpt_lahir" value="<?= $peserta['tmpt_lahir']; ?>">
                    <small class="form-text text-danger"><?= form_error('tmpt_lahir'); ?></small>
                  </div>

                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="tgl_lahir" value="<?= $peserta['tgl_lahir']; ?>">
                    <small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
                  </div>

                  <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input type="number" class="form-control" name="no_hp" id="no_hp" placeholder="no_hp" value="<?= $peserta['no_hp']; ?>">
                    <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="sekolah">Sekolah</label>
                    <input type="text" class="form-control" name="sekolah" id="sekolah" placeholder="sekolah" value="<?= $peserta['sekolah']; ?>">
                    <small class="form-text text-danger"><?= form_error('sekolah'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="kelas">Kelas / Tingkat</label>
                    <input type="number" class="form-control" name="kelas" id="kelas" placeholder="kelas" value="<?= $peserta['kelas']; ?>">
                    <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="divisi">Divisi</label>
                    <select class="form-control" name="divisi" id="divisi">
                      <option value="Seni Tari" <?= ($peserta['divisi']=="Seni Tari" ? 'selected' : '') ; ?>>Seni Tari</option>
                      <option value="Seni Musik" <?= ($peserta['divisi']=="Seni Musik" ? 'selected' : '') ; ?>>Seni Musik</option>
                      <option value="Seni Rupa" <?= ($peserta['divisi']=="Seni Rupa" ? 'selected' : '') ; ?>>Seni Rupa</option>
                      <option value="Seni Terapan" <?= ($peserta['divisi']=="Seni Terapan" ? 'selected' : '') ; ?>>Seni Terapan</option>
                    </select>
                    <small class="form-text text-danger"><?= form_error('divisi'); ?></small>
                  </div>
    
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" placeholder="alamat"><?= $peserta['alamat']; ?></textarea>
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
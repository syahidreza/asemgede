  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Detail Peserta</h1>
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
            <div class="card">
              <div class="card-body">

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nama_lengkap">Nama Lengkap</label>
                      <p id="nama_lengkap"><?= $peserta['nama_lengkap'];?></p>
                    </div>

                    <div class="form-group">
                      <label for="nama_panggilan">Nama Panggilan</label>
                      <p id="nama_panggilan"><?= $peserta['nama_panggilan'];?></p>
                    </div>

                    <div class="form-group">
                      <label for="username">Username</label>
                      <p id="username"><?= $peserta['username'];?></p>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <p id="password"><?= $peserta['password'];?></p>
                    </div>
    
                    <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <p id="jk"><?= $peserta['jk'];?></p>
                    </div>

                    <div class="form-group">
                      <label for="tmpt_lahir">Tempat Lahir</label>
                      <p id="tmpt_lahir"><?= $peserta['tmpt_lahir'];?></p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="ttl">Tanggal Lahir</label>
                      <p id="ttl"><?= $peserta['tgl_lahir'];?></p>
                    </div>

                    <div class="form-group">
                      <label for="no_hp">Nomor HP</label>
                      <p id="no_hp"><?= $peserta['no_hp'];?></p>
                    </div>
                    <div class="form-group">
                      <label for="sekolah">Sekolah</label>
                      <p id="sekolah"><?= $peserta['sekolah'];?></p>
                    </div>
                    <div class="form-group">
                      <label for="kelas">Kelas / Tingkat</label>
                      <p id="kelas"><?= $peserta['kelas'];?></p>
                    </div>
    
                    <div class="form-group">
                      <label for="divisi">Divisi</label>
                      <p id="divisi"><?= $peserta['divisi'];?></p>
                    </div>

                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <p id="alamat"><?= $peserta['alamat'];?></p>
                    </div>

                    
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12">
                    <button onclick="window.history.back()" class="btn btn-danger">Kembali</button>
                  </div>
                </div>
                
                
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

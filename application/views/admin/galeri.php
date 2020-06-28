  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Galeri</h1>
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

              <div class="card-header">
                <a class="btn btn-primary" href="<?= base_url().'admin/galeriTambah';?>" role="button">Tambah</a>
              </div>
              
              <div class="card-body">
                <table id="tblGaleri" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No. </th>
                      <th>Nama Foto</th>
                      <th>Keterangan</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($galeri as $gl): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><a href="<?= base_url().'././upload/galeri/'.$gl['foto'];?>"><?= $gl['foto']; ?></a></td>
                      <td><?= $gl['keterangan']; ?></td>
                      <td>
                        <div class="btn-group">
                          <a href="<?= base_url().'admin/galeriEdit/'.$gl['id'];?>" class="btn btn-sm btn-success">
                            <i class="fa fa-pen" aria-hidden="true"></i>
                          </a>
                          <a href="<?= base_url().'admin/galeriHapus/'.$gl['id'];?>" class="btn btn-sm btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
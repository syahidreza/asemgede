  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pendaftaran</h1>
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
                <table id="tblPendaftar" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No. </th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Divisi</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($pendaftaran as $pd) :
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td>
                          <a href="detailPendaftaran/<?= $pd['id']; ?>"><?= $pd['nama_lengkap']; ?></a>
                        </td>
                        <td><?= $pd['jk']; ?></td>
                        <td><?= $pd['divisi']; ?></td>
                        <td>
                          <div class="btn-group">
                            <a onclick="return confirm('Apakah anda yakin ingin memverifikasi?');" href="<?= base_url() . 'admin/verifikasi/' . $pd['id']; ?>" class="btn btn-sm btn-warning" title="Verifikasi">
                              <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                            <a onclick="return confirm('Apakah anda yakin ingin menghapus?');" href="<?= base_url() . 'admin/delPendaftar/' . $pd['id']; ?>" class="btn btn-sm btn-danger" title="Hapus">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                    <?php
                      $no++;
                    endforeach;
                    ?>
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
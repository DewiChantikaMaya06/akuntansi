<div class="page-wrapper">
  <!-- ============================================================== -->
  <!-- Bread crumb and right sidebar toggle -->
  <!-- ============================================================== -->
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">DASHBOARD</h4>
        <div class="d-flex align-items-center">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb m-0 p-0">
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>" class="text-muted">Dashboard</a></li>
              <li class="breadcrumb-item text-muted active" aria-current="page"><?= $titleTag ?></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Akun</h4>
            <div class="col-12 my-3">
              <a href="<?= base_url('data_akun/tambah') ?>" class="btn waves-effect waves-light btn-rounded btn-primary" style="float: right;">Tambah Akun</a>
              <br>
              <br>
            </div>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No.Reff</th>
                    <th scope="col">Nama Reff</th>
                    <th scope="col">Keterangan Reff</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($dataAkun as $row) :
                  ?>
                    <tr>
                      <th scope="row">
                        <?= $i++ ?>
                      </th>
                      <td>
                        <?= $row->no_reff ?>
                      </td>
                      <td>
                        <?= $row->nama_reff ?>
                      </td>
                      <td>
                        <?= $row->keterangan ?>
                      </td>
                      <td class="d-flex justify-content-center">
                        <a href="<?= base_url('data_akun/edit/' . $row->no_reff) ?>" class="btn waves-effect waves-light btn-rounded btn-primary">Edit</a>
                        <?= form_open('data_akun/hapus', ['class' => 'form'], ['id' => $row->no_reff]) ?>
                        <?= form_button(['type' => 'submit', 'content' => 'Hapus', 'class' => 'btn waves-effect waves-light btn-rounded btn-danger hapus']) ?>
                        <?= form_close() ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
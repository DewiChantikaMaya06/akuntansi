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
    <!-- Page content -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Edit Data Akun</h4>
            <div class="col-12 my-3">
              <form action="<?= base_url($action) ?>" method="post">
                <div class="form-group">
                  <label for="no_ref">No. Reff</label>
                  <p><?= form_error('no_reff') ?></p>
                  <input type="text" name="no_reff" class="form-control mb-3" id="no_reff" value="<?= $data->no_reff ?>">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Reff</label>
                  <p><?= form_error('nama_reff') ?></p>
                  <input type="text" name="nama_reff" class="form-control mb-3" id="nama" value="<?= $data->nama_reff ?>">
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <p><?= form_error('keterangan') ?></p>
                  <textarea name="keterangan" id="keterangan" cols="30" rows="10" class="form-control mb-3"><?= $data->keterangan ?></textarea>
                </div>
                <div class="col-12 mt-4">
                  <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success" id="button_akun"><?= $title ?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
              <li class="breadcrumb-item text-muted active" aria-current="page"><a href="<?= base_url('jurnal_umum') ?>" class="text-muted">Jurnal Umum</a></li>
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
                <?php
                if (!empty($id)) :
                ?>
                  <input type="hidden" name="id" value="<?= $id ?>">
                <?php endif; ?>
                <div class="row mb-4">
                  <div class="col-4">
                    <label for="datepicker">Tanggal</label>
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                      </div>
                      <input class="form-control" id="datepicker" name="tgl_transaksi" type="text" value="<?= $data->tgl_transaksi ?>">
                    </div>
                    <?= form_error('tgl_transaksi') ?>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col">
                    <label for="no_reff">Nama Akun</label>
                    <?= form_dropdown('no_reff', getDropdownList('akun', ['no_reff', 'nama_reff']), $data->no_reff, ['class' => 'form-control', 'id' => 'no_reff']); ?>
                    <?= form_error('no_reff') ?>
                  </div>
                  <div class="col">
                    <label for="reff">No. Reff</label>
                    <input type="text" name="reff" class="form-control" id="reff" readonly>
                  </div>
                  <div class="col">
                    <label for="jenis_saldo">Jenis Saldo</label>
                    <?= form_dropdown('jenis_saldo', ['debit' => 'Debit', 'kredit' => 'Kredit'], $data->jenis_saldo, ['class' => 'form-control jenis_saldo', 'id' => 'jenis_saldo']); ?>
                    <?= form_error('jenis_saldo') ?>
                  </div>
                  <div class="col">
                    <label for="saldo">Saldo</label>
                    <input type="text" name="saldo" class="form-control saldo" id="saldo" value="<?= $data->saldo ?>">
                    <?= form_error('saldo') ?>
                  </div>
                </div>
                <div class="col-12" id="form_jurnal_prepend">
                  <button class="btn btn-primary" type="submit" id="button_jurnal"><?= $title ?></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
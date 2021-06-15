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
            <h4 class="card-title">Jurnal Umum</h4>
            <div class="row">
              <div class="col my-3">
                <a href="<?= base_url('jurnal_umum/tambah') ?>" class="btn waves-effect waves-light btn-rounded btn-primary">Tambah Jurnal</a>
              </div>
              <div class="col my-3">
                <form action="<?= base_url('jurnal_umum/detail') ?>" method="post" class="d-flex flex-row justify-content-end">
                  <div class="form-group">
                    <select name="bulan" id="bulan" class="form-control">
                      <?php
                      for ($i = 1; $i <= 12; $i++) {
                        echo "<option value=$i>" . bulan($i) . "</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group mx-3">
                    <select name="tahun" id="tahun" class="form-control">
                      <?php
                      foreach ($tahun as $row) {
                        $tahuns = date('Y', strtotime($row->tgl_transaksi));
                        echo "<option value=$tahuns>" . $tahuns . "</option>";
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <button class="btn waves-effect waves-light btn-rounded btn-success" type="submit">Cari</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bulan Dan Tahun</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 0;
                  foreach ($listJurnal as $row) :
                    $i++;
                    $bulan = date('m', strtotime($row->tgl_transaksi));
                    $tahun = date('Y', strtotime($row->tgl_transaksi));
                  ?>
                    <tr>
                      <td scope="col"><?= $i ?></td>
                      <td scope="col"><?= bulan($bulan) . ' ' . $tahun ?></td>
                      <td scope="col">
                        <?= form_open('jurnal_umum/detail', '', ['bulan' => $bulan, 'tahun' => $tahun]) ?>
                        <?= form_button(['type' => 'submit', 'content' => 'Lihat Jurnal', 'class' => 'btn waves-effect waves-light btn-rounded btn-success']) ?>
                        <?= form_close() ?>
                      </td>
                    </tr>
                  <?php
                  endforeach;
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
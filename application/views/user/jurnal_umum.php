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
            <h4 class="card-title">Detail Jurnal Umum</h4>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Ref</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($jurnals as $row) :
                    if ($row->jenis_saldo == 'debit') :
                  ?>
                      <tr>
                        <td>
                          <?= date_indo($row->tgl_transaksi) ?>
                        </td>
                        <td>
                          <?= $row->nama_reff ?>
                        </td>
                        <td>
                          <?= $row->no_reff ?>
                        </td>
                        <td>
                          <?= 'Rp. ' . number_format($row->saldo, 0, ',', '.') ?>
                        </td>
                        <td>
                          Rp. 0
                        </td>
                        <td class="d-flex justify-content-center">
                          <?= form_open('jurnal_umum/edit_form', '', ['id' => $row->id_transaksi]) ?>
                          <?= form_button(['type' => 'submit', 'content' => 'Edit', 'class' => 'btn btn-warning mr-3']) ?>
                          <?= form_close() ?>

                          <?= form_open('jurnal_umum/hapus', ['class' => 'form'], ['id' => $row->id_transaksi]) ?>
                          <?= form_button(['type' => 'submit', 'content' => 'Hapus', 'class' => 'btn btn-danger hapus']) ?>
                          <?= form_close() ?>
                        </td>
                      </tr>
                    <?php
                    endif;
                    if ($row->jenis_saldo == 'kredit') :
                    ?>
                      <tr>
                        <td><?= date_indo($row->tgl_transaksi) ?></td>
                        <td class="text-right"><?= $row->nama_reff ?></td>
                        <td><?= $row->no_reff ?></td>
                        <td>
                          Rp. 0
                        </td>
                        <td>
                          <?= 'Rp. ' . number_format($row->saldo, 0, ',', '.') ?>
                        </td>
                        <td class="d-flex justify-content-center">
                          <?= form_open('jurnal_umum/edit_form', '', ['id' => $row->id_transaksi]) ?>
                          <?= form_button(['type' => 'submit', 'content' => 'Edit', 'class' => 'btn btn-warning mr-3']) ?>
                          <?= form_close() ?>

                          <?= form_open('jurnal_umum/hapus', ['class' => 'form'], ['id' => $row->id_transaksi]) ?>
                          <?= form_button(['type' => 'submit', 'content' => 'Hapus', 'class' => 'btn btn-danger hapus']) ?>
                          <?= form_close() ?>
                        </td>
                      </tr>
                    <?php endif; ?>
                  <?php endforeach ?>
                  <?php if ($totalDebit->saldo != $totalKredit->saldo) { ?>
                    <tr>
                      <td colspan="3" class="text-center"><b>Jumlah Total</b></td>
                      <td class="text-danger"><b><?= 'Rp. ' . number_format($totalDebit->saldo, 0, ',', '.') ?></b></td>
                      <td colspan="2" class="text-danger"><b><?= 'Rp. ' . number_format($totalKredit->saldo, 0, ',', '.') ?></b></td>
                    </tr>
                    <tr class="text-center bg-danger ">
                      <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">TIDAK SEIMBANG</td>
                    </tr>
                  <?php } else {  ?>
                    <tr>
                      <td colspan="3" class="text-center"><b>Jumlah Total</b></td>
                      <td class="text-success"><b><?= 'Rp. ' . number_format($totalDebit->saldo, 0, ',', '.') ?></b></td>
                      <td colspan="2" class="text-success"><b><?= 'Rp. ' . number_format($totalKredit->saldo, 0, ',', '.') ?></b></td>
                    </tr>
                    <tr class="text-center bg-success">
                      <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">SEIMBANG</td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
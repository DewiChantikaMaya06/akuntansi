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
              <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>" class="text-muted"><?= $titleTag ?></a></li>
              <!-- <li class="breadcrumb-item text-muted active" aria-current="page"><?= $titleTag ?></li> -->
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- basic table -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Data Akun</h4>
            <div class="table-responsive">
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">No.Reff</th>
                    <th scope="col">Nama Reff</th>
                    <th scope="col">Keterangan Reff</th>
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
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- order table -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Jurnal Umum</h4>
            <div class="table-responsive">
              <table id="default_order" class="table table-striped table-bordered display no-wrap" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Ref</th>
                    <th scope="col">Debet</th>
                    <th scope="col">Kredit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
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
                      </tr>
                    <?php
                    endif;
                    if ($row->jenis_saldo == 'kredit') :
                    ?>
                      <tr>
                        <td>
                          <?= date_indo($row->tgl_transaksi) ?>
                        </td>
                        <td class="text-right"><?= $row->nama_reff ?></td>
                        <td><?= $row->no_reff ?></td>
                        <td>
                          Rp. 0
                        </td>
                        <td>
                          <?= 'Rp. ' . number_format($row->saldo, 0, ',', '.') ?>
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
    <!-- multi-column ordering -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Buku Besar</h4>
            <div class="nav-wrapper mx-3">
              <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                <?php
                $i = 0;
                foreach ($dataAkunTransaksi as $row) :
                  $i++;
                ?>
                  <li class="nav-item mb-4">
                    <a class="nav-link mb-sm-3 mb-md-0 tab-nav" id="tabs-icons-text-<?= $i ?>-tab" data-toggle="tab" href="#tabs-icons-text-<?= $i ?>" role="tab" aria-controls="tabs-icons-text-<?= $i ?>" aria-selected="true"><?= $row->nama_reff ?></a>
                  </li>
                <?php endforeach ?>
              </ul>
            </div>
            <div class="table-responsive">
              <div class="card" style="border-top: 2px solid white">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <?php
                    $a = 0;
                    $debit = 0;
                    $kredit = 0;

                    for ($i = 0; $i < $jumlah; $i++) :
                      $a++;
                      $s = 0;
                      $deb = $saldo[$i];
                    ?>
                      <div class="tab-pane fade" id="tabs-icons-text-<?= $a ?>" role="tabpanel" aria-labelledby="tabs-icons-text-<?= $a ?>-tab">
                        <div class="row">
                          <div class="col">
                            <b><?= $data[$i][$s]->nama_reff ?></b>
                          </div>
                          <div class="col text-right">
                            <b>No. <?= $data[$i][$s]->no_reff ?></b>
                          </div>
                        </div>
                        <p class="description">
                        <table class="table align-items-center table-flush">
                          <thead class="thead-light">
                            <tr>
                              <th rowspan="2">Tanggal</th>
                              <th rowspan="2">Keterangan </th>
                              <th rowspan="2">Debit</th>
                              <th rowspan="2">Kredit</th>
                              <th colspan="2" class="text-center">Saldo</th>
                            </tr>
                            <tr>
                              <th>Debit</th>
                              <th>Kredit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            for ($j = 0; $j < count($data[$i]); $j++) :
                              $timeStampt = strtotime($data[$i][$j]->tgl_transaksi);
                              $bulan = date('m', $timeStampt);

                              $tahun = date('Y', $timeStampt);
                              $tgl = date('d', $timeStampt);
                              $bulan = medium_bulan($bulan);
                            ?>
                              <tr>
                                <td><?= $tgl . ' ' . $bulan . ' ' . $tahun ?></td>
                                <td><?= $data[$i][$j]->nama_reff ?></td>
                                <?php
                                if ($data[$i][$j]->jenis_saldo == 'debit') {
                                ?>
                                  <td>
                                    <?= 'Rp. ' . number_format($data[$i][$j]->saldo, 0, ',', '.') ?>
                                  </td>
                                  <td>Rp. 0</td>
                                <?php
                                } else {
                                ?>
                                  <td>Rp. 0</td>
                                  <td>
                                    <?= 'Rp. ' . number_format($data[$i][$j]->saldo, 0, ',', '.') ?>
                                  </td>
                                <?php } ?>
                                <?php
                                if ($deb[$j]->jenis_saldo == "debit") {
                                  $debit = $debit + $deb[$j]->saldo;
                                } else {
                                  $kredit = $kredit + $deb[$j]->saldo;
                                }

                                $hasil = $debit - $kredit;
                                ?>
                                <?php if ($hasil >= 0) { ?>
                                  <td><?= 'Rp. ' . number_format($hasil, 0, ',', '.') ?></td>
                                  <td> - </td>
                                <?php } else { ?>
                                  <td> - </td>
                                  <td><?= 'Rp. ' . number_format(abs($hasil), 0, ',', '.') ?></td>
                                <?php } ?>
                              </tr>
                            <?php endfor ?>
                            <?php
                            $debit = 0;
                            $kredit = 0;
                            ?>
                            <td class="text-center" colspan="4"><b>Total</b></td>
                            <?php if ($hasil >= 0) { ?>
                              <td class="text-success"><?= 'Rp. ' . number_format($hasil, 0, ',', '.') ?></td>
                              <td> - </td>
                            <?php } else { ?>
                              <td> - </td>
                              <td class="text-danger"><?= 'Rp. ' . number_format(abs($hasil), 0, ',', '.') ?></td>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    <?php endfor ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
  </div>
</div>
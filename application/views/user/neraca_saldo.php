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
              <li class="breadcrumb-item text-muted active" aria-current="page"><a href="<?= base_url('dashboard') ?>" class="text-muted">Dashboard</a></li>
              <li class="breadcrumb-item text-muted active" aria-current="page"><a href="<?= base_url('neraca_saldo') ?>" class="text-muted">Neraca saldo</a></li>
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
            <h4 class="card-title">Neraca Saldo Detail</h4>
            <div class="table-responsive">
              <?php
              $a = 0;
              $debit = 0;
              $kredit = 0;
              ?>
              <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No. Akun</th>
                    <th scope="col">Nama Akun</th>
                    <th scope="col">Debit</th>
                    <th scope="col">Kredit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $totalDebit = 0;
                  $totalKredit = 0;
                  for ($i = 0; $i < $jumlah; $i++) :
                    $a++;
                    $s = 0;
                    $deb = $saldo[$i];
                  ?>
                    <tr>
                      <td>
                        <?= $data[$i][$s]->no_reff ?>
                      </td>
                      <td>
                        <?= $data[$i][$s]->nama_reff ?>
                      </td>
                      <?php
                      for ($j = 0; $j < count($data[$i]); $j++) :
                        if ($deb[$j]->jenis_saldo == "debit") {
                          $debit = $debit + $deb[$j]->saldo;
                        } else {
                          $kredit = $kredit + $deb[$j]->saldo;
                        }
                        $hasil = $debit - $kredit;
                      endfor
                      ?>
                      <?php
                      if ($hasil >= 0) { ?>
                        <td><?= 'Rp. ' . number_format($hasil, 0, ',', '.') ?></td>
                        <td> - </td>
                        <?php $totalDebit += $hasil; ?>
                      <?php } else { ?>
                        <td> - </td>
                        <td><?= 'Rp. ' . number_format(abs($hasil), 0, ',', '.') ?></td>
                        <?php $totalKredit += $hasil; ?>
                      <?php } ?>
                      <?php
                      $debit = 0;
                      $kredit = 0;
                      ?>
                    </tr>
                  <?php endfor ?>
                  <?php if ($totalDebit != abs($totalKredit)) { ?>
                    <tr>
                      <td class="text-center" colspan="2"><b>Total</b></td>
                      <td class="text-danger"><?= 'Rp. ' . number_format($totalDebit, 0, ',', '.') ?></td>
                      <td class="text-danger"><?= 'Rp. ' . number_format(abs($totalKredit), 0, ',', '.') ?></td>
                    </tr>
                    <tr class="bg-danger text-center">
                      <td colspan="6" class="text-white" style="font-weight:bolder;font-size:19px">TIDAK SEIMBANG</td>
                    </tr>
                  <?php } else { ?>
                    <tr>
                      <td class="text-center" colspan="2"><b>Total</b></td>
                      <td class="text-success"><?= 'Rp. ' . number_format($totalDebit, 0, ',', '.') ?></td>
                      <td class="text-success"><?= 'Rp. ' . number_format(abs($totalKredit), 0, ',', '.') ?></td>
                    </tr>
                    <tr class="bg-success text-center">
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
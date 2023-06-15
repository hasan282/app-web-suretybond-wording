<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$complete = true;
$issued = true;
$completeCheck = array(
    'nomor', 'nilai', 'date_from', 'date_to', 'days', 'issued_place', 'issued_date',
    'proyek', 'proyek_nama', 'dokumen', 'pekerjaan', 'obligee', 'obligee_alamat'
);
foreach ($completeCheck as $cc) if (!isset($jaminan[$cc]) || $jaminan[$cc] === null) $complete = false;
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title text-secondary">Detail Data Jaminan</h3>
        <div class="card-tools"> <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button> </div>
    </div>
    <div class="card-body">
        <?php if (!$complete) : ?>
            <div class="callout callout-warning bg-light">
                <div class="row">
                    <div class="col-md-7">
                        <h5>Pengisian Data Jaminan Belum Lengkap!</h5>
                        <p class="text-secondary">Silahkan lengkapi data jaminan terlebih dahulu.</p>
                    </div>
                    <div class="col-md-5 d-flex mt-3 mt-md-0">
                        <button class="btn btn-primary my-auto ml-md-auto text-bold" onclick="window.location.href='/guarantee/add/<?= $jaminan['enkrip']; ?>'">
                            <i class="fas fa-pen-square mr-2"></i>Lengkapi Data Jaminan
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="table-responsive">
                    <table class="table table-borderless table-sm">
                        <tr>
                            <td colspan="3" class="text-bold text-secondary">JAMINAN</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Jenis Jaminan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= $jaminan['jenis'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <?php $bahasa = array('ID' => 'Bahasa Indonesia', 'EN' => 'English'); ?>
                            <td class="fit pr-3 text-bold pl-4">Bahasa</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= array_key_exists($jaminan['bahasa'], $bahasa) ? $bahasa[$jaminan['bahasa']] : '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nomor Jaminan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= $jaminan['nomor'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nilai Jaminan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap">
                                <?= $jaminan['currency_2']; ?>
                                <?= nformat($jaminan['nilai']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Berlaku</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= $jaminan['days'] ?? '0'; ?> Hari</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Mulai Tanggal</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= fdate($jaminan['date_from']) ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Sampai Tanggal</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= fdate($jaminan['date_to']) ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Tanggal Penerbitan</td>
                            <td class="text-bold">:</td>
                            <td class="text-nowrap"><?= $jaminan['issued_place'] ?? '-'; ?>, <?= fdate($jaminan['issued_date']) ?? '-'; ?></td>
                        </tr>
                        <tr class="border-top">
                            <td colspan="3" class="text-bold text-secondary">ASURANSI</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nama Asuransi</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['asuransi']; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Alamat</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['cabang_alamat']; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Penandatangan</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['cabang_pejabat']; ?> (<?= $jaminan['cabang_jabatan']; ?>)</td>
                        </tr>
                        <tr class="border-top">
                            <td colspan="3" class="text-bold text-secondary">PRINCIPAL</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nama Principal</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['principal']; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Alamat</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['principal_alamat']; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Penandatangan</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['principal_pejabat']; ?> (<?= $jaminan['principal_jabatan']; ?>)</td>
                        </tr>

                        <tr class="border-top">
                            <td colspan="3" class="text-bold text-secondary">PROYEK</td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Jenis Proyek</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['proyek'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nama Proyek</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['proyek_nama'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Lokasi Proyek</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['proyek_alamat'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Nilai Proyek</td>
                            <td class="text-bold">:</td>
                            <td>
                                <?= $jaminan['currency_proyek_2']; ?>
                                <?= nformat($jaminan['proyek_nilai']); ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Dokumen Pendukung</td>
                            <td class="text-bold">:</td>
                            <td>
                                <?= $jaminan['dokumen'] ?? '-'; ?>
                                <?= $jaminan['dokumen_date'] != null ? 'tanggal ' . fdate($jaminan['dokumen_date']) : ''; ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Kelompok Pekerjaan</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['pekerjaan'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Pemilik Proyek</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['obligee'] ?? '-'; ?></td>
                        </tr>
                        <tr>
                            <td class="fit pr-3 text-bold pl-4">Alamat Pemilik Proyek</td>
                            <td class="text-bold">:</td>
                            <td><?= $jaminan['obligee_alamat'] ?? '-'; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="mw-2 mx-auto position-relative h-100 pt-3" style="min-height:200px">
                    <?php if (!$issued) : ?>
                        <button class="btn btn-secondary btn-sm btn-block">
                            <i class="fas fa-edit mr-2"></i>Edit Data Jaminan
                        </button>
                        <button class="btn btn-danger btn-sm mt-2 btn-block">
                            <i class="fas fa-trash-alt mr-2"></i>Hapus Data Jaminan
                        </button>
                    <?php endif; ?>
                    <div class="absolute-bottom pb-3 text-center w-100">
                        <?php if (!$complete) : ?>
                            <small class="text-danger"><i class="fas fa-info-circle mr-2"></i>Data Belum Lengkap</small>
                        <?php endif; ?>
                        <button type="button" id="inforcerequest" <?= $complete ? '' : 'disabled '; ?>class="btn btn-default text-bold btn-sm btn-block mt-2 mb-3">
                            <i class="fas fa-certificate mr-2"></i>Pengajuan Inforce
                        </button>
                        <a href="/guarantee/print/<?= $jaminan['enkrip']; ?>" class="btn btn-primary btn-lg mt-2 btn-block text-bold<?= $complete ? '' : ' disabled'; ?>">
                            <i class="fas fa-print mr-2"></i>Cetak Jaminan
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<script>
    $(function() {
        $('#inforcerequest').click(function() {
            Swal.fire({
                title: 'Ajukan Inforce Jaminan?',
                text: 'Pengajuan Inforce tidak dapat dibatalkan',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: '<i class="fas fa-check-circle mr-2"></i>Ajukan Inforce',
                cancelButtonText: '<i class="fas fa-times mr-2"></i> Tidak',
                showCloseButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = BaseURL + 'inforce/request/<?= $jaminan['enkrip']; ?>';
                }
            });
        });
    });
</script>

<?= $this->endSection(); ?>
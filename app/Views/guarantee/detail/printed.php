<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="card">
    <div class="card-header">
        <h3 class="card-title text-secondary">Detail Data Jaminan</h3>
        <div class="card-tools"> <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button> </div>
    </div>
    <div class="card-body">
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
                            <td class="text-nowrap text-bold"><?= $jaminan['jenis'] ?? '-'; ?></td>
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
                            <?php $regNumber = $jaminan['blanko_nomor'] ?? '<span class="text-secondary">DRAFT</span>'; ?>
                            <td class="text-nowrap"><?= str_replace(REGISTER_SECTION, $regNumber, $jaminan['nomor'] ?? '-'); ?></td>
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
                            <td class="text-bold"><?= $jaminan['asuransi']; ?></td>
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
                            <td class="text-bold"><?= $jaminan['principal']; ?></td>
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
                <div class="mw-2 mx-auto position-relative h-100 pt-3" style="min-height:260px">

                    <button class="btn btn-danger btn-block" disabled>Jadikan PDF</button>

                    <div class="absolute-bottom pb-3 text-center w-100">
                        <button class="btn btn-secondary btn-block" disabled>Revisi Jaminan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>

<?= $this->endSection(); ?>
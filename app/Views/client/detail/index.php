<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dataModel = new \App\Models\PrincipalData;
$dataRate = $dataModel->getNestRate($principal['id']);
$modelAsuransi = new \App\Models\InsuranceModel;
$modelPrincipal = new \App\Models\PrincipalModel;
$asuransi = $modelAsuransi->getData(['id', 'nickname'])->where(['active' => 1])->data();
$dataPeople = $modelPrincipal->getPeople(['nama', 'jabatan'])->where(
    ['id_principal' => $principal['id']]
)->data();
$documents = $modelPrincipal->refresh()->getDocument($principal['id'])->data();
?>
<div class="row">
    <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h6 class="text-center text-bold text-secondary">Informasi</h6>
                <p>
                    <small class="text-info">Nama Principal</small><br>
                    <span class="text-bold"><?= $principal['principal']; ?></span>
                </p>
                <p>
                    <small class="text-info">Alamat</small><br>
                    <span><?= $principal['alamat']; ?></span>
                </p>
                <p>
                    <small class="text-info">Nomor Telpon</small><br>
                    <span><?= $principal['telpon'] ?? '-'; ?></span>
                </p>
                <p>
                    <small class="text-info">Email</small><br>
                    <span><?= $principal['email'] ?? '-'; ?></span>
                </p>
                <div class="text-right">
                    <a href="/client/info/edit/<?= $principal['enkrip']; ?>" class="btn btn-sm btn-default">
                        <i class="fas fa-edit mr-2"></i>Edit Informasi Principal
                    </a>
                </div>
                <p class="mb-2">
                    <small class="text-info">Pejabat Penandatangan</small>
                </p>
                <table class="table table-bordered table-sm">
                    <thead>
                        <th class="text-center">#</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Jabatan</th>
                    </thead>
                    <tbody>
                        <?php foreach ($dataPeople as $num => $pl) : ?>
                            <tr>
                                <td class="text-bold fit px-2"><?= $num + 1; ?></td>
                                <td class="px-2"><?= $pl['nama']; ?></td>
                                <td><?= $pl['jabatan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p class="mb-2 mt-3">
                    <small class="text-info">Dokumen SPKMGR</small>
                </p>
                <table class="table table-bordered table-sm">
                    <?php if (!empty($documents)) : ?>
                        <thead>
                            <th class="text-center">#</th>
                            <th class="text-center">Tanggal Upload</th>
                            <th class="text-center">Dokumen</th>
                        </thead>
                    <?php endif; ?>
                    <tbody>
                        <?php foreach ($documents as $nm => $doc) : ?>
                            <tr>
                                <td class="text-bold fit px-2"><?= $nm + 1; ?></td>
                                <td class="px-2 text-center"><?= id2date($doc['id'], 'D/M/Y H.I'); ?></td>
                                <td class="px-2 text-center text-sm text-nowrap align-middle">
                                    <a href="<?= base_url('files/' . $doc['id_principal'] . '/' . $doc['filename']); ?>" target="_blank">Lihat Dokumen<i class="fas fa-external-link-alt ml-2"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="3" class="text-center">
                                <?php if (empty($documents)) : ?>
                                    <p class="text-sm text-secondary">Belum ada Dokumen</p>
                                <?php endif; ?>
                                <span class="btn btn-default btn-sm" id="btnupload" data-open="0">
                                    <i class="fas fa-plus mr-2"></i>Upload Dokumen Baru
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card hide-content" id="boxupload">
            <div class="card-body">
                <div class="text-center text-muted">
                    <p class="text-sm">File Extension PDF / JPG / JPEG / PNG</p>
                </div>
                <div id="uploadfile">
                    <?= csrf_field(); ?>
                </div>
                <div id="uploadmsg" class="text-center"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-7">
        <div class="card">
            <div class="card-body">
                <h6 class="text-center text-bold text-secondary">Rate Principal</h6>
                <?php if (empty($dataRate)) : ?>
                    <div class="border-fade px-3 text-center py-4 mt-4">
                        <p class="text-secondary mb-0">Tidak Ada Data Rate</p>
                    </div>
                <?php endif; ?>
                <?php foreach ($dataRate as $dr) : ?>
                    <h6 class="mt-4 text-bold"><?= $dr['asuransi']; ?></h6>
                    <?php foreach ($dr['proyek'] as $pro) : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th class="text-info px-2 text-nowrap"><?= $pro['nama']; ?></th>
                                        <th class="text-center">Rate</th>
                                        <th class="text-center">Minimum</th>
                                        <th class="text-center">Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pro['rate'] as $rate) : ?>
                                        <tr>
                                            <td class="text-nowrap"><?= $rate['jenis']; ?></td>
                                            <td class="text-center text-nowrap"><?= to_decimal($rate['rate']); ?> %</td>
                                            <td class="text-right">Rp<?= nformat($rate['minimum'], 0); ?></td>
                                            <td class="text-right">Rp<?= nformat($rate['admin'], 0); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endforeach; ?>
                    <?php $getAsuransi = null;
                    foreach ($asuransi as $key => $asr) {
                        if ($asr['id'] == $dr['id']) {
                            $getAsuransi = $asuransi[$key];
                            unset($asuransi[$key]);
                        }
                    } ?>
                    <?php if ($getAsuransi !== null) : ?>
                        <div class="text-right">
                            <a href="" class="btn btn-default btn-sm disabled">
                                <i class="fas fa-edit mr-2"></i>Ubah Data Rate <?= $getAsuransi['nickname']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach;
                $noRate = array_values($asuransi); ?>
                <?php if (!empty($noRate)) : ?>
                    <hr class="mt-4">
                    <?php foreach ($noRate as $nr) : ?>
                        <div class="mw-3 mx-auto pt-2">
                            <a href="" class="btn btn-sm btn-primary btn-block disabled">
                                <i class="fas fa-plus-circle mr-2"></i>Tambah Data Rate <?= $nr['nickname']; ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    $(function() {
        $('#uploadfile').setDropZone(BaseURL + 'client/upload?pr=<?= $principal['enkrip']; ?>');
        $('#btnupload').click(function() {
            const OPEN = parseInt($(this).data('open'));
            if (OPEN === 1) {
                $('#boxupload').slideUp();
                $(this).data('open', 0).html('<i class="fas fa-plus mr-2"></i>Upload Dokumen Baru');
            } else {
                $('#boxupload').slideDown();
                $(this).data('open', 1).html('<i class="fas fa-times mr-2"></i>Batalkan');
            }
        });
    });
</script>
<?= $this->endSection(); ?>
<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<?php
$dataModel = new \App\Models\PrincipalData;
$dataRate = $dataModel->getNestRate($principal['id']);
$modelAsuransi = new \App\Models\InsuranceModel;
$modelPrincipal = new \App\Models\PrincipalModel;
$asuransi = $modelAsuransi->getData(['id', 'nickname'])->where(['active' => 1])->data();
$dataPeople = $modelPrincipal->getPeople(['enkrip', 'nama', 'jabatan'])->where(
    ['id_principal' => $principal['id']]
)->data();
$documents = $modelPrincipal->refresh()->getDocument($principal['id'])->data();
$allowDelPeople = sizeof($dataPeople) > 1;
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
                        <?php if ($allowDelPeople) : ?>
                            <th class="text-center"><i class="fas fa-cog"></i></th>
                        <?php endif; ?>
                    </thead>
                    <tbody>
                        <?php foreach ($dataPeople as $num => $pl) : ?>
                            <tr>
                                <td class="text-bold fit px-2"><?= $num + 1; ?></td>
                                <td class="px-2 peoplename"><?= $pl['nama']; ?></td>
                                <td><?= $pl['jabatan']; ?></td>
                                <?php if ($allowDelPeople) : ?>
                                    <td class="p-0 align-middle text-center">
                                        <button class="btn btn-link btn-sm py-0 px-0 deletepeople" data-enkrip="<?= $pl['enkrip']; ?>">
                                            <i class="fas fa-times-circle"></i>
                                        </button>
                                    </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="text-center pt-2" id="btn_addpeople_box">
                    <button class="btn btn-sm btn-default" id="btn_addpeople">
                        <i class="fas fa-plus mr-2"></i>Tambah Penandatangan Baru
                    </button>
                </div>
                <div class="py-3 hide-content" id="form_box">
                    <form method="POST" class="row">
                        <?= csrf_field(); ?>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="pejabat">Nama Lengkap</label>
                                <input id="pejabat" name="pejabat" class="form-control input-people" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input id="jabatan" name="jabatan" class="form-control input-people" placeholder="Jabatan">
                            </div>
                        </div>
                        <div class="text-center col-12">
                            <div class="text-sm">
                                <p class="text-info"><i class="fas fa-info-circle mr-2"></i>Perhatikan penulisan dan huruf kapital pada nama dan jabatan!</p>
                            </div>
                            <button type="submit" class="btn btn-primary mr-1" id="submit_people" disabled>
                                <i class="fas fa-plus mr-2"></i>Tambahkan Data
                            </button>
                            <button type="button" class="btn btn-default show-tooltip" id="cancel_submit" title="Batalkan">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </form>
                </div>
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
                                <?php $datedoc = explode('@', id2date($doc['id'], 'Y-M-D@H : I')); ?>
                                <td class="text-bold fit px-2"><?= $nm + 1; ?></td>
                                <td class="px-2 text-center"><?= fdate($datedoc[0], 'DD1-MM2-YY2'); ?> ( <?= $datedoc[1]; ?> )</td>
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
        $('#btn_addpeople').click(function() {
            $('#btn_addpeople_box').addClass('hide-content');
            $('#form_box').removeClass('hide-content');
        });
        $('#cancel_submit').click(function() {
            $('#btn_addpeople_box').removeClass('hide-content');
            $('#form_box').addClass('hide-content');
            $('#pejabat').val('');
            $('#jabatan').val('').trigger('keyup');
        });
        $('.input-people').on('keyup', function() {
            const PEJABAT = $('#pejabat').val();
            const JABATAN = $('#jabatan').val();
            $('#submit_people').attr('disabled', (PEJABAT == '' || JABATAN == ''));
        });
        $('.deletepeople').click(function() {
            const ENKRIP = $(this).data('enkrip');
            const PEOPLENAME = $(this).parent().siblings('.peoplename').html();
            Swal.fire({
                title: 'Hapus Penandatangan',
                html: 'Hapus data <strong class="text-danger">' + PEOPLENAME + '</strong> dari penandatangan ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#DC3545',
                confirmButtonText: '<i class="fas fa-trash-alt mr-2"></i>Hapus Data',
                cancelButtonText: '<i class="fas fa-times mr-2"></i>Tidak',
                showCloseButton: true,
                focusCancel: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = BaseURL + 'client/people/delete/' + ENKRIP;
                }
            });
        });
        <?= tooltip(); ?>
    });
</script>
<?= $this->endSection(); ?>
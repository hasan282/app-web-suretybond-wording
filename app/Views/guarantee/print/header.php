<?php
$cookieBack = get_cookie('BGBLNK') ?? '0';
$backBlanko = (intval($cookieBack) === 1);
?>
<div class="row">
    <div class="col-lg mb-4 mb-lg-0">
        <p class="text-secondary mb-0">ASURANSI</p>
        <p class="text-bold"><?= $jaminan['asuransi_print']; ?> <?= $jaminan['cabang_print']; ?></p>
        <p class="text-secondary mb-0">PRINCIPAL</p>
        <p class="text-bold mb-0"><?= $jaminan['principal']; ?></p>
    </div>
    <div class="col-lg mb-4 mb-lg-0">
        <div class="border-fade pt-3 text-center h-100">
            <p class="text-bold mb-0"><?= $jaminan['jenis']; ?></p>
            <p class="text-sm mt-0 text-secondary"><i><?= $jaminan['jenis_english']; ?></i></p>
            <table class="table table-borderless table-sm text-left">
                <tr>
                    <td></td>
                    <td class="py-0 fit text-secondary">Nomor</td>
                    <td class="py-0 fit"><span class="text-secondary mr-2">:</span><strong><?= $jaminan['nomor'] ?? '-'; ?></strong></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="py-0 fit text-secondary">Nilai</td>
                    <td class="py-0 fit"><span class="text-secondary mr-2">:</span><strong><?= $jaminan['symbol'] . ' ' . nformat($jaminan['nilai']); ?></strong></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-lg text-center d-flex">
        <div class="w-100 my-auto">
            <div class="custom-control custom-switch">
                <input <?= $backBlanko ? 'checked ' : ''; ?>type="checkbox" class="custom-control-input cursor-pointer" id="backmode">
                <label class="custom-control-label text-<?= $backBlanko ? 'primary ' : 'secondary'; ?> cursor-pointer" for="backmode">Background Blanko</label>
            </div>
            <small class="text-info"><i class="fas fa-info-circle mr-2"></i>Hidupkan untuk membantu pengaturan margin</small>
        </div>
    </div>
</div>
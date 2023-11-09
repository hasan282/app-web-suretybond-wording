<?php
$request = \Config\Services::request();
$selectedPrincipal = $request->getGet('client');
?>
<div class="form-group">
    <label for="principal">Principal<span class="ml-2" id="principal_loader"></span></label>
    <div id="errorloadprincipal"></div>
    <select id="principal" class="form-control select2selector" style="width:100%" disabled></select>
    <small class="ml-2"><a href="/client/add">Tambah Data Principal Baru?</a></small>
</div>
<div class="form-group">
    <label for="principal_alamat">Alamat Principal</label>
    <textarea id="principal_alamat" rows="2" class="form-control" readonly></textarea>
</div>
<div class="form-group">
    <label for="principal_people">Pejabat Penandatangan<span class="ml-2" id="people_loader"></span></label>
    <div id="errorpeople"></div>
    <select name="principal_people" id="principal_people" class="form-control" disabled></select>
    <input id="principal_position" class="form-control mw-3 mt-2" value="" readonly>
</div>
<?php if ($selectedPrincipal !== null) : ?>
    <script>
        const PRSELECTD = "<?= $selectedPrincipal; ?>";
    </script>
<?php endif; ?>
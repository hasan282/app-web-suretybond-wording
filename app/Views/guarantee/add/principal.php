<?php
$request = \Config\Services::request();
$principal = new \App\Models\PrincipalModel;
$principalData = $principal->getData(
    array('enkrip', 'principal', 'alamat')
)->where(['office' => userdata('office_id')])->order('principal')->data();
$alamat = array();
$selectedPrincipal = null;
?>
<div class="form-group">
    <label for="principal">Principal</label>
    <select name="principal" id="principal" class="form-control">
        <option selected disabled>---</option>
        <?php foreach ($principalData as $pd) :
            if ($pd['enkrip'] === $request->getGet('client')) $selectedPrincipal = $pd['enkrip'];
            $alamat['pr_' . $pd['enkrip']] = $pd['alamat']; ?>
            <option value="<?= $pd['enkrip']; ?>"><?= $pd['principal']; ?></option>
        <?php endforeach; ?>
    </select>
    <small class="ml-2"><a href="/client/add">Tambah Data Principal Baru?</a></small>
</div>
<div class="form-group">
    <label for="principal_alamat">Alamat Principal</label>
    <textarea id="principal_alamat" rows="2" class="form-control" readonly></textarea>
</div>
<div class="form-group">
    <label for="principal_people">Pejabat Penandatangan</label>
    <select name="principal_people" id="principal_people" class="form-control" disabled></select>
    <input id="principal_position" class="form-control mw-3 mt-2" value="" readonly>
</div>
<script>
    const PRADDRESS = <?= json_encode($alamat); ?>;
    <?php if ($selectedPrincipal !== null) : ?>
        const PRSELECTD = "<?= $selectedPrincipal; ?>";
    <?php endif; ?>
</script>
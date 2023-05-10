<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>

<div class="mx-auto mw-7">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <p class="text-muted mb-1">PRINCIPAL</p>
                <h6 class="text-bold"><?= $jaminan['principal']; ?></h6>
                <hr>
                <p class="text-muted mb-1">ASURANSI</p>
                <h6 class="text-bold mb-1"><?= $jaminan['asuransi']; ?></h6>
                <p class="mb-0">KANTOR <?= $jaminan['cabang']; ?></p>
            </div>
        </div>
    </div>
</div>
<form method="POST">
    <?= csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Proyek</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <?= $this->include('guarantee/add/proyek'); ?>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Informasi Jaminan</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <?= $this->include('guarantee/add/jaminan'); ?>

        </div>
    </div>
    <div class="mx-auto mw-7">
        <div class="card">
            <div class="card-body text-center p-3">
                <button type="submit" class="btn btn-primary text-bold">
                    <i class="fas fa-save mr-2"></i>Simpan Data Jaminan
                </button>
            </div>
        </div>
    </div>
</form>
<div class="card">
    <div class="card-body">
        <?php var_dump($jaminan); ?>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script>
    function dateConvert(date, tipe = 1) {
        let dateresult = null;
        let dt = [];
        const month = ('Januari,Februari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember').split(',');
        switch (tipe) {
            case 1:
                dt = date.split('-');
                if (dt.length == 3) dateresult = parseInt(dt[2]) + ' ' + month[dt[1] - 1] + ' ' + dt[0];
                break;
            case 2:
                dt = date.split('-');
                if (dt.length == 3) dateresult = dt[2] + '/' + dt[1] + '/' + dt[0];
                break;
            case 11:
                dt = date.split('/');
                if (dt.length == 3) dateresult = parseInt(dt[2]) + ' ' + month[dt[1] - 1] + ' ' + dt[0];
                break;
            case 12:
                dt = date.split('/');
                if (dt.length == 3) dateresult = dt[2] + '-' + dt[1] + '-' + dt[0];
                break;
            case 13:
                dt = date.split('/');
                if (dt.length == 3) dateresult = parseInt(dt[0]) + ' ' + month[dt[1] - 1] + ' ' + dt[2];
                break;
            default:
                dateresult = null;
                break;
        }
        return dateresult;
    }

    function dateInput(selector, multiForm = false) {
        $(selector).datetimepicker({
            format: 'DD/MM/YYYY'
        });
        let preview = '.datetimepicker-input';
        if (multiForm) preview = selector + '_input';
        $(preview).on('focus', function() {
            const preval = $(this).prev().val();
            $(this).val(dateConvert(preval, 2));
        });
        $(preview).on('focusout', function() {
            const vals = $(this).prev().val();
            $(this).val(dateConvert(vals));
        });
        $(preview).prev().on('input', function() {
            const vals = $(this).val();
            $(this).val(dateConvert(vals, 12));
            $(preview).val(dateConvert(vals, 13));
        });
    }

    $(function() {
        dateInput('#dokumen_date', true);

        $('#date_from').inputDate();
        $('#date_to').inputDate();
        $('#issued_date').inputDate();
    });
</script>
<?= $this->endSection(); ?>
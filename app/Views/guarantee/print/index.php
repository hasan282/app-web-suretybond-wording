<?= $this->extend('template/page_admin'); ?>

<?= $this->section('content'); ?>



<div class="card">
    <div class="card-header">
        <h3 class="card-title">Pengaturan Halaman</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">

        <?= $this->include('guarantee/print/setting'); ?>

    </div>
</div>
<div class="card collapsed-card">
    <div class="card-header">
        <h3 class="card-title">Preview</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <div class="card-body bg-light">
        <div class="mx-auto mw-8">
            <div class="card">
                <div class="card-body">

                    <?= '';
                    // $this->include('guarantee/draft/mb_ind');
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <div class="mx-auto mw-3 text-center">
                    <small class="text-secondary">Print dokumen dengan</small>
                    <button type="button" class="btn btn-danger btn-lg btn-block">
                        Jadikan <strong>PDF</strong>
                    </button>
                    <small class="text-secondary">atau</small>
                    <button type="button" class="btn btn-primary btn-block">
                        Download File <strong>Word</strong>
                    </button>
                </div>
            </div>
            <div class="col-7">
                <div class="border-fade px-3 text-center py-3">

                    <?= $this->include('guarantee/print/issued'); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('jscript'); ?>
<script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/asset/js/pdf/trials.js"></script>
<script>
    pdfMake.fonts = {
        TimesNewRoman: {
            normal: '<?= base_url(); ?>/asset/font/times.ttf',
            bold: '<?= base_url(); ?>/asset/font/timesbd.ttf',
            italics: '<?= base_url(); ?>/asset/font/timesi.ttf',
            bolditalics: '<?= base_url(); ?>/asset/font/timesbi.ttf'
        }
    };
    setTimeout(() => {
        const docDefinition = {
            content: [
                'First paragraph',
                [
                    'First paragraph',
                    'First paragraph',
                    'First paragraph'
                ],
                {
                    text: [
                        'This paragraph is defined as an array of elements to make it possible to ',
                        {
                            text: 'restyle part of it and make it bigger ',
                            fontSize: 15,
                            bold: true,
                            italics: true
                        },
                        'than the rest.'
                    ],
                    alignment: 'justify'
                },
                'Another paragraph, this time a little bit longer to make sure, this line will be divided into at least two lines',
            ],
            defaultStyle: {
                font: 'TimesNewRoman'
            },
            pageOrientation: 'potrait',
            pageSize: 'LETTER',
            pageMargins: [27, 46, 25, 10]
        };
        pdfMake.createPdf(docDefinition).open();
        // pdfMake.createPdf(printPdf()).open();
    }, 3000);
</script>
<?= $this->endSection(); ?>
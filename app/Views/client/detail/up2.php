<div class="card-body">


    <form action="<?= site_url('client/upload') ?>" class="dropzone text-center" style="border-color:#F2F2F2;border-radius:15px">
        <?= csrf_field(); ?>
    </form>



</div>

<?= $this->section('jscript'); ?>
<script>
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone(".dropzone", {
        maxFilesize: 20, // 2 mb
        acceptedFiles: ".jpeg,.jpg,.png,.pdf",
    });
    myDropzone.on("sending", function(file, xhr, formData) {
        // CSRF Hash
        // var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
        // var csrfHash = $('.txt_csrfname').val(); // CSRF hash
        var csrfName = 'csrf_token';
        var csrfHash = $('[name="csrf_token"]').val();

        formData.append(csrfName, csrfHash);
    });
    myDropzone.on("success", function(file, response) {
        $('[name="csrf_token"]').val(response.token);
        if (response.success == 0) { // Error
            alert(response.error);

            console.log('ERROR');
        }
        if (response.success == 1) {
            // alert(response.message);

            console.log('SUCCESS');
            console.log(response.message);
        }
        if (response.success == 2) {
            alert(response.message);

            console.log('NO UPLOAD');
        }

    });

    $('.dz-button').html('<div class="mb-3 text-secondary"><i class="fas fa-file-alt fa-2x"></i></div><span class="text-secondary">klik atau drag file kesini</span>');
</script>
<?= $this->endSection(); ?>
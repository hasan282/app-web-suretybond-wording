const prPeopleFill = param => {
    $('#people_loader').html('<i class="fas fa-spinner fa-pulse text-info"></i>');
    $('#principal_people').html('').attr('disabled', true);
    $('#errorpeople').html('');
    $('#principal_position').val('');
    setTimeout(() => {
        $.get(BaseURL + 'd/client/people/' + param, function (data, status) {
            if (status == 'success') {
                let options = '';
                let jabatan = [];
                $.each(data, function (index, value) {
                    jabatan[index] = value.jabatan;
                    options += '<option value="' + value.enkrip + '" data-index="' + index + '">' + value.nama + '</option>';
                });
                $('#principal_people').html(options).attr('disabled', false).on('change', function () {
                    const INDEKS = $(this).children('option:selected').data('index');
                    $('#principal_position').val(jabatan[INDEKS]);
                }).trigger('change');
            } else {
                $('#errorpeople').html('<span class="text-sm text-danger"><i class="fas fa-exclamation-circle mr-1"></i>tidak dapat memuat data, periksa koneksi.</span>');
            }
        }).fail(function () {
            $('#errorpeople').html('<span class="text-sm text-danger"><i class="fas fa-exclamation-circle mr-1"></i>tidak dapat memuat data, periksa koneksi.</span>');
        });
        $('#people_loader').html('');
    }, 500);
}

const principalChange = function () {
    $('#principal').on('change', function () {
        const VALS = $(this).val();
        $('#principal_alamat').html(PRADDRESS['pr_' + VALS]);
        prPeopleFill(VALS);
    });
}

const prPeopleChange = function () {

}

$(function () {

    principalChange();

});
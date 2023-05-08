const TITLELOADER = '<i class="fas fa-spinner fa-pulse text-info"></i>';
const ERRORMESSAGE = '<span class="text-sm text-danger"><i class="fas fa-exclamation-circle mr-1"></i>tidak dapat memuat data, periksa koneksi.</span>';
const enableSubmit = function () {
    const PRINCIPALVAL = $('#principal_people').val();
    const ASURANSIVAL = $('#asuransi_pejabat').val();
    $('button[type="submit"]').attr('disabled', (PRINCIPALVAL === null || ASURANSIVAL === null));
};
const dataLoader = function (loaderPlace, errorPlace, urlGet, target, selectOption) {
    $(loaderPlace).html(TITLELOADER);
    $(target).html('').attr('disabled', true);
    $(errorPlace).html('');
    enableSubmit();
    setTimeout(() => {
        $.get(BaseURL + urlGet, function (data, status) {
            if (status == 'success') {
                let options = '';
                $.each(data, function (index, value) {
                    options = options + selectOption(index, value);
                });
                $(target).data('json', data).html(options).attr('disabled', false).trigger('change');
            } else {
                $(errorPlace).html(ERRORMESSAGE);
            }
        }).fail(function () {
            $(errorPlace).html(ERRORMESSAGE);
        });
        $(loaderPlace).html('');
    }, 100);
};
const defaultOption = (value, text, index) => '<option value="' + value + '" data-index="' + index + '">' + text + '</option>';

$(function () {

    $('#principal').on('change', function () {
        const VALS = $(this).val();
        $('#principal_alamat').html(PRADDRESS['pr_' + VALS]);
        $('#principal_position').val('');
        dataLoader(
            '#people_loader',
            '#errorpeople',
            'd/client/person/' + VALS,
            '#principal_people',
            function (index, value) {
                return defaultOption(value.enkrip, value.nama, index);
            }
        );
    });

    $('#asuransi').on('change', function () {
        const VALS = $(this).val();
        $('#asuransi_pejabat').html('').attr('disabled', true);
        $('#asuransi_alamat').html('');
        $('#asuransi_jabatan').val('');
        dataLoader(
            '#asuransi_loader',
            '#errorcabang',
            'd/insurance/' + VALS,
            '#cabang',
            function (index, value) {
                return defaultOption(value.cabang_enkrip, value.cabang, index);
            }
        );
    });

    $('#principal_people').on('change', function () {
        const INDEX = $(this).children('option:selected').data('index');
        const JSONDATA = $(this).data('json');
        $('#principal_position').val(JSONDATA[INDEX]['jabatan']);
        enableSubmit();
    });

    $('#cabang').on('change', function () {
        const INDEKS = $(this).children('option:selected').data('index');
        const JSONDATA = $(this).data('json');
        $('#asuransi_alamat').html(JSONDATA[INDEKS]['alamat']);
        $('#asuransi_jabatan').val('');
        const VALS = $(this).val();
        dataLoader(
            '#pejabat_loader',
            '#errorpejabat',
            'd/insurance/person/' + VALS,
            '#asuransi_pejabat',
            function (index, value) {
                return defaultOption(value.enkrip, value.nama, index);
            }
        );
    });

    $('#asuransi_pejabat').on('change', function () {
        const INDEKS = $(this).children('option:selected').data('index');
        const JSONDATA = $(this).data('json');
        $('#asuransi_jabatan').val(JSONDATA[INDEKS]['jabatan']);
        enableSubmit();
    });

});
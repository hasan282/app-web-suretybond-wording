(function ($) {

    let inOption = {
        placeholder: 'Tanggal'
    }

    const dateConvert = function (date, tipe = 1) {
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

    $.fn.inputDate = function (options = {}) {
        const DIV = this;
        const ID = DIV.attr('id');
        for (const key in options) {
            inOption[key] = options[key];
        }
        let form = '<div class="input-group-prepend" data-target="#' + ID + '" data-toggle="datetimepicker">';
        form += '<div class="input-group-text"><i class="fa fa-calendar-alt"></i></div></div>';
        form += '<input type="hidden" id="val_' + ID + '" name="' + ID + '">';
        form += '<input type="text" class="form-control datetimepicker-input" id="' + ID + '_input" data-target="#' + ID + '" placeholder="' + inOption.placeholder + '">';
        DIV.addClass('input-group').data('target-input', 'nearest').html(form);
        DIV.datetimepicker({
            format: 'DD/MM/YYYY'
        });
        let preview = '#' + ID + '_input';
        $(preview).on('focus', function () {
            const preval = $(this).prev().val();
            $(this).val(dateConvert(preval, 2));
        });
        $(preview).on('focusout', function () {
            const vals = $(this).prev().val();
            $(this).val(dateConvert(vals));
        });
        $(preview).prev().on('input', function () {
            const vals = $(this).val();
            $(this).val(dateConvert(vals, 12));
            $(preview).val(dateConvert(vals, 13));
        });
    }

})(jQuery)
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
        for (const key in options) {
            inOption[key] = options[key];
        }
        this.each(function () {
            const ELEID = $(this).attr('id');
            const ELEMENT = $('#' + ELEID);
            const FORM = '<div class="input-group-prepend" data-target="#' + ELEID + '" data-toggle="datetimepicker"><div class="input-group-text"><i class="fa fa-calendar-alt"></i></div></div><input type="hidden" id="val_' + ELEID + '" name="' + ELEID + '"><input type="text" class="form-control datetimepicker-input" id="' + ELEID + '_input" data-target="#' + ELEID + '" placeholder="' + inOption.placeholder + '">';
            ELEMENT.addClass('input-group').data('target-input', 'nearest').html(FORM);
            ELEMENT.datetimepicker({
                format: 'DD/MM/YYYY'
            });
            const PREVIEW = '#' + ELEID + '_input';
            $(PREVIEW).on('focus', function () {
                const PREVAL = $(this).prev().val();
                $(this).val(dateConvert(PREVAL, 2));
            });
            $(PREVIEW).on('focusout', function () {
                const PREVAL = $(this).prev().val();
                $(this).val(dateConvert(PREVAL));
            });
            $(PREVIEW).prev().on('input', function () {
                const VALS = $(this).val();
                $(this).val(dateConvert(VALS, 12));
                $(PREVIEW).val(dateConvert(VALS, 13));
            });
        });
    }

    $.fn.dateValue = function (value) {
        this.each(function () {
            const ELEID = $(this).attr('id');
            const VALS = dateConvert(value, 2);
            $('#val_' + ELEID).val(value);
            $('#' + ELEID + '_input').val(VALS).trigger('change');
        });
    }

})(jQuery)
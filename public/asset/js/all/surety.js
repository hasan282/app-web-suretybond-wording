$(function () {

    $('#darkswitch').change(function () {
        const DARK = $(this).prop('checked');
        if (DARK) {
            $('body').addClass('dark-mode');
        }
    });

});
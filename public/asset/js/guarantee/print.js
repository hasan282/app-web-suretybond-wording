$(function () {

    $('#backmode').change(function () {
        const BACKBLNK = $(this).prop('checked');
        setCookie('BGBLNK', BACKBLNK ? 1 : 0, 1);
        window.location.reload();
    });

    $('#newprofile').click(function () {
        $('.pagesettings').attr('disabled', false);
        $('#boxselectprofile').addClass('hide-content');
        $('#boxbuttonsave').removeClass('hide-content');
        $('#boxprofilename').removeClass('hide-content');
    });

    $('#profile_name').on('keyup', function () {
        const NAMEVAL = $(this).val();
        $('#btnsave').attr('disabled', NAMEVAL == '');
    });

    $('#profile').on('change', function () {
        $('#boxbuttonapply').removeClass('hide-content');
    });

});
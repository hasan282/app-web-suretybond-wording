$(function () {

    $('#darkswitch').change(function () {
        const DARK = $(this).prop('checked');
        if (DARK) {
            $('body').addClass('dark-mode');
            $('.main-header.navbar').removeClass('navbar-white navbar-light').addClass('navbar-dark');
            $('.surety-logo').attr('src', '/image/icon/jis_suretybond_dark.png');
            setCookie('DRKMOD', 1, 7);
        } else {
            $('body').removeClass('dark-mode');
            $('.main-header.navbar').removeClass('navbar-dark').addClass('navbar-white navbar-light');
            $('.surety-logo').attr('src', '/image/icon/jis_suretybond.png');
            setCookie('DRKMOD', 0, 1);
        }
    });

    $('.btn-expand').click(function () {
        const EXPAND = (parseInt($(this).data('expand')) === 1);
        if (EXPAND) {
            $(this).data('expand', 0);
            $(this).children('i').removeClass('fa-compress-alt').addClass('fa-expand-alt');
            $('.content-box').removeClass('container-fluid').addClass('container');
        } else {
            $(this).data('expand', 1);
            $(this).children('i').removeClass('fa-expand-alt').addClass('fa-compress-alt');
            $('.content-box').removeClass('container').addClass('container-fluid');
        }
    });

});

function setCookie(name, value = '', days = 5) {
    let date = new Date;
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expire = '; expires=' + date.toUTCString();
    document.cookie = name + '=' + value + expire + '; path=/';
}

function getCookie(name) {
    let result = null;
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) result = parts.pop().split(';').shift();
    return result;
}
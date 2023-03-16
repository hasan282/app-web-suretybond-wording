$(function () {

    $('#darkswitch').change(function () {
        const DARK = $(this).prop('checked');
        if (DARK) {
            $('body').addClass('dark-mode');
            $('.main-header.navbar').removeClass('navbar-white navbar-light').addClass('navbar-dark');
            setCookie('DRKMOD', 1, 7);
        } else {
            $('body').removeClass('dark-mode');
            $('.main-header.navbar').removeClass('navbar-dark').addClass('navbar-white navbar-light');
            setCookie('DRKMOD', 0, 1);
        }
    });

});

function setCookie(name, value = '', days = 5) {
    let date = new Date;
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expire = '; expires=' + date.toUTCString();
    document.cookie = name + '=' + value + expire + '; path=/';
}
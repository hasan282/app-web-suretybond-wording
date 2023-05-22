$(function () {

    $('#loading,#infoloader').setLoader({
        icon: 'fas fa-circle-notch'
    });

    $('.data-nav').navTable(function (page) {
        $('#principal').setContent(BaseURL + 'tb/client/' + page);
    });

});

function showinfo(element) {
    const ENC = element.dataset.detail;
    const faiload = () => {
        const failed = '<div class="d-flex" style="min-height:200px;height:30vh"><div class="w-100 my-auto text-center text-fade"><span>Failed to Get Content</span></div></div>';
        $('#principalinfo').html(failed);
        $('#infoloader').fadeOut();
    };
    $('#infoloader').fadeIn(function () {
        $.get(BaseURL + 'v/client/' + ENC, function (data, status) {
            if (status == 'success' && data.status) {
                $('#principalinfo').html(data.content);
                $('#infoloader').fadeOut();
            } else {
                faiload();
            }
        }).fail(function () {
            faiload();
        });
    });
}
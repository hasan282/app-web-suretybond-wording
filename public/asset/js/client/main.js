$(function () {

    let filter = {};

    $('#loading,#infoloader').setLoader({
        icon: 'fas fa-circle-notch'
    });

    $('#datasearch').on('search', function () {
        const VALS = $(this).val();
        if (VALS == '') {
            delete filter.search;
        } else {
            filter.search = VALS;
        }
        $('.data-nav[data-page="first"]').trigger('click');
    });

    $('#btn_search').on('click', function () {
        $('#datasearch').trigger('search');
    });

    $('#marketing').on('change', function () {
        $('#datasearch').val('');
        const VALS = $(this).val();
        delete filter.search;
        if (VALS == 'ALLDATA') {
            delete filter.filter;
        } else {
            filter.filter = VALS;
        }
        $('.data-nav[data-page="first"]').trigger('click');
    });

    $('.data-nav').navTable(function (page) {
        $('#principal').setContent(BaseURL + 'tb/client/' + page, filter);
    });

    if (typeof TOASTMESSAGE !== 'undefined') {
        toastr[TOASTMESSAGE.type](TOASTMESSAGE.text);
    }

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
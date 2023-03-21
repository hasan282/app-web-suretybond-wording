(function ($) {

    $.fn.setLoader = function (options = {}) {
        const loader = this;
        let loaderOptions = {
            icon: 'fas fa-spinner',
            color: 'secondary',
            size: '2'
        };
        for (const key in options) {
            loaderOptions[key] = options[key];
        }
        loader.fadeOut(100, function () {
            loader.html('<i class="' + loaderOptions.icon + ' fa-' + loaderOptions.size + 'x fa-pulse text-' + loaderOptions.color + '"></i>');
        });
    };

    $.fn.setContent = function (url, params = {}, options = {}) {
        const failed = '<div class="d-flex" style="min-height:200px;height:30vh"><div class="w-100 my-auto text-center text-fade"><span>Failed to Get Content</span></div></div>';
        const container = this;
        let contentOptions = {
            loader: '#loading',
            count: '#total_data',
            pagenow: '#halaman',
            pagemax: '#halaman_max'
        };
        for (const key in options) {
            contentOptions[key] = options[key];
        }
        $(contentOptions.loader).fadeIn(function () {
            $.get(url, params, function (data, status) {
                if (status == 'success') {
                    container.html(data.content);
                    $(contentOptions.count).html(data.count);
                    $(contentOptions.pagenow).html(data.page_now);
                    $(contentOptions.pagemax).html(data.page_max);
                } else {
                    container.html(failed);
                    $(contentOptions.count).html('0');
                    $(contentOptions.pagenow).html('1');
                    $(contentOptions.pagemax).html('0');
                }
                $(contentOptions.loader).fadeOut();
            }).fail(function () {
                container.html(failed);
                $(contentOptions.count).html('0');
                $(contentOptions.pagenow).html('1');
                $(contentOptions.pagemax).html('0');
                $(contentOptions.loader).fadeOut();
            });
        });
    }

})(jQuery);
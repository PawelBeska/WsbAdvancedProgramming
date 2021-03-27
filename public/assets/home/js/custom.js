$(document).on({
    ajaxStart: function (e) {
        NProgress.start();
    },

    ajaxStop: function () {
        NProgress.done();
    }
});
function errors(data, selector) {
    selector.empty();
    selector.show();
    const error = ({alert, message}) => `   <div class="alert ${alert}  alert-dismissible fade show" role="alert">
                            <div class="d-flex">
                                <div class="icon">
                                    <i class="icon mdi mdi-check-circle-outline"></i>
                                </div>
                                <div class="content" style="    margin-top: 6px!important;">
                                    ${message}</strong>
                                    <button type="button" style="margin-top: 6px;" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>`;
    if (data['error'])
        selector.prepend(error({'alert': 'alert-border-danger', 'message': data['error']}));
    else if (data['success'])
        selector.prepend(error({'alert': 'alert-border-success', 'message': data['success']}));
    else {
        var l = JSON.parse(data.responseText);
        var i = 0;
        $.each(l['errors'], function (heading, text) {
            i++;
            selector.prepend(error({'alert': 'alert-border-danger', 'message': text}));
        });
    }
}

/* =================================================================
    03. Navbar redirection loading
==================================================================== */
function changeUrl(url, container) {
    $.ajax({
        url: url,
        type: 'GET',
        data: null,
        cache: false,
        success: function (data) {
            if (container) {
                $('body').html(data);
            } else {
                $('div#content').html(data);
            }
            if (typeof (history.pushState) != "undefined") {
                let obj = {Page: window.location.pathname, Url: url};
                history.pushState(obj, obj.Page, obj.Url);
            } else {
                window.location.href = url;
            }

            //init();
            RefreshMenu();
        }
    });
}
function RefreshMenu() {
    $('li').removeClass('active');
    $('li > a').each(function () {
        if ($(this).attr('href') === window.location.href) {
            $(this).parent().addClass('active');
        }
    });
}
$(document).ready(function () {
    "use strict";


    RefreshMenu();


    $('a').on('click', function (e) {
        let container = !!$(this).attr('container');
        if ($(this).attr('redirect')) {
            e.preventDefault();
            changeUrl($(this).attr('href'), container);
        }
    });



    window.addEventListener('popstate', function (event) {
        changeUrl(event.state.Url, false);
    });


});

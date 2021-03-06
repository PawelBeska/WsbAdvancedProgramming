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
                                <div class="content">
                                    ${message}</strong>
                                    <button type="button"  class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>`;
    if (data['error'])
        selector.prepend(error({'alert': 'alert-danger', 'message': data['error']}));
    else if (data['success'])
        selector.prepend(error({'alert': 'alert-success', 'message': data['success']}));
    else {
        var l = JSON.parse(data.responseText);
        var i = 0;
        $.each(l['errors'], function (heading, text) {
            i++;
            selector.prepend(error({'alert': 'alert-danger', 'message': text}));
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
                $('div#app').html(data);
            }
            if (typeof (history.pushState) != "undefined") {
                let obj = {Page: window.location.pathname, Url: url};
                history.pushState(obj, obj.Page, obj.Url);
            } else {
                window.location.href = url;
            }

            init();
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
            window.window.loc = $('form.create').attr('action') ? $('form.create').attr('action') + '/' : location.href + '/';

        }
    });


});

$(document).on('click', 'button.create', function () {
    $('div.create').show();
});

function init() {
    console.log('init');

    $('form.show-update').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            global: false,
            cache: false,
            contentType: false,
            processData: false,
            data: new FormData($('form.show-update')[0]),
            success: function (data) {
                errors(data, $('#form-errors'));
                $("form.update select option").each(function ($ez) {
                    $(this).removeAttr('selected')
                });
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });
   let formUpdate = $("form.update");
    formUpdate.on('submit', (function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $.ajax({
            url: formUpdate.attr('action'),
            type: 'PUT',
            global: false,
            cache: false,
            contentType: false,
            processData: false,
            data: new FormData($('form.update')[0]),
            success: function (data) {
                errors(data, $('#form-errors'));
                window.datatable.ajax.reload();
                $("form.update select option").each(function ($ez) {
                    $(this).removeAttr('selected')
                });
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    }));
    let formCreate = $("form.create");
    formCreate.submit(function (e) {
        e.preventDefault();

        e.stopImmediatePropagation();
        $.ajax({
            url: formCreate.attr('action'),
            type: 'POST',
            global: false,
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            data: new FormData($('form.create')[0]),
            success: function (data) {
                errors(data, $('#form-errors'));
                window.datatable.ajax.reload();
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });
    $(document).on('click', 'a.view', function (e) {
        e.preventDefault();

        e.stopImmediatePropagation();
        changeUrl( window.location + "/" + $(this).parents('tr').attr('id'), false);
    });
    $(document).on('click', 'a.remove', function (e) {
        e.preventDefault();

        e.stopImmediatePropagation();
        $.ajax({
            url: window.location + "/"  + $(this).parents('tr').attr('id'),
            type: 'DELETE',
            data: {'_token': $('meta[name="csrf-token"]').attr('content')},
            success: function (data) {
                errors(data, $('#form-errors'));
                window.datatable.ajax.reload();
            },
            error: function (data) {
                errors(data, $('#form-errors'));
            }
        });
    });
    $(document).on('click', 'a.update', function (e) {
        e.preventDefault();

        e.stopImmediatePropagation();
        $('div.update').show();
        $('form.update').attr({
            'id': $(this).parents('tr').attr('id'),
            'action': window.location + "/"  + $(this).parents('tr').attr('id')
        });
        var tr = $(this).parents('tr');
        $('form.update').find(':input.form-control', ':textarea').each(function (e) {
            $(this).find('option').attr("selected", false);
            $('form.update .js-select2').val($('form.update .js-select2').val()).trigger('change');
            let text = tr.find("td." + $(this).attr('id').replace('[]', '')).text();
            if (text.length) {
                if ($(this)[0].nodeName == 'INPUT' || $(this)[0].nodeName == 'TEXTAREA') {
                    $(this).val(text);
                } else if (text.indexOf('[') > -1) {
                    $('form.update .js-select2[name="group[]"]').val(JSON.parse(text)).trigger('change');
                } else if (text.indexOf('{') > -1) {
                    $(this).val(text);
                } else if (text.indexOf(',') > -1) {
                    text.split(',').forEach(function ($e) {
                        $("form.update select option:contains('" + $e + "')").each(function () {
                            if ($(this).text() == $e) {
                                $(this).attr('selected', 'selected');
                            }
                        });
                    });
                } else {
                    $("form.update select option:contains('" + text + "')").each(function () {
                        if ($(this).text() == text) {
                            $(this).attr('selected', 'selected');
                        }
                    });
                }
                $('form.update .js-select2').val($('form.update .js-select2').val()).trigger('change');
            }
        });

    });
    $(document).on('click', 'button.btn-close', function () {
        $(this).parents('.row').hide();
        $(this).parents('.row')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .prop('checked', false)
            .prop('selected', false);
    });

}

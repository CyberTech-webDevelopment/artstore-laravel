// ---------------hidden nav---------------------
$('.account-open-bar').click(function () {
    $(this).addClass('fade')
    $('.acount-nav').addClass('show-nav')
})

$('.acount-bar-item').click(function () {
    let new_src = ''
    let src_this = $(this).attr('data-name')
    let all_src = $(this).find('img').attr('src')
    console.log(all_src)
    $('.acount-nav').removeClass('show-nav')
    $('.account-open-bar').removeClass('fade')
    $('.acount-bar-item').each(function () {
        let src = $(this).attr('data-name')
        $(this).find('img').attr('src', '/assets/icons/' + src + '.png')
    })
    if ($(this).hasClass('active')) {

        new_src = all_src
    } else {

        let extention = all_src.split(src_this)

        new_src = extention[0] + src_this + '-active.png'
    }

    $(this).find('img').attr('src', new_src)
})

// -----------------when open modal-------------------
$('.go-to-product').click(function () {
    $('#product-a').addClass('active')

    $('.acount-bar-item').each(function () {
        let $src = $(this).attr('data-name')
        $(this).removeClass('active')
        $(this).find('img').attr('src', 'assets/icons/' + $src + '.png')
    })
    $('#product-a').addClass('active')

    $('#product-a').find('img').attr('src', 'assets/icons/products-active.png')
})

// ---------------------------
function fff() {
    $('.acount-bar-item').removeClass('active')
}

// ----------------cheng-buyer in seller-----------------

$('.acount-bar-type-item').removeClass('d-flex')
$('.acount-bar-type-item').hide()

$('.acount-type').each(function () {

    if ($(this).hasClass('acount-type-active')) {
        var $type = $(this).attr('id')
    }

    $('[data-type="' + $type + '"]').addClass('d-flex')
    $('[data-type="' + $type + '"]').show()
})

$('.acount-type').click(function () {


    $('.acount-type').each(function () {
        $(this).removeClass('acount-type-active')

    })
    $('.section_active').addClass("d-none");
    $('.section_active').removeClass("section_active")
    $id = $(this).attr('id')
    $('#data-' + $id).addClass("section_active")
    $('#data-' + $id).removeClass("d-none")
    $(this).addClass('acount-type-active')
    var $type = $(this).attr('id')
    $('.acount-bar-type-item').removeClass('d-flex')
    $('.acount-bar-type-item').hide()
    $('[data-type="' + $type + '"]').addClass('d-flex')
    $('[data-type="' + $type + '"]').show()
})

function store_orders(store_id, route, page) {

    $.ajax({
        method: 'post',
        url: route,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            store_id: store_id,
            page: page,
        },
        dataType: 'json',
        success: function (res) {

            if (res.view) {

                $('.account-history_store').empty()
                $('.account-history_store').append(res.view)

            } else {

                $('.account-history_store').empty()
            }

        }
    })

}

function user_orders(route, page) {

    $.ajax({
        method: 'post',
        url: route,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            // store_id: store_id,
            page: page,
        },
        dataType: 'json',
        success: function (res) {

            if (res.view) {

                $('.account-history_user').empty()
                $('.account-history_user').append(res.view)

            } else {

                $('.account-history_user').empty()
            }

        }
    })

}

$(document).on('click', '.page-link-order', function (event) {
    event.preventDefault();
    let page = $(this).attr('href').split('page=')[1];
    let route = $('#route-store-order').val();
    let store_id = $('#v-pills-last-views-tab').data('store-id');
    // localStorage.setItem('page_basket', page);
    store_orders(store_id, route, page);

});
$(document).on('click', '.page-link-user-order', function (event) {
    event.preventDefault();
    let page = $(this).attr('href').split('page=')[1];
    let route = $('#route-user-order').val();
    // alert(route);
    // let store_id = $('#v-pills-last-views-tab').data('store-id');
    // localStorage.setItem('page_basket', page);
    user_orders(route, page);

});
$('#v-pills-purchases-tab').on('click', function (e) {

    e.preventDefault();
    // let store_id = $(this).data('store-id');
    let page = 1;
    let route = $('#route-user-order').val();
    let href = $(this).attr('href');
    $(this).attr('href', "");
    $(this).attr('href', href);
    user_orders(route, page);


})
$('#v-pills-last-views-tab').on('click', function (e) {

    e.preventDefault();
    let store_id = $(this).data('store-id');
    let page = 1;
    let route = $('#route-store-order').val();
    let href = $(this).attr('href');
    $(this).attr('href', "");
    if (!$.isNumeric(store_id)) {
        $(this).attr('href', '#v-pills-welcome-seller');

    } else {
        $(this).attr('href', href);
        store_orders(store_id, route, page);

    }
})
// Shop orders delete

let deleting_checked_order = [];
console.log(deleting_checked_order)
$(document).on('input', '.store_order_check', function () {

    let el = $(this);
    if ($(this).is(':checked')) {

        deleting_checked_order.push($(this).val());
        $('#delete-history').prop('disabled', false);

    } else {
        $(deleting_checked_order).each(function (index, value) {

            if (value == el.val()) {

                deleting_checked_order.splice(index, 1)
            }
        });

        $('#delete-history').prop('disabled', true);
        $('.store_order_check').each(function () {

            if ($(this).is(':checked')) {

                $('.delete-all-products').prop('disabled', false);

            }


        })
    }
    if (deleting_checked_order.length == 0) {
        $('.all_store_order').prop('checked', false);
    }
    // else
    // {
    //     $('.all_store_order').prop('checked',true);
    // }
    console.log(deleting_checked_order);
    $('.delete_text_order').show();
    $('.delete_text_current').hide();
})

$(document).on('input', '.all_store_order', function () {

    if ($(this).is(':checked')) {

        $('.store_order_check').each(function () {

            $(this).prop('checked', true);
            deleting_checked_order.push($(this).val());

        })


        $('#delete-history').prop('disabled', false);
        $('.delete_text_order').show();
        $('.delete_text_all').hide();
        $('.delete_text_current').hide();
    } else {

        $('.store_order_check').each(function () {

            $(this).prop('checked', false);
            deleting_checked_order.pop();
        })


        $('#delete-history').prop('disabled', true);
        $('.delete_text_all').hide();
        $('.delete_text_order').hide();
        $('.delete_text_current').show();
    }
    console.log(deleting_checked_order)
})
$(document).on('click', '#delete-history', function () {
    $('.delete-product').trigger('click');
    $('.delete-multi').attr('id', 'selected_order')


})
$(document).on('click', '#selected_order', function () {

    let orders_id = deleting_checked_order;
    let url = $('#selected_delete_order').val()
    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            orders_id: orders_id,
        },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.res == 0) {
                $('#close_del').trigger('click');
                alert("Order(s) is not found")
                location.reload();

            } else {

                $('#v-pills-last-views-tab').trigger('click');
                $('#close_del').trigger('click');

            }

        }
    })

})

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
$(document).on('click', '.page-link-order', function (event) {
    event.preventDefault();
    let page = $(this).attr('href').split('page=')[1];
    let route = $('#route-store-order').val();
    let store_id = $('#v-pills-last-views-tab').data('store-id');
    // localStorage.setItem('page_basket', page);
    store_orders(store_id, route, page);

});
$('#v-pills-last-views-tab').on('click', function (e) {

    e.preventDefault();
    let store_id = $(this).data('store-id');
    let page = 1;
    let route = $('#route-store-order').val();
    let href = $(this).attr('href');
    $(this).attr('href', "");
    if (!$.isNumeric(store_id)) {
        $(this).attr('href', '#v-pills-welcome-seller');

    }
    else
    {
        $(this).attr('href', href);
        store_orders(store_id, route, page);
        // $.ajax({
        //     method: 'get',
        //     url: route,
        //     headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        //     data: {store_id: store_id},
        //     dataType: 'json',
        //     success: function (res) {
        //         console.log(res)
        //         if (res.view) {
        //             $('.account-history_store').empty()
        //             $('.account-history_store').append(res.view)
        //             // $('#drag-photo-logo-e').hide();
        //             // $('#drag-photo-e-back').hide();
        //             // $('#image-cont_store_e').append('<div class="drop-image_e col-sm-8 col-8 col-lg-8 col-md-8"><img src="/storage/store_logo/' + res.store.logo + '"  style="width: 100%"></div>')
        //             // $('#image-cont_store_e').append('<div class="drop-image-e-store"><img src="/assets/icons/close.png"></div>')
        //             //
        //             // $('#img-cont-back-e').append('<div class="drop-image_e_back col-4 col-sm-4 col-md-4 col-lg-4"><img src="/storage/store_back/' + res.store.background + '"style="width: 100%"></div>')
        //             // $('#img-cont-back-e').append('<div class="drop-image-e-store_back"><img src="/assets/icons/close.png"></div>')
        //             // canvas = new fabric.Canvas('canvas_store_e');
        //             // can = document.getElementById('canvas_store_e')
        //         }
        //     },
        //     error: function () {
        //         alert('ajax error')
        //
        //     }
        // })
    }
})

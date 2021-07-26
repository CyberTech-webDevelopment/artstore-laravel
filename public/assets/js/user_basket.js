function basket_store_storage(current_route_name, attr, stores) {

    if (typeof attr !== 'undefined' && attr !== false) {

        if (current_route_name == 'basket') {
            // alert(localStorage.getItem('store_id'));
            if (localStorage.getItem('store_id') != null && localStorage.getItem('url') != null && localStorage.getItem('page_basket') != null) {

                stores.each(function () {

                    if ($(this).val() == localStorage.getItem('store_id')) {
                        $(this).prop('checked', true);
                    }
                })

                return true;
            } else {
                return false;
            }

        } else {
            window.localStorage.removeItem('store_id');
            window.localStorage.removeItem('url');
            window.localStorage.removeItem('page_basket');
            window.localStorage.removeItem('order_checked');
            return false;
        }

    }

//end Local storage basket store
}

// send checkeds products

function selected_basket_products(checked_basket, url, store_id) {
    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            store_id: store_id,
            checked: checked_basket,
        },
        dataType: 'json',
        success: function (res) {

            if (res.view) {

                $('.total-cont').empty();
                $('.total-cont').append(res.view);
                // console.log(res.view)
                // $('#store_products').empty();
                // $('#store_products').html(res.view);
                // localstorage_checkeds();
                // var pageUrl = '?page=' + res.store_basket.current_page;
                // window.history.pushState('/singlestore', '', pageUrl);

            } else {
                // localStorage.setItem('page_basket', page - 1);
                // location.reload();
            }

        }
    })

}

// end send checkeds product


// local storage add checkeds
function localstorage_checkeds(checked_basket) {
    // alert(checked_basket)
    if (localStorage.hasOwnProperty("store_id") && localStorage.hasOwnProperty("order_checked")) {

        $('.select_basket_product').each(function () {

            for (let i = 0; i < localStorage.getItem('order_checked').length; i++) {
                if (localStorage.getItem('order_checked')[i] == $(this).val() && localStorage.getItem('store_id') == $(this).data('store-id')) {
                    // console.log(localStorage.getItem('order_checked')[i])
                    // alert($(this).data('store-id'))
                    $(this).prop('checked', true);
                }
            }

        })
        if (checked_basket.length > 0) {
            selected_basket_products(checked_basket, $('#checked_basket_url').val(), localStorage.getItem('store_id'))
        }

    }
}

// end local storage add checkeds


$checked_basket = [];

$(document).ready(function () {
    // alert();

    let is_localStorage = basket_store_storage($('#current_route').val(), $('.basket_site').attr('href'), $('input[name="basket_stores"]'));
    if (is_localStorage) {
        store_basket(localStorage.getItem('store_id'), localStorage.getItem('url'), localStorage.getItem('page_basket'));
    }
    $(document).on('input', '.select_basket_product', function () {

        if ($(this).is(':checked')) {

            // alert($(this).val());
            $checked_basket.push($(this).val());
        } else {
            if ($.inArray($(this).val(), $checked_basket) > -1) {
                $checked_basket.splice($.inArray($(this).val(), $checked_basket), 1);
            }

        }
        console.log($checked_basket);
        if ($checked_basket.length == 0) {
            // alert();
            window.localStorage.removeItem('order_checked');
        }
        else
        {
            localStorage.setItem('order_checked', JSON.stringify($checked_basket));
        }

        if ($checked_basket.length > 0 && localStorage.hasOwnProperty("store_id")) {

            selected_basket_products($checked_basket, $('#checked_basket_url').val(), localStorage.getItem('store_id'))
        } else {
            if (localStorage.hasOwnProperty("store_id") && localStorage.hasOwnProperty('url') && localStorage.hasOwnProperty('page_basket')) {
                store_basket(localStorage.getItem('store_id'), localStorage.getItem('url'), localStorage.getItem('page_basket'))
            } else {
                window.localStorage.removeItem('store_id');
                window.localStorage.removeItem('url');
                window.localStorage.removeItem('page_basket');
                window.localStorage.removeItem('order_checked');
                location.reload();
            }

        }

    })

    $('.current_options').on('change', function () {

        if ($(this).val() != 0) {
            let cur_count_option = $(this).find("option:selected").data('cur-count');
            $('#current_count').val(cur_count_option);
            $('.curr_count_visible').html("Only" + " " + cur_count_option + " " + "available");
        } else {

            $('#current_count').val("");
            $('.curr_count_visible').html("");
        }

    })
    $('.add_basket').on('click', function (e) {

        let element = $(this);
        let great_parent = $(this).parents('.product-info');
        console.log(great_parent);
        let option_id = null;
        if (great_parent.length > 0) {
            size = great_parent.find('.current_size').val();
            option_id = great_parent.find('.current_options').val();
            // alert(option_id)

        }
        let url = $('#add_basket_route').val();
        console.log($(this))
        if ($(this).data('product-id') == '' || $(this).data('product-id') == undefined) {
            // alert($(this).data('product-id'))
            $('#sign-up').trigger('click');
        } else {

            let product_id = $(this).data('product-id');
            let quantity = $(this).parent().prev().find('.adding_basket_quantity').val();
            if (quantity == '' || quantity == undefined) {
                quantity = 1;
                $('.current_invalid_count').empty();
                add_basket(product_id, option_id, quantity, url, element)
            } else {
                if (quantity > $('#current_count').val() || quantity < 1) {
                    $('.current_invalid_count').html('The specified quantity is not available');
                    setTimeout(function () {
                        $('.current_invalid_count').empty()
                    }, 2500);

                } else {
                    $('.current_invalid_count').empty();
                    add_basket(product_id, option_id, quantity, url, element)

                }


            }

        }
    })

    $('.in_store_basket').on('input', function () {

        let store_id = $(this).val();
        let url = $('#single_store_basket').val();
        let page = 1;
        localStorage.setItem('store_id', store_id);
        localStorage.setItem('url', url);
        localStorage.setItem('page_basket', page);
        $checked_basket = [];
        window.localStorage.removeItem('order_checked');
        // window.history.pushState('', '',url);
        store_basket(store_id, url, page);

    })
    $(document).on('click', '.page-link-basket', function (event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        let url = $('#single_store_basket').val();
        let store_id = $('input[name="basket_stores"]:checked').val();
        localStorage.setItem('page_basket', page);
        store_basket(store_id, url, page);

    });

    $(document).on('click', '.plus_basket', function () {
        let quantity = $(this).parent().find('.quantity').html() * 1
        quantity++
        $(this).parent().find('.quantity').html(quantity)
        $('#product_count_basket').val(quantity);

    })
    $(document).on('click', '.minus_basket', function () {

        let quantity = $(this).parent().find('.quantity').html() * 1
        quantity--
        if (quantity < 1) {
            quantity = 1
        }
        $(this).parent().find('.quantity').html(quantity)
        $('#product_count_basket').val(quantity);

    })
    // edit delete basket

    $(document).on('click', '.edit_basket, .delete_basket', function () {

        let basket_id = $(this).val();
        let option_id = $(this).data('option-id');
        let url = $(this).data('route-id');
        let elem = $(this);
        if ($(this).hasClass('edit_basket')) {

            let quantity = $('#product_count_basket').val();
            $.ajax({
                method: 'post',
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    basket_id: basket_id,
                    option_id: option_id,
                    quantity: quantity,
                },
                dataType: 'json',
                success: function (res) {
                    console.log(res);
                    $('#basket_action_message').empty();
                    if (res.edit_basket_error) {
                        $('#basket_action_message').removeClass('text-success');
                        $('#basket_action_message').addClass('text-danger');
                        $('#basket_action_message').html(res.edit_basket_error);
                        elem.closest("td").parent().find('.quantity').text(res.quantity);

                    }
                    if (res.success_edit) {
                        $('#basket_action_message').removeClass('text-danger');
                        $('#basket_action_message').addClass('text-success');
                        $('#basket_action_message').html(res.success_edit);
                        // console.log($('#product_count_basket').parent().parent().find('.total_price'))
                        // $('#product_count_basket').parent().find('.total_price').html('')
                        // $('#product_count_basket').parent().find('.total_price').html(res.total_price);
                        // elem.closest("td").parent().find('.total_price').html(res.total_price);
                        // location.reload();
                        setTimeout(function () {
                            store_basket(localStorage.getItem('store_id'), localStorage.getItem('url'), localStorage.getItem('page_basket'));

                        }, 1500);
                    }
                    setTimeout(function () {
                        $('#basket_action_message').empty();
                    }, 2500);
                }
            })

        } else {
            $.ajax({
                method: 'post',
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    basket_id: basket_id,

                },
                dataType: 'json',
                success: function (res) {
                    console.log(res);
                    $('#basket_action_message').empty();
                    if (res.success_delete) {
                        $('#basket_action_message').removeClass('text-danger');
                        $('#basket_action_message').addClass('text-success');
                        $('#basket_action_message').html(res.success_delete);

                        setTimeout(function () {
                            store_basket(localStorage.getItem('store_id'), localStorage.getItem('url'), localStorage.getItem('page_basket'));

                        }, 1500);

                    }
                    if (res.error_delete) {
                        $('#basket_action_message').removeClass('text-success');
                        $('#basket_action_message').addClass('text-danger');
                        $('#basket_action_message').html(res.error_delete);
                    }
                    setTimeout(function () {
                        $('#basket_action_message').empty();

                    }, 2500);
                }
            })

        }


    });


    // end edit delete basket

    function store_basket(store_id, url, page) {
        // let result = [];
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                store_id: store_id,
                page: page,
            },
            dataType: 'json',
            success: function (res) {

                if (res.view) {

                    $('#store_products').empty();
                    $('#store_products').html(res.view);
                    if (localStorage.hasOwnProperty("order_checked")) {
                        localstorage_checkeds(JSON.parse(localStorage.getItem('order_checked')));
                    }
                    // var pageUrl = '?page=' + res.store_basket.current_page;
                    // window.history.pushState('/singlestore', '', pageUrl);

                } else {
                    localStorage.setItem('page_basket', page - 1);
                    location.reload();
                }

            }
        })

    }

    function add_basket(product_id, option_id, quantity, url, element) {
        // alert(url);
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                product_id: product_id,
                option_id: option_id,
                quantity: quantity,

            },
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if (res.basket_error) {
                    console.log(element)
                    $('.current_invalid_count').empty();
                    $('.current_invalid_count').removeClass('text-success');
                    $('.current_invalid_count').addClass('text-danger');
                    $('.current_invalid_count').html(res.basket_error);
                    setTimeout(function () {
                        $('.current_invalid_count').empty()
                    }, 2500);
                    if (element.hasClass('add-cart')) {

                        element.next().show();
                        element.next().empty();
                        element.next().removeClass('text-success');
                        element.next().addClass('text-danger');
                        element.next().text(res.basket_error);
                        console.log(element.next())
                        element.next().css({"position": "absolute", "bottom": "-8%", "left": "11%"});

                        setTimeout(function () {
                            element.next().empty();
                            element.next().hide();
                        }, 2500);

                    }

                }
                if (res.basket) {
                    $('.current_invalid_count').empty();
                    $('.current_invalid_count').removeClass('text-danger');
                    $('.current_invalid_count').addClass('text-success');
                    $('.current_invalid_count').html(res.basket);
                    setTimeout(function () {
                        $('.current_invalid_count').empty()
                    }, 2500);
                    if (element.hasClass('add-cart')) {

                        element.next().show();
                        element.next().empty();
                        element.next().removeClass('text-danger');
                        element.next().addClass('text-success');
                        element.next().text(res.basket);
                        element.next().css({"position": "absolute", "bottom": "-8%", "left": "11%"});

                        setTimeout(function () {
                            element.next().empty();
                            element.next().hide();
                        }, 2500);
                    }
                    $('.basket_count').empty();
                    $('.basket_count').html(res.basket_count);

                }

            }
        })

    }


//    Orders functional
function in_order(url,store_id,checked_product)
{
    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            store_id: store_id,
            checkeds: checked_product,
        },
        dataType: 'json',
        success: function (res) {

            console.log(res);


        }
    })

}
$(document).on('click','.p-checkout',function (){

    let store_id = $(this).data('current-store');
    let url = $('#in_order_route').val();
    let checked_product = [];
    if (localStorage.hasOwnProperty("order_checked"))
    {
        checked_product = JSON.parse(localStorage.getItem('order_checked'));
    }

    in_order(url,store_id,checked_product);

})

//    End orders functional
})

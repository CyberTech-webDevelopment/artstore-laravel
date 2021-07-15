$(document).ready(function () {

    $('.add_basket').on('click', function (e) {

        let element = $(this);
        let great_parent = $(this).parents('.product-info');
        console.log(great_parent);
        let size = null;
        let material = null;
        let color = null;
        if (great_parent.length > 0) {
            size = great_parent.find('.current_size').val();
            material = great_parent.find('.current_material').val();
            color = great_parent.find('.current_color').val();

        }
        let url = $('#add_basket_route').val();
        if ($(this).data('product-id') == '' || $(this).data('product-id') == undefined) {

            $('#sign-up').trigger('click');
        } else {

            let product_id = $(this).data('product-id');
            let quantity = $(this).parent().prev().find('.adding_basket_quantity').val();
            if (quantity == '' || quantity == undefined) {
                quantity = 1;
                $('.current_invalid_count').empty();
                add_basket(product_id, quantity, size, material, color, url, element)
            } else {
                if (quantity > $('#current_count').val() || quantity < 1) {
                    $('.current_invalid_count').html('The specified quantity is not available');

                } else {
                    $('.current_invalid_count').empty();
                    add_basket(product_id, quantity, size, material, color, url, element)

                }


            }

        }
    })

    $('.in_store_basket').on('input', function () {

        let store_id = $(this).val();
        let url = $('#single_store_basket').val();
        let page = 1;
        // window.history.pushState('', '',url);
        store_basket(store_id, url, page);

    })
    $(document).on('click', '.page-link-basket', function (event) {
        event.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        let url = $('#single_store_basket').val();
        let store_id = $('input[name="basket_stores"]:checked').val()
        store_basket(store_id, url, page);

    });

    function store_basket(store_id, url, page) {
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
                console.log(res);
                if (res.view) {
                    // alert();
                    $('#store_products').empty();
                    $('#store_products').html(res.view);
                    // var pageUrl = '?page=' + res.store_basket.current_page;
                    // window.history.pushState('/singlestore', '', pageUrl);

                }

            }
        })

    }

    function add_basket(product_id, quantity, size, material, color, url, element) {
        // alert(url);
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                product_id: product_id,
                quantity: quantity,
                size: size,
                material: material,
                color: color,
            },
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if (res.basket_error) {
                    console.log(element)
                    $('.current_invalid_count').empty();
                    $('.current_invalid_count').html(res.basket_error);
                    if (element.hasClass('add-cart')) {
                        element.next().empty();
                        element.next().text(res.basket_error);


                    }

                }
                if (res.basket) {
                    $('.current_invalid_count').empty();
                    $('.current_invalid_count').removeClass('text-danger');
                    $('.current_invalid_count').addClass('text-success');
                    $('.current_invalid_count').html(res.basket);
                    if (element.hasClass('add-cart')) {
                        element.next().empty();
                        element.next().removeClass('text-danger');
                        element.next().addClass('text-success');
                        element.next().text(res.basket);
                    }
                    $('.basket_count').empty();
                    $('.basket_count').html(res.basket_count);

                }

            }
        })

    }
})

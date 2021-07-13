$(document).ready(function () {

    $('.add_basket').on('click', function (e) {

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
                add_basket(product_id, quantity, size, material, color, url)
            } else {
                if (quantity > $('#current_count').val() || quantity < 1) {
                    $('.current_invalid_count').html('The specified quantity is not available');


                } else {
                    $('.current_invalid_count').empty();
                    add_basket(product_id, quantity, size, material, color, url)

                }


            }
            // alert(quantity)


        }
    })

    function add_basket(product_id, quantity, size, material, color, url) {
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

            }
        })

    }
})

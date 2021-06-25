$(document).ready(function () {

  $('.active_variant').on('click',function(){

      let product_id = $(this).data('productid');
      $('#'+product_id).find('.active_variant').toggleClass('active-product');
      $('#'+product_id).find('.active_variant').toggleClass('inactive-product');
      $('.active_variant').removeAttr("name");
      $(this).attr('name','active');

  })

  $('.plus_short').click(function () {
    let prod_id = $(this).attr('data-prodid');
    let tr_elem = $('#product_'+prod_id);
console.log(prod_id);
    let quantity = $(this).parent().find('.quantity_short_edit').html() * 1
    quantity++
    $(this).parent().find('.quantity_short_edit').html(quantity)
    tr_elem.find($('.product_count_short_edit')).val(quantity);

})
$('.minus_short').click(function () {
    let prod_id = $(this).attr('data-prodid');
    let tr_elem = $('#product_'+prod_id);
    let quantity = $(this).parent().find('.quantity_short_edit').html() * 1
    quantity--
    if (quantity < 1) {
        quantity = 1
    }
    $(this).parent().find('.quantity_short_edit').html(quantity)
    tr_elem.find($('.product_count_short_edit')).val(quantity);

})


$('.percent_short').on('input', function () {
    $price = $('.price_short').val();
    $percent = $(this).val();
    if ($price != '') {
        $sale_percent = ($price * $percent) / 100;
        $sale_price = $price - $sale_percent;
        $(this).parent().parent().parent().css('margin-bottom','-23px')
        $('.prices_cost_short').text($sale_price);
        if ($sale_price < 0 || isNaN($sale_price)) {

            $('.prices_cost_short').text('');
            $(this).val('');
            $(this).parent().parent().parent().css('margin-bottom','0px')

        }

    }
    if ($percent == "") {
        $('.prices_cost_short').empty();
        $(this).parent().parent().parent().css('margin-bottom','0px')
    }

})
$('.price_short').on('input', function () {
    $price = $(this).val();
    $percent = $('.percent_short').val();
    if ($percent != '') {
        $sale_percent = ($price * $percent) / 100;
        $sale_price = $price - $sale_percent;
        $sale_price = parseInt($sale_price);
        $('.prices_cost_short').text($sale_price);
        $('.percent').parent().parent().parent().css('margin-bottom','-23px');
        if ($sale_price < 0 || isNaN($sale_price)) {
            $('.prices_cost_short').text('');
            $(this).val('');
            $('.percent_short').parent().parent().parent().css('margin-bottom','0px');
        }
    }
    if ($price == "") {

        $('.prices_cost_short').empty();
        $('.percent_short').parent().parent().parent().css('margin-bottom','0px');
    }

})

$('.save-product').on('click',function(){

    $('#current_product').val($(this).val());
    // let product_id = $('#current_product').val();
    // let tr_elem = $('#product_'+product_id);
    // let quantity = tr_elem.find($('.product_count_short_edit')).val();
    // alert(quantity)


})
$('.save_confirm').on('click',function(){

    let product_id = $('#current_product').val();
    let tr_elem = $('#product_'+product_id);
    let quantity = tr_elem.find($('.product_count_short_edit')).val();
    let status = tr_elem.find($("[name='active']")).val();
    let price = tr_elem.find($('.price_short')).val();
    let percent = tr_elem.find($('.percent_short')).val();
    let url = $('#short_edit_url').val();
    console.log(quantity,status,price,percent);

    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
                product_id: product_id,
                quantity:quantity,
                status:status,
                price:price,
                percent:percent

              },
        dataType: 'json',
        success: function (res) {

            console.log(res);
            if (res.product_error) {

               $('#close_question_save').trigger('click');
               $('.product_errors').html(res.product_error);

            }
            if (res == "ok") {

                location.reload();

            }

        }
    })


})


})

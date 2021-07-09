$(document).ready(function () {

    $('.testimonial-item_cur').on('click',function (){

        $cur_image = $(this).find('img').attr('src');
        $('.product-image-div').find('.head_product').attr('src');
        $('.product-image-div').find('.head_product').attr('src',$cur_image);
    })

})

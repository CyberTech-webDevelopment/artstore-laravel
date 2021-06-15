// -------------drag drop image-----------------------
var image
let array_images = []
let c = 0;

$(".input-file-trigger").on('dragenter', function (e) {
    e.preventDefault();
    $(this).css('background', '#BBD5B8');
});

$(".input-file-trigger").on('dragover', function (e) {
    e.preventDefault();
});

$(".input-file-trigger").on('drop', function (e) {
    $(this).css('background', '#D8F9D3');
    e.preventDefault()
    var file = e.originalEvent.dataTransfer.files[0];

    readURL(file);
});

$('.plus_p').click(function () {
    let quantity = $(this).parent().find('.quantity').html() * 1
    quantity++
    $(this).parent().find('.quantity').html(quantity)
    $('#product_count').val(quantity);

})
$('.minus_p').click(function () {
    let quantity = $(this).parent().find('.quantity').html() * 1
    quantity--
    if (quantity < 1) {
        quantity = 1
    }
    $(this).parent().find('.quantity').html(quantity)
    $('#product_count').val(quantity);

})

function readURL(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
        var image = new Image();
        image.src = e.target.result;

        image.onload = function () {
            var height = this.height;
            var width = this.width;
            var data = e.target.result;

            if (height > 400 || width > 400) {
                $('.canvas-cont').removeClass('hide')
                $('.canvas-cont').addClass('d-flex')

                Edit(data, height, width, image)
            } else {
                let unique_image = true;
                if (array_images.length < 3) {
                    for (let i = 0; i < array_images.length; ++i) {
                        // console.log(array_images[i])
                        if (array_images[i] == e.target.result)
                        {
                            unique_image = false;
                            break;
                        }
                    }
                    console.log(unique_image)
                    if (unique_image == true)
                    {
                        c++;
                        $('#image-cont').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
                        $src_icon = $('.delete-image').find('img').attr('src');
                        $('#image-cont').append('<div class="drop-image" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')
                        array_images.push(e.target.result)
                        $('#product_form').append('<input type="hidden" class="img_inp" data-inp-id="' + c + '"  name="files[]" value="' + e.target.result + '">');

                    }


                    // console.log(c);
                }
                if (array_images.length == 3) {
                    $('.uploade-image').css('display', 'none')
                    $('.uploade-image').removeClass('d-flex')
                }
            }
        }
    }
    reader.readAsDataURL(file);
}

var canvas = new fabric.Canvas('canvas');
var can = document.getElementById('canvas')

function Edit(data, height, width, image) {
    var oImg
    fabric.Image.fromURL(data, function (img) {
        oImg = img.set({left: 0, top: 0, angle: 00}).scale(1);
        oImg.scaleToHeight(height);
        oImg.scaleToWidth(width);
        canvas.setActiveObject(oImg).renderAll();

        var dataURL = canvas.toDataURL({format: 'png',});
        quality: 0.8
    });
    canvas.setDimensions({width: 400, height: 400})

    canvas.on('mouse:wheel', function (opt) {
        var delta = opt.e.deltaY;
        var zoom = oImg.scaleX
        zoom *= 0.999 ** delta;
        if (zoom > 20) zoom = 20;
        if (zoom < 0.01) zoom = 0.01;

        oImg.scale(zoom);

        canvas.setBackgroundImage(oImg).renderAll();
        opt.e.preventDefault();
        opt.e.stopPropagation();
    })
    canvas.renderAll();
}

// ------------------CROP IMAGE----------------
$('#crop-image').click(function (e) {
    // alert()
    $('#fileupload').val('');
    e.preventDefault()
    let cropWidth = canvas.getWidth()
    let cropHeight = canvas.getHeight()
    let cropped = new Image();
    cropped.src = canvas.toDataURL({
        width: cropWidth,
        height: cropHeight
    });
    // console.log(cropped.src)

    if (array_images.length < 3) {
        c++;
        $('#image-cont').append('<div class="image-cont-item mx-1"><img src="' + cropped.src + '"></div>')
        array_images.push(cropped.src)
        $('#product_form').append('<input type="hidden" class="img_inp" data-inp-id="' + c + '" name="files[]" value="' + cropped.src + '">');

        $src_icon = $('.delete-image').find('img').attr('src');
        $('#image-cont').append('<div class="drop-image" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')
        $img_values = $("[name='files[]']")
        console.log(c);
        // console.log($img_values.length)
        $('.canvas-cont').addClass('hide')
        $('.canvas-cont').removeClass('d-flex')
    }
    if (array_images.length == 3) {
        $('.uploade-image').css('display', 'none')
        $('.uploade-image').removeClass('d-flex')
    }
    canvas.clear()
})

// ---------delete image-----------------------------
$('.delete-image').click(function () {
    console.log(array_images.length)
    $('#fileupload').val('');
    $('.canvas-cont').addClass('hide')
    $('.canvas-cont').removeClass('d-flex')
})


// -------------------browse image-----------------------------
$('#fileupload').on("input", function (e) {
    console.log(array_images)
    if (array_images.length < 3) {
        var file = e.target.files[0];
        readURL(file);
    }
});
$(document).on('click', '.drop-image', function () {
// alert()
    $('#fileupload').val('');
    $data_img_id = $(this).attr('data-img-id');

    // $('.img_inp').attr('data-inp-id',$data_img_id).remove();
    $("[data-inp-id='" + $data_img_id + "']").remove();
    array_images.pop();
    console.log(array_images.length)
    $img_values = $("[name='files[]']")
    // console.log($img_values.length);

    $(this).prev().remove();
//      console.log($(this).parent())
    $(this).remove();
    if ($('.uploade-image').css('display') == 'none') {
        $('.uploade-image').show();

    }


})

// -----------select categories--------------------------
$('#select-menu').change(function () {
    let select_menu_id = $(this).find("option:selected").attr('data-menu-id')
    let url = $('#sel_cat_route').val()
    $('#list_sub_menu').empty()
    $('#select_sub_category').empty()
    // let sel_id=$(this).attr('id')
    console.log(select_menu_id)
    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {menu_id: select_menu_id},
        dataType: 'json',
        success: function (res) {

            $lang_name_menu = "sub_menu_name_" + $('#cur_lang').val();

            $('#list_sub_menu').empty();

            for ($i = 0; $i < res.sub_menu.length; $i++) {

                $('#list_sub_menu').append(`<li class="small d-flex align-items-center" tabIndex="-1"><input value="` + res.sub_menu[$i].id + `"  data-menu-id="` + res.sub_menu[$i].id + `"
                    name="sub_menu[]" class="mr-1 sub_menu_check" type="checkbox"/>` + res.sub_menu[$i][$lang_name_menu] + `</li>`)

            }

            console.log(res)
        }
    })
})
$(document).on('click', '.sub_menu_check', function () {
    $checkeds = [];
    $('#select_sub_category').empty();
    let url = $('#sel_sub_cat_route').val()
    $('.sub_menu_check').each(function () {
        if ($(this).is(":checked")) {
            if ($checkeds.length < 4) {
                $checkeds.push($(this).attr('data-menu-id'))
                console.log($checkeds)

            }

        }
    })
    if ($checkeds.length < 4) {
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {sub_menu_ids: $checkeds},
            dataType: 'json',
            success: function (res) {
                $lang_name_cat = "name_category_" + $('#cur_lang').val();
                console.log(res.sub_cat)

                let options_text = '';
                $('#select_sub_category').empty();
                $('#select_sub_category').prepend('<option>Select Type</option>');
                for (let $i in res.sub_cat) {
                    // console.log($i)
                    options_text += "<optgroup label='" + $i + "'>"


                    for (let key in res.sub_cat[$i]) {
                        console.log(res.sub_cat[$i][key][$lang_name_cat])
                        options_text += "<option value='" + res.sub_cat[$i][key]['id'] + "'>" + res.sub_cat[$i][key][$lang_name_cat] + "</option>"
                    }
                    options_text += "</optgroup>"
                }
                $('#select_sub_category').append(options_text);


            }
        })

    }


})
$('#add-product-a').on('click', function () {

    $('.acount-bar-item').each(function () {

        $active_image = $(this).find('img');
        $active_image_src = $(this).find('img').attr('src');
        if ($active_image_src !== undefined) {
            $new_src = $active_image_src.split('-active');
            if ($new_src.length > 1) {
                console.log($new_src);
                $set_source = $new_src[0] + $new_src[1];
                console.log($set_source);
                $active_image.attr('src', $set_source);

            }

        }

        // console.log($new_src);


    })
})

// add product


$('#add-product').on('click', function (e) {
    e.preventDefault()
    let url = $('#add_product_url').val();
    var data = $('#product_form').serialize();

    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: data,
        dataType: 'json',
        cache: false,
        processData: false,
        async: false,
        success: function (res) {
            // console.log(res)
            if (res.product_error) {
                if (res.field) {

                    $m = [];
                    for (let i = 0; i < res.field.length; i++) {

                        if (i == (res.field.length - 1)) {
                            $m += $("[name='" + res.field[i] + "']").attr('placeholder');
                        } else {
                            $m += $("[name='" + res.field[i] + "']").attr('placeholder') + ',';
                        }

                    }
                    console.log(res.field)

                    $message = $m + " " + res.product_error
                    $('.product_errors').html($message);
                } else {
                    $('.product_errors').html(res.product_error);

                }


            }
            if (res == "ok") {

                // $('#add-product').attr('data-target','.product-successfully-aded');
                $('#close_add_model').trigger('click');
                $('#open_success_modal').trigger('click');
                // $('.product-successfully-aded').addClass('show');

            }

        }
    })

})
$('.percent').on('input', function () {
    $price = $('.price').val();
    $percent = $(this).val();
    if ($price != '') {
        $sale_percent = ($price * $percent) / 100;
        $sale_price = $price - $sale_percent;

        $('.prices_cost').text($sale_price);
        if ($sale_price < 0 || isNaN($sale_price)) {

            $('.prices_cost').text('');
            $(this).val('');

        }

    }
    if ($percent == "") {
        $('.prices_cost').empty();

    }

})
$('.price').on('input', function () {
    $price = $(this).val();
    $percent = $('.percent').val();
    if ($percent != '') {
        $sale_percent = ($price * $percent) / 100;
        $sale_price = $price - $sale_percent;
        $sale_price = parseInt($sale_price);
        $('.prices_cost').text($sale_price);
        if ($sale_price < 0 || isNaN($sale_price)) {
            $('.prices_cost').text('');
            $(this).val('');

        }
    }
    if ($price == "") {
        $('.prices_cost').empty();

    }

})


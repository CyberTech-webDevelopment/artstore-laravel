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

$('body').on('click','.plus_p',function () {
    let quantity = $(this).parent().find('.quantity').html() * 1
    quantity++
    $(this).parent().find('.quantity').html(quantity)
    $(this).parent().find('.product_count').val(quantity)
    // $('#product_count').val(quantity);

})
$('body').on('click','.minus_p',function () {
    let quantity = $(this).parent().find('.quantity').html() * 1
    quantity--
    if (quantity < 1) {
        quantity = 1
    }
    $(this).parent().find('.quantity').html(quantity)
    $(this).parent().find('.product_count').val(quantity)
    // $('#product_count').val(quantity);

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
                        if (array_images[i] == e.target.result) {
                            unique_image = false;
                            break;
                        }
                    }
                    console.log(unique_image)
                    if (unique_image == true) {
                        c++;
                        $('#image-cont').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
                        $src_icon = $('.delete-image').find('img').attr('src');
                        $('#image-cont').append('<div class="drop-image" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')

                        $('#image-cont').append('<div class="capital_image"><input type="radio" data-image-name="' + e.target.result + '" class="set_capital_img_add" name="capital_image"></div>')
                        array_images.push(e.target.result)
                        $('#product_form').append('<input type="hidden" class="img_inp" data-inp-id="' + c + '"  name="files[]" value="' + e.target.result + '">');

                        if ($("[name='files[]']").length == 1 && $("[name='files_capital[]']").length == 0) {
                            let image_hidden_val = $("[name='files[]']").val();
                            $("[name='files[]']").attr('name', 'files_capital[]');
                            $(`[data-image-name='${image_hidden_val}']`).prop('checked', true);

                        }
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
        $('#image-cont').append('<div class="capital_image"><input type="radio" data-image-name="' + cropped.src + '" class="set_capital_img_add" name="capital_image"></div>')

        $img_values = $("[name='files[]']")
        console.log(c);
        // console.log($img_values.length)
        $('.canvas-cont').addClass('hide')
        $('.canvas-cont').removeClass('d-flex')

        if ($("[name='files[]']").length == 1 && $("[name='files_capital[]']").length == 0) {
            let image_hidden_val = $("[name='files[]']").val();
            $("[name='files[]']").attr('name', 'files_capital[]');
            $(`[data-image-name='${image_hidden_val}']`).prop('checked', true);

        }
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

    // alert(array_images.length)
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
    $(this).next().remove();
//      console.log($(this).parent())
    $(this).remove();
    if ($('.uploade-image').css('display') == 'none') {
        $('.uploade-image').show();

    }
    if ($("[name='files[]']").length == 1 && $("[name='files_capital[]']").length == 0) {
        let image_hidden_val = $("[name='files[]']").val();
        $("[name='files[]']").attr('name', 'files_capital[]');
        $(`[data-image-name='${image_hidden_val}']`).prop('checked', true);

    }


})

// set capital image add

$(document).on('input', '.set_capital_img_add', function () {

    let capital_img = $(this).data('image-name');
    if ($(this).is(':checked')) {

        $("[name='files_capital[]']").attr('name', 'files[]')
        $("[name='files[]']").each(function () {

            if ($(this).val() == capital_img) {
                $(this).attr('name', 'files_capital[]')

            }


        })


    }


})

// -----------select categories--------------------------
$(document).on('change','.select-menu',function () {
    let select_menu_id = $(this).find("option:selected").attr('data-menu-id');
    let elem = $(this);
    elem.closest('.select-group-1').find('.list_sub_menu').empty();
    elem.closest('.select-group-1').find('.select_sub_category').empty();
    let url = $('#sel_cat_route').val()
    // $('#list_sub_menu').empty()
    // $('#select_sub_category').empty()
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

            elem.closest('.select-group-1').find('.list_sub_menu').empty();

            for ($i = 0; $i < res.sub_menu.length; $i++) {

                elem.closest('.select-group-1').find('.list_sub_menu').append(`<li class="small d-flex align-items-center" tabIndex="-1"><input value="` + res.sub_menu[$i].id + `"  data-menu-id="` + res.sub_menu[$i].id + `"
                    name="sub_menu[]" class="mr-1 sub_menu_check" type="checkbox"/>` + res.sub_menu[$i][$lang_name_menu] + `</li>`)

            }

        }
    })
})
$(document).on('click', '.sub_menu_check', function () {
    $checkeds = [];
    $is_request = true;
    let elem = $(this);
    // $('#select_sub_category').empty();
    elem.closest('.select-group-1').find('.select_sub_category').empty();
    let url = $('#sel_sub_cat_route').val()
    elem.closest('.select-group-1').find('.sub_menu_check').each(function () {
        if ($(this).is(":checked")) {
            if ($checkeds.length < 1) {
                $checkeds.push($(this).attr('data-menu-id'))


            } else {
                $is_request = false;
                // $('.sub_menu_check').prop('checked', false);
                elem.closest('.select-group-1').find('.sub_menu_check').prop('checked', false);
                elem.closest('.select-group-1').find('.select_sub_category').empty();
            }

        }
    })
    if ($is_request) {
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {sub_menu_ids: $checkeds},
            dataType: 'json',
            success: function (res) {
                $lang_name_cat = "name_category_" + $('#cur_lang').val();


                let options_text = '';
                elem.closest('.select-group-1').find('.select_sub_category').empty();
                elem.closest('.select-group-1').find('.select_sub_category').prepend('<option>Select Type</option>');
                for (let $i in res.sub_cat) {

                    options_text += "<optgroup label='" + $i + "'>"


                    for (let key in res.sub_cat[$i]) {
                        console.log(res.sub_cat[$i][key][$lang_name_cat])
                        options_text += "<option value='" + res.sub_cat[$i][key]['id'] + "'>" + res.sub_cat[$i][key][$lang_name_cat] + "</option>"
                    }
                    options_text += "</optgroup>"
                }
                elem.closest('.select-group-1').find('.select_sub_category').append(options_text);


            }
        })

    }


})
// the added options accordion custom logic
$('.dropdown-first-item').on('click',function (){

    $(this).next().toggleClass('hide')
})
$('body').on('click','.dropdown-first-item',function (e){
       // e.stopPropagation();
       // $(this).toggleClass('hide')
       // $(this).next().toggleClass('hide')
       if ($(this).next().hasClass('hide'))
       {
           $(this).next().removeClass('hide')
           $(this).next().css('display','block');
       }
       else
       {
           $(this).next().addClass('hide')
           $(this).next().css('display','none');

       }

})
$('.single_size_group').on('click', function () {

    if (!$(this).find('.sizes_content').hasClass('hide')) {
// alert()
        $('.sizes_content').each(function () {

            $(this).addClass('hide');
            $(this).css('display', 'none');
        })

    } else {
        $('.sizes_content').each(function () {

            $(this).addClass('hide');
            $(this).css('display', 'none');
        })
        $(this).find('.sizes_content').removeClass('hide');
        $(this).find('.dropdown-menu').css('display', 'block');

    }


})
$('body').on('click', '.single_size_group', function () {
// alert()
    if (!$(this).find('.sizes_content').hasClass('hide')) {

        $('.sizes_content').each(function () {

            $(this).addClass('hide');
            $(this).css('display', 'none');
        })

    } else {

        $('.sizes_content').each(function () {

            $(this).addClass('hide');
            $(this).css('display', 'none');
        })
        // alert()
        $(this).find('.sizes_content').removeClass('hide');
        $(this).find('.dropdown-menu').css('display', 'block');

    }


})

// end this

$(document).on('click', '.type_plus', function () {

    let select_type = $(this).prev().val();
    let url = $('#add_categories_section').val();
    if (select_type == "" || select_type == null)
    {

    }
    else
    {
       add_section(url,'types_container');

    }

})
function only_checked(parent_class,check_class,element)
{
    let parent_row = element.closest('.'+parent_class);
    let checked = parent_row.find('.'+check_class+':checked');
    if (checked.length > 1){
        $('.'+check_class).prop('checked',false);
    }
    element.prop('checked',true);

}

$(document).on('click','.size_check',function (){

    only_checked('select-group-3','size_check',$(this));

})
$(document).on('click','.material_check',function (){

    only_checked('select-group-3','material_check',$(this));
})
$(document).on('click','.color_check',function (){

    only_checked('select-group-3','color_check',$(this));
})
function select_current_options(element)
{

    let parent_row = element.closest('.select-group-3');
    let size = parent_row.find('.size_check:checked').val();
    let size_type = parent_row.find('.size_check:checked').parent().data('table-name');
    let color = parent_row.find('.color_check:checked').val();
    let material = parent_row.find('.material_check:checked').val();
    let material_type = parent_row.find('.material_check:checked').parent().data('table-name');
    let quantity = parent_row.find('.product_count').val();
    if (size != undefined || color != undefined || material != undefined)
    {
        let array_options = {
            'size' : size,
            'size_type' : size_type,
            'material' : material,
            'material_type' : material_type,
            'color' : color,
            'quantity':quantity,

        };
        console.log(array_options)
        // $('#product_form').append('<input type="hidden" class="options_inp" name="options[]" value="' + array_options + '">');
        return array_options;
    }
    else
    {

        return false;
    }
}
$(document).on('click','.options_plus',function (){

    let res = select_current_options($(this));

    if (res)
    {

        let url = $('#options_section_route').val();
        console.log(url);
       add_section(url,'options_container');
    }
    console.log(res);

})
function add_section(url,parent_class)
{
    $.ajax({
        method: 'get',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        cache: false,
        processData: false,
        async: false,
        success: function (res) {
            console.log(res)

            $('.'+parent_class).append(res.view);

        }
    })

}
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
    let option_data = [];
    let options_count = 0;
    $('.options_plus').each(function (){

        let current_options = select_current_options($(this));
        // $('#product_form').append('<input type="hidden" class="options_inp" name="options[]" value="' + current_options + '">');

        option_data.push(current_options);
    })
    console.log(option_data)
    let url = $('#add_product_url').val();


    // var all_properties = new FormData();
    // all_properties.append ('forma', data);
    // option_data.forEach((option_data, i) => all_properties.append(`options[${i}]`, option_data));

    for (let i = 0; i < option_data.length; i++) {
        for (let key of Object.keys(option_data[i])) {

            $('#product_form').append('<input type="hidden" class="options_inp" name="options['+i+']['+key+']"  value= "' + option_data[i][key] + '">');

        }
    }
    if (option_data[0] != false)
    {
        for (let i = 0; i < option_data.length; i++) {
            for (let key of Object.keys(option_data[i])) {
                if (key == 'quantity')
                {
                    options_count += parseInt(option_data[i][key]);

                }
            }
        }
        $("[name='count']").val(options_count)
        console.log($("[name='count']").val())
    }
    else
    {

        console.log($("[name='count']").val())
    }

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

                $('#close_add_model').trigger('click');
                $('#open_success_modal').trigger('click');

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
        $(this).parent().parent().parent().css('margin-bottom', '-23px')
        $('.prices_cost').text($sale_price);
        if ($sale_price < 0 || isNaN($sale_price)) {

            $('.prices_cost').text('');
            $(this).val('');
            $(this).parent().parent().parent().css('margin-bottom', '0px')

        }

    }
    if ($percent == "") {
        $('.prices_cost').empty();
        $(this).parent().parent().parent().css('margin-bottom', '0px')
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
        $('.percent').parent().parent().parent().css('margin-bottom', '-23px');
        if ($sale_price < 0 || isNaN($sale_price)) {
            $('.prices_cost').text('');
            $(this).val('');
            $('.percent').parent().parent().parent().css('margin-bottom', '0px');
        }
    }
    if ($price == "") {

        $('.prices_cost').empty();
        $('.percent').parent().parent().parent().css('margin-bottom', '0px');
    }

})

$('.go-to-product').on('click', function () {

    let redirect_url_go = $('#account_route').val()
    window.location.href = redirect_url_go;
})
$('.again-add-product').on('click', function (e) {

    e.preventDefault();
    $('#product_form')[0].reset();
    $('#image-cont').empty();
    $('.uploade-image').css('display', 'block');
    $('#product_form').find('#product_count').val(1);
    $('#product_form').find('.quantity').text(1);
    $('.list_sub_menu').empty();
    $('.select_sub_category').empty();

    var default_select = $('#selesct_default_lang').val();
    $('.select_sub_category').append("<option class='default_select' value=''></option>")
    $('.default_select').text(default_select);
    $('.types_container').empty();
    $('.type_plus').trigger('click');
    let url_type_section = $('#add_categories_section').val();
    add_type_section(url_type_section);
    // $('#product_count').val(1);

    $("[name='files[]']").each(function () {

        $(this).remove();

    })
    $("[name='files_capital[]']").remove();
    while (array_images.length > 0) {
        array_images.pop();
    }
    $('.product_errors').empty();
    console.log(array_images.length)

})




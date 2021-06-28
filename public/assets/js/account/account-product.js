$(document).ready(function () {
    // canvas and upload functional
    var image_edit_pr
    let array_images_edit_pr = []
    let array_has_images = []
    let array_capital_image = []

    let c = 0;

    $(document).on('dragenter', ".input-file-trigger", function (e) {
        e.preventDefault();
        $(this).css('background', '#BBD5B8');
    });

    $(document).on('dragover', ".input-file-trigger", function (e) {
        e.preventDefault();
    });

    $(document).on('drop', ".input-file-trigger", function (e) {
        $(this).css('background', '#D8F9D3');
        e.preventDefault()
        var file = e.originalEvent.dataTransfer.files[0];

        readURL(file);
    });

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
                    $('.canvas-cont_edit_pr').removeClass('hide')
                    $('.canvas-cont_edit_pr').addClass('d-flex')

                    Edit(data, height, width, image)
                } else {
                    let unique_image = true;
                    if (array_has_images.length < 3) {
                        for (let i = 0; i < array_images_edit_pr.length; ++i) {
                            // console.log(array_images[i])
                            if (array_images_edit_pr[i] == e.target.result) {
                                unique_image = false;
                                break;
                            }
                        }
                        console.log(unique_image)
                        if (unique_image == true) {
                            c++;
                            $('#image-cont_edit_pr').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
                            $src_icon = $('.delete-image').find('img').attr('src');
                            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + e.target.result + '" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')
                            array_images_edit_pr.push(e.target.result)
                            array_has_images.push(e.target.result)
                            $("[name='files_edit_pr[]']").each(function (){

                                $(this).remove();

                            })
                            $(array_has_images).each(function (index, value) {

                                $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');

                            });
                            console.log($("[name='files_edit_pr[]']").val());
                            // $('#editproduct_form').append('<input type="hidden" class="img_inp" data-inp-id="' + c + '"  name="files_edit_pr[]" value="' + e.target.result + '">');

                        }


                        // console.log(c);
                    }
                    if (array_has_images.length == 3) {
                        $('.uploade-image_edit_pr').css('display', 'none')
                        $('.uploade-image_edit_pr').removeClass('d-flex')
                        $('.modal-drag-photo_edit_pr').hide();
                    }
                }
            }
        }
        reader.readAsDataURL(file);
    }

    var canvas;
    var can;

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

    $(document).on('click', '#crop-image_edit_pr', function (e) {
        // alert()
        $('#fileupload_edit_pr').val('');
        e.preventDefault()
        let cropWidth = canvas.getWidth()
        let cropHeight = canvas.getHeight()
        let cropped = new Image();
        cropped.src = canvas.toDataURL({
            width: cropWidth,
            height: cropHeight
        });
        // console.log(cropped.src)

        if (array_has_images.length < 3) {
            c++;
            $('#image-cont_edit_pr').append('<div class="image-cont-item mx-1"><img src="' + cropped.src + '"></div>')
            array_images.push(cropped.src)
            array_has_images.push(cropped.src)
            $("[name='files_edit_pr[]']").each(function (){

                $(this).remove();

            })
            $(array_has_images).each(function (index, value) {

                $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');

            });
            // $('#editproduct_form').append('<input type="hidden" class="img_inp" data-inp-id="' + c + '" name="files_edit_pr[]" value="' + cropped.src + '">');
            console.log($("[name='files_edit_pr[]']").val());
            $src_icon = $('.delete-image_edit_pr').find('img').attr('src');
            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + cropped.src + '" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')

            console.log(c);
            // console.log($img_values.length)
            $('.canvas-cont_edit_pr').addClass('hide')
            $('.canvas-cont_edit_pr').removeClass('d-flex')
        }
        if (array_has_images.length == 3) {
            $('.uploade-image_edit_pr').css('display', 'none')
            $('.uploade-image_edit_pr').removeClass('d-flex')
            $('.modal-drag-photo_edit_pr').hide();
        }
        canvas.clear()
    })

// ---------delete image-----------------------------
    $(document).on('click', '.delete-image_edit_pr', function () {
        console.log(array_has_images.length)
        $('#fileupload_edit_pr').val('');
        $('.canvas-cont_edit_pr').addClass('hide')
        $('.canvas-cont_edit_pr').removeClass('d-flex')
    })

    $(document).on("input", '#fileupload_edit_pr', function (e) {
        alert(array_has_images.length);
        // alert(array_images_edit_pr.length)
        if (array_has_images.length < 3) {
            var file = e.target.files[0];
            readURL(file);
        }
    });

    $(document).on('click', '.drop-image_edit_pr', function () {
// alert()
//         alert(array_has_images.length);
        $droping_img_name = $(this).attr('data-image-name');
        $('#fileupload_edit_pr').val('');
        $("[name='files_edit_pr[]']").each(function (){

            $(this).remove();

        })
        // $("[name='files_edit_pr[]']").remove();
        $(array_has_images).each(function (index, value) {

            if (value == $droping_img_name) {
                // alert();
                array_has_images.splice(index, 1)

            } else {
                $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');


            }
        });

       console.log(array_has_images);
        $data_img_id = $(this).attr('data-img-id');


        // $('.img_inp').attr('data-inp-id',$data_img_id).remove();
        // if ($("[data-inp-id='" + $data_img_id + "']")) {
        //     $("[data-inp-id='" + $data_img_id + "']").remove();
        array_images_edit_pr.pop();

        // }


        $(this).prev().remove();

        $(this).remove();
        if ($('.uploade-image_edit_pr').css('display') == 'none') {
            // alert();
            $('.uploade-image_edit_pr').show();
            $('.modal-drag-photo_edit_pr').show();

        }


    })

    // end canvas functional

    $('.edit_more').on('click', function (e) {

        e.preventDefault();
        let url = $('#more_edit_url').val();
        let product_id = $(this).data('editedid');

        $.ajax({
            method: 'get',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                product_id: product_id,

            },
            dataType: 'json',
            success: function (res) {

                console.log(res);
                if (res.view) {
                    //
                    $('#edit_prod_modal').empty();
                    $('#edit_prod_modal').append(res.view);
                    $('.uploade-image_edit_pr').removeClass('d-flex')
                    $('.uploade-image_edit_pr').css('display', 'none');
                    $('.modal-drag-photo_edit_pr').hide();
                    for (let i = 0; i < res.product_img.length; i++) {
                        let j = parseInt(i + 1);
                        $('#image-cont_edit_pr').append('<div class="image-cont-item ml-2"><img src="/storage/product/' + res.product_img[i].image + '"></div>')
                        array_has_images.push(res.product_img[i].image)
                        if(res.product_img[i].main == 1){

                            array_capital_image.push(res.product_img[i].image)
                            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + res.product_img[i].image + '" data-img-id="' + j + '"><img src="/assets/icons/close.png"></div>')

                            $('#image-cont_edit_pr').append('<div class="capital_image_edit"><input type="radio" data-image-name="' + res.product_img[i].image + '" class="set_capital_img" name="capital_image" checked></div>')


                        }
                        else
                        {
                            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + res.product_img[i].image + '" data-img-id="' + j + '"><img src="/assets/icons/close.png"></div>')

                            $('#image-cont_edit_pr').append('<div class="capital_image_edit"><input type="radio" data-image-name="' + res.product_img[i].image + '" class="set_capital_img" name="capital_image"></div>')


                        }
                    }
                    $(array_has_images).each(function (index, value) {
                         if(value == array_capital_image[0]){

                            $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_capital[]" value="' + value + '">');

                         }
                         else
                         {
                            $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');


                         }

                    });
                    $('#open_edit_modal').trigger('click');
                    $('#edit-product-modal').addClass('show');

                    canvas = new fabric.Canvas('canvas_edit_pr');
                    can = document.getElementById('canvas_edit_pr')


                }


            }
        })


    })


    // set capital image
    //sharunakel
    $(document).on('input','.set_capital_img',function(){


         if($(this).is(':checked'))
         {
             let seting_capital_img_name = $(this).data('image-name')
             array_capital_image.pop();
             array_capital_image.push(seting_capital_img_name)
             $(array_has_images).each(function (index, value) {

                // array_capital_image.push()

            });
           console.log(seting_capital_img_name)
           console.log(array_has_images);
           console.log(array_capital_image);
         }



    })

    $(document).on('change','#select-menu',function () {
        // alert()
        let select_menu_id = $(this).find("option:selected").attr('data-menu-id')
        let url = $('#sel_cat_route_edit').val()
        $('#list_sub_menu_edit').empty()
        $('#select_sub_category_edit').empty()
        // let sel_id=$(this).attr('id')
        console.log(select_menu_id)
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {menu_id: select_menu_id},
            dataType: 'json',
            success: function (res) {

                $lang_name_menu = "sub_menu_name_" + $('#cur_lang_edit').val();

                $('#list_sub_menu_edit').empty();

                for ($i = 0; $i < res.sub_menu.length; $i++) {

                    $('#list_sub_menu_edit').append(`<li class="small d-flex align-items-center" tabIndex="-1"><input value="` + res.sub_menu[$i].id + `"  data-menu-id="` + res.sub_menu[$i].id + `"
                        name="sub_menu[]" class="mr-1 sub_menu_check_edit" type="checkbox"/>` + res.sub_menu[$i][$lang_name_menu] + `</li>`)

                }

                console.log(res)
            }
        })
    })


    $(document).on('click', '.sub_menu_check_edit', function () {
        $checkeds = [];
        $('#select_sub_category_edit').empty();
        let url = $('#sel_sub_cat_route_edit').val()
        $('.sub_menu_check_edit').each(function () {
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
                    $lang_name_cat = "name_category_" + $('#cur_lang_edit').val();
                    console.log(res.sub_cat)

                    let options_text = '';
                    $('#select_sub_category_edit').empty();
                    $('#select_sub_category_edit').prepend('<option>Select Type</option>');
                    for (let $i in res.sub_cat) {
                        // console.log($i)
                        options_text += "<optgroup label='" + $i + "'>"


                        for (let key in res.sub_cat[$i]) {
                            console.log(res.sub_cat[$i][key][$lang_name_cat])
                            options_text += "<option value='" + res.sub_cat[$i][key]['id'] + "'>" + res.sub_cat[$i][key][$lang_name_cat] + "</option>"
                        }
                        options_text += "</optgroup>"
                    }
                    $('#select_sub_category_edit').append(options_text);


                }
            })

        }


    })

    $(document).on('click','#edit-product', function (e) {

        e.preventDefault()
        let url = $('#more_post_edit').val();
        var data = $('#editproduct_form').serialize();

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
                console.log(res)
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

    $(document).on('click','#size_all_content_edit',function(){


      $('.dropdown-menu_edit').toggleClass('hide');

    })
    $(document).on('click','.single_size_group_size',function(){

        if(!$(this).find('.sizes_content').hasClass('hide'))
        {

            $('.sizes_content').each(function(){

                $(this).addClass('hide');
                $(this).css('display','none');
             })

        }
        else
        {
            $('.sizes_content').each(function(){

                $(this).addClass('hide');
                $(this).css('display','none');
             })
            $(this).find('.sizes_content').removeClass('hide');
            $(this).find('.dropdown-menu').css('display','block');

        }


    })

    $(document).on('click','#size_all_content_edit_material',function(){


        $('.dropdown-menu_edit_material').toggleClass('hide');

    })
    $(document).on('click','.single_size_group_material',function(){

        if(!$(this).find('.sizes_content').hasClass('hide'))
        {

            $('.sizes_content').each(function(){

                $(this).addClass('hide');
                $(this).css('display','none');
             })

        }
        else
        {
            $('.sizes_content').each(function(){

                $(this).addClass('hide');
                $(this).css('display','none');
             })
            $(this).find('.sizes_content').removeClass('hide');
            $(this).find('.dropdown-menu').css('display','block');

        }


    })

    $(document).on('input','.percent_ed',function () {
        $price = $('.price_ed').val();
        $percent = $(this).val();
        if ($price != '') {
            $sale_percent = ($price * $percent) / 100;
            $sale_price = $price - $sale_percent;
            $(this).parent().parent().parent().css('margin-bottom','-23px')
            $('.prices_cost_edit').text($sale_price);
            if ($sale_price < 0 || isNaN($sale_price)) {

                $('.prices_cost_edit').text('');
                $(this).val('');
                $(this).parent().parent().parent().css('margin-bottom','0px')

            }

        }
        if ($percent == "") {
            $('.prices_cost_edit').empty();
            $(this).parent().parent().parent().css('margin-bottom','0px')
        }

    })
    $(document).on('input','.price_ed', function () {
        $price = $(this).val();
        $percent = $('.percent_ed').val();
        if ($percent != '') {
            $sale_percent = ($price * $percent) / 100;
            $sale_price = $price - $sale_percent;
            $sale_price = parseInt($sale_price);
            $('.prices_cost_edit').text($sale_price);
            $('.percent_ed').parent().parent().parent().css('margin-bottom','-23px');
            if ($sale_price < 0 || isNaN($sale_price)) {
                $('.prices_cost_edit').text('');
                $(this).val('');
                $('.percent_ed').parent().parent().parent().css('margin-bottom','0px');
            }
        }
        if ($price == "") {

            $('.prices_cost_edit').empty();
            $('.percent_ed').parent().parent().parent().css('margin-bottom','0px');
        }

    })

    $(document).on('click','.plus_edit',function () {
        let quantity = $(this).parent().find('.quantity').html() * 1
        quantity++
        $(this).parent().find('.quantity').html(quantity)
        $('#product_count_edit').val(quantity);

    })
    $(document).on('click','.minus_edit',function () {
        // alert()
        let quantity = $(this).parent().find('.quantity').html() * 1
        quantity--
        if (quantity < 1) {
            quantity = 1
        }
        $(this).parent().find('.quantity').html(quantity)
        $('#product_count_edit').val(quantity);

    })

    $('.active_variant').on('click', function () {

        if (!$(this).hasClass('active-product')) {

            let product_id = $(this).data('productid');
            $('#' + product_id).find('.active_variant').toggleClass('active-product');
            $('#' + product_id).find('.active_variant').toggleClass('inactive-product');
            $('.active_variant').removeAttr("name");
            $(this).attr('name', 'active');

        }


    })

    $('.plus_short').click(function () {
        let prod_id = $(this).attr('data-prodid');
        let tr_elem = $('#product_' + prod_id);
        console.log(prod_id);
        let quantity = $(this).parent().find('.quantity_short_edit').html() * 1
        quantity++
        $(this).parent().find('.quantity_short_edit').html(quantity)
        tr_elem.find($('.product_count_short_edit')).val(quantity);

    })
    $('.minus_short').click(function () {
        let prod_id = $(this).attr('data-prodid');
        let tr_elem = $('#product_' + prod_id);
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
            $(this).parent().parent().parent().css('margin-bottom', '-23px')
            $('.prices_cost_short').text($sale_price);
            if ($sale_price < 0 || isNaN($sale_price)) {

                $('.prices_cost_short').text('');
                $(this).val('');
                $(this).parent().parent().parent().css('margin-bottom', '0px')

            }

        }
        if ($percent == "") {
            $('.prices_cost_short').empty();
            $(this).parent().parent().parent().css('margin-bottom', '0px')
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
            $('.percent').parent().parent().parent().css('margin-bottom', '-23px');
            if ($sale_price < 0 || isNaN($sale_price)) {
                $('.prices_cost_short').text('');
                $(this).val('');
                $('.percent_short').parent().parent().parent().css('margin-bottom', '0px');
            }
        }
        if ($price == "") {

            $('.prices_cost_short').empty();
            $('.percent_short').parent().parent().parent().css('margin-bottom', '0px');
        }

    })

    $('.save-product').on('click', function () {

        $('#current_product').val($(this).val());

    })
    $('.save_confirm').on('click', function () {

        let product_id = $('#current_product').val();
        let tr_elem = $('#product_' + product_id);
        let quantity = tr_elem.find($('.product_count_short_edit')).val();
        let status = tr_elem.find($("[name='active']")).val();
        let price = tr_elem.find($('.price_short')).val();
        let percent = tr_elem.find($('.percent_short')).val();
        let url = $('#short_edit_url').val();
        console.log(quantity, status, price, percent);

        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                product_id: product_id,
                quantity: quantity,
                status: status,
                price: price,
                percent: percent

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


    $(document).on('click', '#close_add_model_edit', function () {

        $("#edit-product-modal").removeClass("show");
        $('body').removeClass("modal-open");
        $('.modal-backdrop ').remove();

    })

})

$(document).ready(function () {
    // canvas and upload functional
    var image_edit_pr
    let array_images_edit_pr = []
    let array_has_images = []
    let array_capital_image = []
    let array_deleting_checked = [];

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
                            $('#image-cont_edit_pr').append('<div class="capital_image_edit"><input type="radio" data-image-name="' + e.target.result + '" class="set_capital_img" name="capital_image"></div>')

                            array_images_edit_pr.push(e.target.result)
                            array_has_images.push(e.target.result)
                            let capital_image = $("[name='files_edit_capital[]']").val()
                            $("[name='files_edit_pr[]']").each(function () {

                                $(this).remove();

                            })
                            console.log(capital_image);
                            $(array_has_images).each(function (index, value) {

                                if (value != capital_image) {

                                    $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');

                                }

                            });
                            console.log($("[name='files_edit_pr[]']").val());

                        }

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
            array_images_edit_pr.push(cropped.src)
            array_has_images.push(cropped.src)
            let capital_image = $("[name='files_edit_capital[]']").val()
            $("[name='files_edit_pr[]']").each(function () {
                console.log('jnjelll')
                $(this).remove();

            })
            $(array_has_images).each(function (index, value) {


                if (value != capital_image) {

                    $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');

                }
            });

            $src_icon = $('.delete-image_edit_pr').find('img').attr('src');
            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + cropped.src + '" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')
            $('#image-cont_edit_pr').append('<div class="capital_image_edit"><input type="radio" data-image-name="' + cropped.src + '" class="set_capital_img" name="capital_image"></div>')

            console.log(c);
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

        if (array_has_images.length < 3) {
            var file = e.target.files[0];
            readURL(file);
        }
    });

    function clear_hiddens() {
        $("[name='files_edit_pr[]']").each(function () {

            $(this).remove();

        })
        $("[name='files_edit_capital[]']").each(function () {

            $(this).remove();

        })

    }

    $(document).on('click', '.drop-image_edit_pr', function () {


        $droping_img_name = $(this).attr('data-image-name');
        $('#fileupload_edit_pr').val('');
        console.log(array_capital_image)
        clear_hiddens();

        $(array_has_images).each(function (index, value) {

            if (value == $droping_img_name) {
                // alert();
                array_has_images.splice(index, 1)

            } else {


                if (value == array_capital_image[0]) {
                    $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_capital[]" value="' + value + '">');


                } else {

                    $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');

                }

            }

        });
        if ($("[name='files_edit_pr[]']").length == 1 && $("[name='files_edit_capital[]']").length == 0) {
            let image_hidden_val = $("[name='files_edit_pr[]']").val();
            clear_hiddens();

            $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_capital[]" value="' + image_hidden_val + '">');
            console.log(image_hidden_val);
            $(`[data-image-name='${image_hidden_val}']`).prop('checked', true);

        }

        $data_img_id = $(this).attr('data-img-id');

        array_images_edit_pr.pop();


        $(this).prev().remove();
        $(this).next().remove();

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

                    while (array_has_images.length > 0) {
                        array_has_images.pop();
                    }
                    array_capital_image.pop();
                    for (let i = 0; i < res.product_img.length; i++) {
                        let j = parseInt(i + 1);
                        $('#image-cont_edit_pr').append('<div class="image-cont-item ml-2"><img src="/storage/product/' + res.product_img[i].image + '"></div>')

                        array_has_images.push(res.product_img[i].image)
                        if (res.product_img[i].main == 1) {

                            array_capital_image.push(res.product_img[i].image)
                            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + res.product_img[i].image + '" data-img-id="' + j + '"><img src="/assets/icons/close.png"></div>')

                            $('#image-cont_edit_pr').append('<div class="capital_image_edit"><input type="radio" data-image-name="' + res.product_img[i].image + '" class="set_capital_img" name="capital_image" checked></div>')


                        } else {
                            $('#image-cont_edit_pr').append('<div class="drop-image_edit_pr" data-image-name="' + res.product_img[i].image + '" data-img-id="' + j + '"><img src="/assets/icons/close.png"></div>')

                            $('#image-cont_edit_pr').append('<div class="capital_image_edit"><input type="radio" data-image-name="' + res.product_img[i].image + '" class="set_capital_img" name="capital_image"></div>')


                        }
                    }
                    $(array_has_images).each(function (index, value) {
                        if (value == array_capital_image[0]) {

                            $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_capital[]" value="' + value + '">');

                        } else {
                            $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');


                        }

                    });
                    $('#open_edit_modal').trigger('click');
                    $('#edit-product-modal').addClass('show');
                    if (array_has_images.length == 3) {
                        $('.uploade-image_edit_pr').removeClass('d-flex')
                        $('.uploade-image_edit_pr').css('display', 'none');
                        $('.modal-drag-photo_edit_pr').hide();

                    }
                    canvas = new fabric.Canvas('canvas_edit_pr');
                    can = document.getElementById('canvas_edit_pr')


                }


            }
        })


    })
    $('.edit_check').on('click', function (e) {

        e.stopPropagation();

    });
    $('body').on('click', '.edit_check', function (e) {

        e.stopPropagation();

    });

    // set capital image

    $(document).on('input', '.set_capital_img', function () {


        if ($(this).is(':checked')) {

            let form = $("[name='files_edit_pr[]']").closest("form");
            form.find("[name='files_edit_capital[]']").each(function () {
                console.log('glxavor')
                $(this).remove();

            })
            form.find("[name='files_edit_pr[]']").each(function () {
                console.log('nkar')
                $(this).remove();

            })
            // console.log(form);
            let seting_capital_img_name = $(this).data('image-name')
            array_capital_image.pop();
            array_capital_image.push(seting_capital_img_name)

            $(array_has_images).each(function (index, value) {

                if (value == array_capital_image[0]) {

                    $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_capital[]" value="' + value + '">');

                } else {
                    // console.log(value);
                    $('#editproduct_form').append('<input type="hidden" class="img_inp"  name="files_edit_pr[]" value="' + value + '">');


                }

            });

        }


    })

    $(document).on('change', '#select-menu', function () {

        let select_menu_id = $(this).find("option:selected").attr('data-menu-id')
        let url = $('#sel_cat_route_edit').val()
        $('#list_sub_menu_edit').empty()
        $('#select_sub_category_edit').empty()

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

    $(document).on('click', '#edit-product', function (e) {

        e.preventDefault()
        let option_data = [];
        let options_count = 0;
        $('.options_plus').each(function () {
            let current_options = select_current_options($(this));
            option_data.push(current_options);
        })
        console.log(option_data)
        let url = $('#more_post_edit').val();
        for (let i = 0; i < option_data.length; i++) {
            for (let key of Object.keys(option_data[i])) {

                $('#editproduct_form').append('<input type="hidden" class="options_inp" name="options[' + i + '][' + key + ']"  value= "' + option_data[i][key] + '">');

            }
        }
        if (option_data[0] != false) {
            for (let i = 0; i < option_data.length; i++) {
                for (let key of Object.keys(option_data[i])) {
                    if (key == 'quantity') {
                        options_count += parseInt(option_data[i][key]);

                    }
                }
            }
            $("[name='count']").val(options_count)
            console.log($("[name='count']").val())
        }

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


                } else {
                    if (res.size_error) {
                        $('.product_errors').html("");
                        $('.product_errors').html(res.size_error);
                    } else if (res.material_error) {
                        $('.product_errors').html("");
                        $('.product_errors').html(res.material_error);
                    } else if (res.model_found) {
                        $('.product_errors').html("");
                        $('.product_errors').html("Invalid statements");
                    }
                }
                if (res == "ok") {

                    location.reload();

                }

            }
        })

    })

    $(document).on('click', '#size_all_content_edit', function () {


        $('.dropdown-menu_edit').toggleClass('hide');

    })
    $(document).on('click', '.single_size_group_size', function () {

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
            $(this).find('.sizes_content').removeClass('hide');
            $(this).find('.dropdown-menu').css('display', 'block');

        }


    })

    $(document).on('click', '#size_all_content_edit_material', function () {


        $('.dropdown-menu_edit_material').toggleClass('hide');

    })
    $(document).on('click', '.single_size_group_material', function () {

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
            $(this).find('.sizes_content').removeClass('hide');
            $(this).find('.dropdown-menu').css('display', 'block');

        }


    })

    $(document).on('input', '.percent_ed', function () {
        $price = $('.price_ed').val();
        $percent = $(this).val();
        if ($price != '') {
            $sale_percent = ($price * $percent) / 100;
            $sale_price = $price - $sale_percent;
            $(this).parent().parent().parent().css('margin-bottom', '-23px')
            $('.prices_cost_edit').text($sale_price);
            if ($sale_price < 0 || isNaN($sale_price)) {

                $('.prices_cost_edit').text('');
                $(this).val('');
                $(this).parent().parent().parent().css('margin-bottom', '0px')

            }

        }
        if ($percent == "") {
            $('.prices_cost_edit').empty();
            $(this).parent().parent().parent().css('margin-bottom', '0px')
        }

    })
    $(document).on('input', '.price_ed', function () {
        $price = $(this).val();
        $percent = $('.percent_ed').val();
        if ($percent != '') {
            $sale_percent = ($price * $percent) / 100;
            $sale_price = $price - $sale_percent;
            $sale_price = parseInt($sale_price);
            $('.prices_cost_edit').text($sale_price);
            $('.percent_ed').parent().parent().parent().css('margin-bottom', '-23px');
            if ($sale_price < 0 || isNaN($sale_price)) {
                $('.prices_cost_edit').text('');
                $(this).val('');
                $('.percent_ed').parent().parent().parent().css('margin-bottom', '0px');
            }
        }
        if ($price == "") {

            $('.prices_cost_edit').empty();
            $('.percent_ed').parent().parent().parent().css('margin-bottom', '0px');
        }

    })

    $(document).on('click', '.plus_edit', function () {
        let quantity = $(this).parent().find('.quantity').html() * 1
        quantity++
        $(this).parent().find('.quantity').html(quantity)
        $('.product_count_edit').val(quantity);

    })
    $(document).on('click', '.minus_edit', function () {
        // alert()
        let quantity = $(this).parent().find('.quantity').html() * 1
        quantity--
        if (quantity < 1) {
            quantity = 1
        }
        $(this).parent().find('.quantity').html(quantity)
        $('.product_count_edit').val(quantity);

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


    $('.current_del').on('input', function () {

        let el = $(this);
        if ($(this).is(':checked')) {

            array_deleting_checked.push($(this).val());
            $('.delete-all-products').prop('disabled', false);

        } else {
            $(array_deleting_checked).each(function (index, value) {

                if (value == el.val()) {

                    array_deleting_checked.splice(index, 1)
                }
            });

            $('.delete-all-products').prop('disabled', true);
            $('.current_del').each(function () {

                if ($(this).is(':checked')) {

                    $('.delete-all-products').prop('disabled', false);

                }


            })
        }
        if (array_deleting_checked.length == 0)
        {
            $('.all_del').prop('checked',false);
        }
        console.log(array_deleting_checked);
        $('.delete_text_all').hide();
        $('.delete_text_current').show();
    })

    $('.all_del').on('input', function () {

        if ($(this).is(':checked')) {

            $('.current_del').each(function () {

                $(this).prop('checked', true);
                array_deleting_checked.push($(this).val());

            })


            $('.delete-all-products').prop('disabled', false);
            $('.delete_text_all').show();
            $('.delete_text_current').hide();
        } else {

            $('.current_del').each(function () {

                $(this).prop('checked', false);
                array_deleting_checked.pop();
            })


            $('.delete-all-products').prop('disabled', true);
            $('.delete_text_all').hide();
            $('.delete_text_current').show();
        }


    })
    $('.delete-all-products').on('click', function () {

        $('.delete-product').trigger('click');
        $('.delete-multi').attr('id', 'selected_del')
    })
    $('.cancel_del,#close_del').on('click', function () {

        $('.delete-multi').removeAttr('id');
        $('.delete-multi').val('');

    })
    $('.delete-product').on('click', function () {

        $('.delete-multi').attr('id', 'current_del');
        $('#current_del').val($(this).val());
    })

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };

    function send_delete(url, values) {

        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {

                product_ids: values,


            },
            dataType: 'json',
            success: function (res) {


                if (res.res == 0) {
                    $('#close_del').trigger('click');
                    alert("Product(s) is not found")
                    location.reload();

                } else {

                    if (res.products.last_page == 1) {
                        let redirect_url = $('#account_route').val()
                        window.location.href = redirect_url;

                    } else {
                        let current_page = '?page=' + res.products.current_page;
                        let curr_page = getUrlParameter('page');
                        let redirect_url = $('#account_route').val()
                        if (res.products.last_page >= curr_page) {
                            current_page = '?page=' + curr_page;

                        } else {
                            current_page = '?page=' + res.products.last_page;

                        }

                        if (curr_page != false) {
                            redirect_url = $('#account_route').val() + current_page
                        }

                        window.location.href = redirect_url;


                    }
                    // location.reload();
                }

            }
        })
    }

    $(document).on('click', '#current_del', function () {

        let url = $('#current_delete').val();
        let p_id = $(this).val();
        send_delete(url, p_id);

    })
    $(document).on('click', '#selected_del', function () {

        let url = $('#selected_delete').val();
        send_delete(url, array_deleting_checked);

    })

})

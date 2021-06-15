$('.create-store').click(function () {
    // alert()
    $('#v-pills-welcome-seller').removeClass('active')
    $('#v-pills-create-store').addClass('active')
    $('#v-pills-create-store').addClass('show')
})
var image
let array_images_store = []
// let c = 0;

$(".input-file-trigger_store").on('dragenter', function (e) {
    e.preventDefault();
    $(this).css('background', '#BBD5B8');
});

$(".input-file-trigger_store").on('dragover', function (e) {
    e.preventDefault();
});

$(".input-file-trigger_store").on('drop', function (e) {
    $(this).css('background', '#D8F9D3');
    e.preventDefault()
    var file = e.originalEvent.dataTransfer.files[0];

    readURL_store(file);
});

function readUrl_background(file) {

    var reader = new FileReader();
    reader.onload = function (e) {
        var image = new Image();
        image.src = e.target.result;

        image.onload = function () {
            // var height = this.height;
            // var width = this.width;
            var data = e.target.result;

            // if (height > 400 || width > 400) {
            //     $('.canvas-cont_store').removeClass('hide')
            //     $('.canvas-cont_store').addClass('d-flex')
            //
            //     Edit(data, height, width, image)
            // }
            // else {
            // let unique_image = true;
            // if (array_images_store.length < 1) {

            $('#image-cont_store_back').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
            $src_icon = $('.delete-image').find('img').attr('src');
            $('#image-cont_store_back').append('<div class="drop-image_store_back"><img src="' + $src_icon + '"></div>')
            // array_images_store.push(e.target.result)
            // $('#shop_form').append('<input type="hidden" class="img_inp"  name="files_back" value="' + e.target.result + '">');

            // }


            // console.log(c);
            // }
            // if (array_images.length > 0) {
            $('.uploade-image_store_back').css('display', 'none')
            $('.uploade-image_store_back').removeClass('d-flex')
            // }
            // }
        }
    }
    reader.readAsDataURL(file);

}

function readURL_store(file) {
    var reader = new FileReader();
    reader.onload = function (e) {
        var image = new Image();
        image.src = e.target.result;

        image.onload = function () {
            var height = this.height;
            var width = this.width;
            var data = e.target.result;

            if (height > 400 || width > 400) {
                $('.canvas-cont_store').removeClass('hide')
                $('.canvas-cont_store').addClass('d-flex')

                Edit(data, height, width, image)
            } else {
                // let unique_image = true;
                if (array_images_store.length < 1) {
                    // for (let i = 0; i < array_images.length; ++i) {
                    //     // console.log(array_images[i])
                    //     if (array_images[i] == e.target.result)
                    //     {
                    //         unique_image = false;
                    //         break;
                    //     }
                    // }
                    // console.log(unique_image)
                    // if (unique_image == true)
                    // {
                    // c++;
                    $('#image-cont_store').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
                    $src_icon = $('.delete-image').find('img').attr('src');
                    $('#image-cont_store').append('<div class="drop-image_store"><img src="' + $src_icon + '"></div>')
                    array_images_store.push(e.target.result)
                    $('#shop_form').append('<input type="hidden" class="img_inp"  name="files" value="' + e.target.result + '">');

                    // }


                    // console.log(c);
                }
                // if (array_images.length > 0) {
                $('.uploade-image_store').css('display', 'none')
                $('.uploade-image_store').removeClass('d-flex')
                // }
            }
        }
    }
    reader.readAsDataURL(file);
}

var canvas = new fabric.Canvas('canvas_store');
var can = document.getElementById('canvas_store')

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
$('#crop-image_store').click(function (e) {
    // alert()
    $('#shop_img').val('');
    e.preventDefault()
    let cropWidth = canvas.getWidth()
    let cropHeight = canvas.getHeight()
    let cropped = new Image();
    cropped.src = canvas.toDataURL({
        width: cropWidth,
        height: cropHeight
    });
    // console.log(cropped.src)

    if (array_images_store.length < 1) {
        // c++;
        $('#image-cont_store').append('<div class="image-cont-item mx-1"><img src="' + cropped.src + '"></div>')
        array_images_store.push(cropped.src)
        $('#shop_form').append('<input type="hidden" class="img_inp"  name="files" value="' + cropped.src + '">');

        $src_icon = $('.delete-image').find('img').attr('src');
        $('#image-cont_store').append('<div class="drop-image_store"><img src="' + $src_icon + '"></div>')
        // $img_values = $("[name='files[]']")
        // console.log(c);
        // console.log($img_values.length)
        $('.canvas-cont_store').addClass('hide')
        $('.canvas-cont_store').removeClass('d-flex')
    }

    // if (array_images.length > 0) {
    $('.uploade-image_store').css('display', 'none')
    $('.uploade-image_store').removeClass('d-flex')
    // }
    canvas.clear()

})
// ---------delete image-----------------------------
$('.delete-image_store').click(function () {
    console.log(array_images_store.length)
    $('#shop_img').val('');
    $('.canvas-cont_store').addClass('hide')
    $('.canvas-cont_store').removeClass('d-flex')
})

$('#shop_img').on("input", function (e) {
    console.log(array_images_store.length)
    if (array_images_store.length < 1) {
        var file = e.target.files[0];
        readURL_store(file);
    }
});
$('#store_background').on("input", function (e) {
    // console.log(array_images_store.length)
    // if (array_images_store.length < 1) {
    var file = e.target.files[0];
    var ext = $('#store_background').val().split('.').pop().toLowerCase();
    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {

        $(this).val('');
        $('#image-cont_store_back').empty();
        $('#image-cont_store_back').append('<div class="image-error-item mx-1">Invalide image</div>');


    } else {
        $('#image-cont_store_back').empty();
        readUrl_background(file);

    }

    // }
});

$(document).on('click', '.drop-image_store', function () {

    $('#shop_img').val('');
    $("[name='files']").remove();
    array_images_store.pop();
    console.log(array_images_store.length)
    $(this).prev().remove();
    $(this).remove();
    if ($('.uploade-image_store').css('display') == 'none') {
        $('.uploade-image_store').show();

    }

})
$(document).on('click', '.drop-image_store_back', function () {

    $('#store_background').val('');
    // $("[name='files']").remove();
    // array_images_store.pop();
    // console.log(array_images_store.length)
    $(this).prev().remove();
    $(this).remove();
    if ($('.uploade-image_store_back').css('display') == 'none') {
        $('.uploade-image_store_back').show();

    }

})
$('#create_store').on('click', function (e) {
    e.preventDefault();
    let form = $('#shop_form')[0];
    let url = $('#create_store_route').val();
    let data = new FormData(form);
    $.ajax({
        method: 'post',
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: data,
        dataType: 'json',
        contentType: false,
        processData: false,
        success: function (res) {
            console.log(res)

            if (res.store_error) {
                if (res.field) {

                    $m = [];
                    for (let i = 0; i < res.field.length; i++) {


                        $m += "Store Description";


                    }
                    console.log(res.field)

                    $message = $m + " " + res.store_error
                    $('.product_errors').html($message);
                } else {
                    $('.product_errors').html(res.store_error);

                }


            }
            if (res.name) {

                // $('#add-product').attr('data-target','.product-successfully-aded');
                // $('#close_add_model').trigger('click');
                $('#v-pills-create-store').removeClass('active')
                $('#open_success_modal_store').trigger('click');
                $('#store_name').text(res.name)
                setTimeout(function () {

                    location.reload();

                }, 1500)
                // $('.product-successfully-aded').addClass('show');

            }

        }
    })

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
// $('.lets-sell').on('click',function () {
//
//     location.reload();
//
// })

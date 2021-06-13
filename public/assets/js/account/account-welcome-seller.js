$('.create-store').click(function () {
    $('#v-pills-welcome-seller').removeClass('active')
    $('#v-pills-create-store').addClass('active')
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
                // if (array_images.length == 3) {
                //     $('.uploade-image').css('display', 'none')
                //     $('.uploade-image').removeClass('d-flex')
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
    // if (array_images.length == 3) {
    //     $('.uploade-image').css('display', 'none')
    //     $('.uploade-image').removeClass('d-flex')
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
    console.log(array_images_store)
    if (array_images_store.length < 1) {
        var file = e.target.files[0];
        readURL(file);
    }
});

$(document).on('click', '.drop-image_store', function () {
// alert()
    $('#shop_img').val('');
    // $data_img_id = $(this).attr('data-img-id');

    // $('.img_inp').attr('data-inp-id',$data_img_id).remove();
    $("[name='files']").remove();
    array_images_store.pop();
    console.log(array_images_store.length)
    // $img_values = $("[name='files[]']")
    // console.log($img_values.length);

    $(this).prev().remove();
//      console.log($(this).parent())
    $(this).remove();
    // if ($('.uploade-image').css('display') == 'none') {
    //     $('.uploade-image').show();
    //
    // }


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


        }
    })

})

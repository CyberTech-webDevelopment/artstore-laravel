$(document).ready(function () {
    var image
    let array_images_store_e = []
    $(".input-file-trigger_store_e").on('dragenter', function (e) {
        e.preventDefault();
        $(this).css('background', '#BBD5B8');
    });

    $(".input-file-trigger_store_e").on('dragover', function (e) {
        e.preventDefault();
    });

    $(".input-file-trigger_store_e").on('drop', function (e) {
        $(this).css('background', '#D8F9D3');
        e.preventDefault()
        var file = e.originalEvent.dataTransfer.files[0];

        readURL_store(file);
    });

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
                    $('.canvas-cont_store_e').removeClass('hide')
                    $('.canvas-cont_store_e').addClass('d-flex')

                    Edit(data, height, width, image)
                } else {
                    // let unique_image = true;
                    if (array_images_store_e.length < 1) {

                        $('#image-cont_store_e').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
                        $src_icon = $('.delete-image').find('img').attr('src');
                        $('#image-cont_store_e').append('<div class="drop-image_store"><img src="' + $src_icon + '"></div>')
                        array_images_store_e.push(e.target.result)
                        // added form append
                        // $('#shop_form').append('<input type="hidden" class="img_inp"  name="files" value="' + e.target.result + '">');

                        // }


                        // console.log(c);
                    }
                    // if (array_images.length > 0) {
                    $('.uploade-image_store_e').css('display', 'none')
                    $('.uploade-image_store_e').removeClass('d-flex')
                    // }
                }
            }
        }
        reader.readAsDataURL(file);
    }

    var canvas = new fabric.Canvas('canvas_store_e');
    var can = document.getElementById('canvas_store_e')

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
    $('#crop-image_store_e').click(function (e) {
        // alert()
        $('#shop_img_e').val('');
        e.preventDefault()
        let cropWidth = canvas.getWidth()
        let cropHeight = canvas.getHeight()
        let cropped = new Image();
        cropped.src = canvas.toDataURL({
            width: cropWidth,
            height: cropHeight
        });
        // console.log(cropped.src)

        if (array_images_store_e.length < 1) {
            // c++;
            $('#image-cont_store_e').append('<div class="image-cont-item mx-1"><img src="' + cropped.src + '"></div>')
            array_images_store_e.push(cropped.src)
            // added form append
            // $('#shop_form').append('<input type="hidden" class="img_inp"  name="files" value="' + cropped.src + '">');
// lracnel
            $src_icon = $('.delete-image').find('img').attr('src');
            $('#image-cont_store_e').append('<div class="drop-image_store"><img src="' + $src_icon + '"></div>')
            // $img_values = $("[name='files[]']")
            // console.log(c);
            // console.log($img_values.length)
            $('.canvas-cont_store_e').addClass('hide')
            $('.canvas-cont_store_e').removeClass('d-flex')
        }

        // if (array_images.length > 0) {
        $('.uploade-image_store_e').css('display', 'none')
        $('.uploade-image_store_e').removeClass('d-flex')
        // }
        canvas.clear()

    })


    // ---------delete image-----------------------------
    $('.delete-image_store_e').click(function () {
        // console.log(array_images_store.length)
        $('#shop_img_e').val('');
        $('.canvas-cont_store_e').addClass('hide')
        $('.canvas-cont_store_e').removeClass('d-flex')
    })

    $('#shop_img_e').on("input", function (e) {
        // alert()
        // console.log(array_images_store.length)
        if (array_images_store_e.length < 1) {
            var file = e.target.files[0];
            readURL_store(file);
        }
    });

});

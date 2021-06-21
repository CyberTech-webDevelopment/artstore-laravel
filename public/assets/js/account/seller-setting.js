$(document).ready(function () {
    var image
    let array_images_store_e = []
    $(document).on('dragenter',".input-file-trigger_store_e", function (e) {
        e.preventDefault();
        $(this).css('background', '#BBD5B8');
    });

    $(document).on('dragover',".input-file-trigger_store_e", function (e) {
        e.preventDefault();
    });

    $(document).on('drop',".input-file-trigger_store_e", function (e) {
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

                    if (array_images_store_e.length < 1) {

                        $('#image-cont_store_e').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');

                        $src_icon = $('.delete-image_store_e').find('img').attr('src');
                        $('#image-cont_store_e').append('<div class="drop-image-e-store" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')
                        array_images_store_e.push(e.target.result)

                        $('#edit_store_form').append('<input type="hidden" class="img_inp"  name="file_edit" value="' + e.target.result + '">');

                    }

                    $('.uploade-image_store_e').css('display', 'none')
                    $('.uploade-image_store_e').removeClass('d-flex')

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
            if (zoom < 0.01) zoom = 0.01;
            var zoom = oImg.scaleX
            zoom *= 0.999 ** delta;
            if (zoom > 20) zoom = 20;

            oImg.scale(zoom);

            canvas.setBackgroundImage(oImg).renderAll();
            opt.e.preventDefault();
            opt.e.stopPropagation();
        })
        canvas.renderAll();
    }


    // ------------------CROP IMAGE----------------
    $(document).on('click','#crop-image_store_e',function (e) {

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

            $('#image-cont_store_e').append('<div class="image-cont-item mx-1"><img src="' + cropped.src + '"></div>')
            $src_icon = $('.delete-image_store_e').find('img').attr('src');
            $('#image-cont_store_e').append('<div class="drop-image-e-store" data-img-id="' + c + '"><img src="' + $src_icon + '"></div>')
            array_images_store_e.push(cropped.src)

            $('#edit_store_form').append('<input type="hidden" class="img_inp"  name="file_edit" value="' + cropped.src + '">');



            $('.canvas-cont_store_e').addClass('hide')
            $('.canvas-cont_store_e').removeClass('d-flex')
        }

        $('.uploade-image_store_e').css('display', 'none')
        $('.uploade-image_store_e').removeClass('d-flex')

        canvas.clear()

    })


    // ---------delete image-----------------------------
    $(document).on('click','.delete-image_store_e',function () {

        $('#shop_img_e').val('');
        $('.canvas-cont_store_e').addClass('hide')
        $('.canvas-cont_store_e').removeClass('d-flex')
    })

    $(document).on("input",'#shop_img_e', function (e) {

        if (array_images_store_e.length < 1) {
            var file = e.target.files[0];
            readURL_store(file);
        }
    });

    $(document).on('click', '.drop-image-e-store', function () {
console.log($(this))
        $('#shop_img_e').val('');
        $("[name='file_edit']").remove();
        array_images_store_e.pop();
        // console.log(array_images_store.length)
        $(this).prev().remove();
        $(this).remove();
        if ($('#drag-photo-logo-e').css('display') == 'none') {
            $('#drag-photo-logo-e').show();

        }

    })

//    Get stores data in edit store

    $('#v-pills-seller-settings-tab').on('click', function (e) {
        e.preventDefault();
        let href = $(this).attr('href');
        let url = $(this).data('route')
        $(this).attr('href', "");
        let store_id = $(this).data('shop');

        if (!$.isNumeric(store_id)) {
            $(this).attr('href', '#v-pills-welcome-seller');

        } else {

            $(this).attr('href', href);
            $.ajax({
                method: 'get',
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {store_id: store_id},
                dataType: 'json',
                success: function (res) {
                    console.log(res)
                    if (res.view) {
                        $('#v-pills-seller-settings').empty()
                        $('#v-pills-seller-settings').append(res.view)
                        $('#drag-photo-logo-e').hide();
                        $('#drag-photo-e-back').hide();
                        $('#image-cont_store_e').append('<div class="drop-image_e"><img src="/storage/store_logo/' + res.store.logo + '"></div>')
                        $('#image-cont_store_e').append('<div class="drop-image-e-store"><img src="/assets/icons/close.png"></div>')

                        $('#img-cont-back-e').append('<div class="drop-image_e_back"><img src="/storage/store_back/' + res.store.background + '"></div>')
                        canvas = new fabric.Canvas('canvas_store_e');
                        can = document.getElementById('canvas_store_e')
                    }
                },
                error: function () {
                    alert('ajax error')

                }
            })


        }
    })

//    End edit store get data
});

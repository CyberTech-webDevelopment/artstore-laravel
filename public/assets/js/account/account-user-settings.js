$(document).ready(function() {

    $('.disable_turn').on('click',function (){

        $(this).prev().prop('disabled', function(i, v) { return !v; });

    })

    $('.upload_user_img').on('click',function (){

        $('#download_user_img').trigger('click');
    })


    function readUrl_avatar(file) {

        var reader = new FileReader();
        reader.onload = function (e) {
            var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var width = this.width;
                var data = e.target.result;
                $('#user_avatar').attr('src',e.target.result)
                // if (width < 680) {
                //     $('#store_background').val('');
                //     $('#image-cont_store_back').empty();
                //     $('#image-cont_store_back').append('<div class="image-error-item ml-4 mt-2 text-danger ">Background Image min width must be 680px</div>');
                // } else {
                //     $('#image-cont_store_back').append('<div class="image-cont-item mx-1"><img src="' + e.target.result + '"></div>');
                //     $src_icon = $('.delete-image').find('img').attr('src');
                //     $('#image-cont_store_back').append('<div class="drop-image_store_back"><img src="' + $src_icon + '"></div>')
                //
                //     $('.uploade-image_store_back').css('display', 'none')
                //     $('.uploade-image_store_back').removeClass('d-flex')
                // }


            }
        }
        reader.readAsDataURL(file);

    }

    $('#download_user_img').on('input',function (e){

        var file = e.target.files[0];
        var ext = $('#download_user_img').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {

            $(this).val('');
            $('#avatar_error').empty();
            $('#avatar_error').html('Invalide image');


        } else {
            $('#avatar_error').empty();

            readUrl_avatar(file);


        }

    })

    $('.save-account-change').on('click',function (e){

        e.preventDefault();
        // let avatar = $('#download_user_img').val();
        $('.account-change-inp').each(function (){

            $(this).prop('disabled',false);

        })
        let form_change = $('#change_form')[0];
        let data_user = new FormData(form_change);
        let url = $('#change_data_url').val();
        // data_user.append('avatar', $('#download_user_img').files[0]);
        // data_user.append('name', $('#account-change-name').val());
        // data_user.append('email', $('#account-change-email').val());
        // data_user.append('old_pass', $('#account-change-pass-old').val());
        // data_user.append('new_pass', $('#account-change-pass-new').val());
        // data_user.append('new_pass', $('#account-change-pass-confirm').val());
        $.ajax({
            url : url,
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            contentType: false,
            processData: false,
            data : data_user,
            dataType:'json',
            success: function(res){
                console.log(res);
                if (res.check_email)
                {
                    alert('Message sending');

                }
            }
        });

    })
})

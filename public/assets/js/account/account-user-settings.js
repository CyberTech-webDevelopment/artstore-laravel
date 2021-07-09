$(document).ready(function () {

    $('.disable_turn').on('click', function () {

        $(this).prev().prop('disabled', function (i, v) {
            return !v;
        });

    })

    $('.upload_user_img').on('click', function () {

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
                $('#user_avatar').attr('src', e.target.result)

            }
        }
        reader.readAsDataURL(file);

    }

    $('#download_user_img').on('input', function (e) {

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

    $('.save-account-change').on('click', function (e) {

        e.preventDefault();
        $('.account-change-inp').each(function () {

            $(this).prop('disabled', false);

        })
        let form_change = $('#change_form')[0];
        let data_user = new FormData(form_change);
        let url = $('#change_data_url').val();
        $.ajax({
            url: url,
            method: "POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            contentType: false,
            processData: false,
            data: data_user,
            dataType: 'json',
            success: function (res) {
                console.log(res);
                if (res.change_error) {
                    $('.error_change_data').empty();
                    if (res.field) {

                        $m = [];
                        for (let i = 0; i < res.field.length; i++) {

                            if (i == (res.field.length - 1)) {
                                $m += $("[name='" + res.field[i] + "']").parent().prev().text();
                            } else {
                                $m += $("[name='" + res.field[i] + "']").parent().prev().text() + ',';
                            }

                        }
                        console.log(res.field)

                        $message = $m + " " + res.change_error
                        $('.error_change_data').html($message);
                    } else {
                        $('.error_change_data').html(res.change_error);

                    }

                }

                if (res.change_success) {
                    $('.error_change_data').empty();
                    $('.succes_data_change').empty();
                    $('.succes_data_change').html(res.change_success);

                    if ($('#store_img_state').val() != 'on') {
                        $('.only_user_img').find('img').attr('src', '');
                        let new_src = $('#user_avatar').attr('src');
                        $('.only_user_img').find('img').attr('src', new_src);

                    }

                }
                if (res.check_email) {
                    $('#open_changing_email').trigger('click');

                }
            }
        });

    })
})

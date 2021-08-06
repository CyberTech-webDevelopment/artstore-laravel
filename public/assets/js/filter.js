$(document).ready(function () {

    $(document).on('change', '#filtr_sub_menu', function () {
        let sub_menu_id = [$(this).val()];
        let url = $('#sel_sub_cat_route').val()
        // alert(url)
        $.ajax({
            method: 'post',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {sub_menu_ids: sub_menu_id},
            dataType: 'json',
            success: function (res) {
                $lang_name_cat = "name_category_" + $('#cur_lang').val();


                let options_text = '';
                $('#filtr_type').empty();
                $('#filtr_type').prepend('<option value="0">Select Type</option>');
                for (let $i in res.sub_cat) {

                    options_text += "<optgroup label='" + $i + "'>"


                    for (let key in res.sub_cat[$i]) {
                        console.log($lang_name_cat)
                        console.log(res.sub_cat[$i][key])
                        options_text += "<option value='" + res.sub_cat[$i][key]['id'] + "'>" + res.sub_cat[$i][key][$lang_name_cat] + "</option>"
                    }
                    options_text += "</optgroup>"
                }
                $('#filtr_type').append(options_text);


            }
        })
    })
    $(document).on('click', '.filtr_button', function () {

        let selected_filtrs = [];
        selected_filtrs.push(getfiltrs_options());
        let url = $('#current_route').val();
        console.log(selected_filtrs);
        for (let i = 0; i < selected_filtrs.length; i++) {
            for (let key of Object.keys(selected_filtrs[i])) {
// console.log(selected_filtrs[i])
                $('#filtr_options').append('<input type="hidden" class="filtr_options" name="filtr_options[' + i + '][' + key + ']"  value= "' + selected_filtrs[i][key] + '">');

            }
        }
        var data = $('#filtr_options').serialize();
        $.ajax({
            method: 'get',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data,
            dataType: 'json',
            cache: false,
            processData: false,
            async: false,
            success: function (res) {

                console.log(res);


            }
        })
        // console.log(getfiltrs_options());

    })

    function getfiltrs_options() {
        // let options_filtr = [];

        let options_filtr = {
            'percent': $('input[name="filter_discount"]:checked').val(),
            'cat_type': $('#cat_type_filtr').val(),
            'cat_id' : $('#cat_id_filtr').val(),
            'sub_menu': $('#filtr_sub_menu').val(),
            'sub_cat': $('#filtr_type').val(),
            'color': $('#filtr_color').val(),
            'size': $('input[name="size_filtr"]:checked').val(),
            'material': $('input[name="material_filtr"]:checked').val(),
            'material_type': $('input[name="material_filtr"]:checked').parent().data('table-name'),
            'start_cost':$('#start_cost').val(),
            'end_cost':$('#end_cost').val(),
            'size_type': $('input[name="size_filtr"]:checked').parent().data('table-name'),
        };

        return options_filtr;
    }

    function only_checked(parent_class, check_class, element) {
        let parent_row = element.closest('.' + parent_class);
        let checked = parent_row.find('.' + check_class + ':checked');
        if (checked.length > 1) {
            parent_row.find('.' + check_class).prop('checked', false);
        }
        element.prop('checked', true);

    }

    $(document).on('click', '.size_filtr', function () {

        only_checked('option_content_filtr', 'size_filtr', $(this));

    })
    $(document).on('click', '.material_filtr', function () {

        only_checked('option_content_filtr', 'material_filtr', $(this));
    })
})

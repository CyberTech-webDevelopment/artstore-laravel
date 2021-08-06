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
    function filtr_ajax(url,data,page)
    {
        $.ajax({
            method:'get',
            url: url,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: data + "&page=" + page,
            dataType: 'json',
            cache: false,
            processData: false,
            async: false,
            success: function (res) {

                console.log(res);
                if (res.view){

                    $('#current-category-page').empty();
                    $('#current-category-page').append(res.view);

                }




            }
        })
    }
    $(document).on('click', '.filtr_button', function () {

        let selected_filtrs = [];
        let page = 1;
        selected_filtrs.push(getfiltrs_options(page));
        let url = $('#current_route').val();
        console.log(selected_filtrs);
        for (let i = 0; i < selected_filtrs.length; i++) {
            for (let key of Object.keys(selected_filtrs[i])) {
// console.log(selected_filtrs[i])
                $('#filtr_options').append('<input type="hidden" class="filtr_options" name="filtr_options[' + i + '][' + key + ']"  value= "' + selected_filtrs[i][key] + '">');

            }
        }
        var data = $('#filtr_options').serialize();
        filtr_ajax(url,data,page)
        // console.log(getfiltrs_options());

    })
    $(document).on('click', '.page-link_current', function (event) {
        event.preventDefault();
        let selected_filtrs = [];
        let page = $(this).attr('href').split('page=')[1];
        selected_filtrs.push(getfiltrs_options(page));
        console.log(selected_filtrs)
        for (let i = 0; i < selected_filtrs.length; i++) {
            for (let key of Object.keys(selected_filtrs[i])) {
// console.log(selected_filtrs[i])
                $('#filtr_options').append('<input type="hidden" class="filtr_options" name="filtr_options[' + i + '][' + key + ']"  value= "' + selected_filtrs[i][key] + '">');

            }
        }

        let url = $('#current_route').val();
        let data = $('#filtr_options').serialize();
        // alert(route);
        // let store_id = $('#v-pills-last-views-tab').data('store-id');
        // localStorage.setItem('page_basket', page);
        filtr_ajax(url,data,page);

    });
    function getfiltrs_options(page) {
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
        let q = '';

        if (options_filtr['percent'] !== '0' && options_filtr['percent'] !== undefined) {

            q += `${q === '' ? '?' : '&'}percent=${options_filtr['percent']}`
        }
        if (options_filtr['sub_menu'] !== '0' && options_filtr['sub_menu'] !== undefined) {

            q += `${q === '' ? '?' : '&'}menu=${options_filtr['sub_menu']}`
        }
        if (options_filtr['sub_cat'] !== '0' && options_filtr['sub_cat'] !== undefined) {

            q += `${q === '' ? '?' : '&'}type=${options_filtr['sub_cat']}`
        }
        if (options_filtr['color'] !== '0' && options_filtr['color'] !== undefined) {
            q += `${q === '' ? '?' : '&'}color=${options_filtr['color']}`
        }
        if (options_filtr['size'] !== '0' && options_filtr['size'] !== undefined) {
            q += `${q === '' ? '?' : '&'}size=${options_filtr['size']}`
        }
        if (options_filtr['material'] !== '0' && options_filtr['material'] !== undefined) {
            q += `${q === '' ? '?' : '&'}material=${options_filtr['material']}`
        }
        if (options_filtr['start_cost'] !== '' && options_filtr['start_cost'] !== null) {
            q += `${q === '' ? '?' : '&'}s_cost=${options_filtr['start_cost']}`
        }
        if (options_filtr['end_cost'] !== '' && options_filtr['end_cost'] !== null) {
            q += `${q === '' ? '?' : '&'}e_cost=${options_filtr['end_cost']}`
        }
        q += `${q === '' ? '?' : '&'}page=${page}`

        window.history.pushState({}, '', window.location.href.split('?')[0] + q);
console.log(options_filtr['start_cost'])
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

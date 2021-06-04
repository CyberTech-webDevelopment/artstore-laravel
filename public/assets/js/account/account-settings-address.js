$(document).ready(function() {
    $('.my-form-country').on('change', function(){
      var $parent=$(this).parent().parent().parent()
      var $val1=$(this).val()
      console.log($val1)
    $parent.find('.cities>option').remove()
     $.getJSON('acount/cities.json', function(data) {
                $.each(data, function(key, val) {
                  if(val.country==$val1){
                    console.log($val1)
                    $parent.find('.cities').append('<option value="' + val.name + '">' + val.name + '</option>');
                  }
                });
    });
    })

$(document).on('click', '.add-new-address', function(){
      var $selected=$(this).parent().find('select option:selected').val()
      var $newAddressCont=$(this).parent().clone();
      
      $newAddressCont.find('select option[value='+$selected+']').prop('selected', true);
      $newAddressCont.find('input').val('')
      $newAddressCont.find('button').addClass('save-address')
      $newAddressCont.find('button').html('Save Address')

      $(this).parent().after($newAddressCont);
      $(this).css('visibility', 'hidden')
    })

})
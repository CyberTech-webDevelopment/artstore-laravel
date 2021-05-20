// --------------------for mobile----------------------------------
$('.flags-mob').click(function(){
    $('.hide-flags').slideToggle()
    $('.flg-img').click(function(){
       $src=$(this).attr('src')
       $get_activ_src=$('.active-lng').attr('src')

       $('.active-lng').attr('src', $src)
       $(this).attr('src', $get_activ_src)
    })
  })


    $('.dropdown-menu').css('position','relative')

  $('.dropdown-first-item').click(function(){
        $('.dropdown-first-item').not($(this)).find('i').addClass('fa-angle-right')
        $('.dropdown-first-item').not($(this)).find('i').removeClass('fa-angle-down')

 // -----------dropdown-second-item---------all closed---------
        $('.dropdown-second-item').find('i').addClass('fa-angle-right')
        $('.dropdown-second-item').find('i').removeClass('fa-angle-down') 
        $('.menu-second-item').parent().find('.menu-second-item').slideUp()
        $('.menu-second-item').parent().find('.menu-second-item').addClass('hide') 

        $('.menu-first-item').not($(this).parent().find('.menu-first-item')).slideUp()
        $('.menu-first-item').not($(this).parent().find('.menu-first-item')).addClass('hide')

    if(!$(this).parent().find('.menu-first-item').hasClass('hide')){
           $(this).parent().find('.menu-first-item').slideUp()
           $(this).parent().find('.menu-first-item').addClass('hide')
    }
    else{
        $(this).parent().find('.menu-first-item').slideDown(400)
        $(this).parent().find('.menu-first-item').removeClass('hide')

    }
      $(this).find('i').toggleClass('fa-angle-down').toggleClass('fa-angle-right')
  })
  $('.dropdown-second-item').click(function(){
        $('.dropdown-second-item').not($(this)).find('i').addClass('fa-angle-right')
        $('.dropdown-second-item').not($(this)).find('i').removeClass('fa-angle-down')

        $('.menu-second-item').not($(this).parent().find('.menu-second-item')).slideUp()
        $('.menu-second-item').not($(this).parent().find('.menu-second-item')).addClass('hide')
    if(!$(this).parent().find('.menu-second-item').hasClass('hide')){
          $(this).parent().find('.menu-second-item').slideUp()
          $(this).parent().find('.menu-second-item').addClass('hide')
    }
    else{
         $(this).parent().find('.menu-second-item').slideDown(400)
         $(this).parent().find('.menu-second-item').removeClass('hide')
    }
      $(this).find('i').toggleClass('fa-angle-down').toggleClass('fa-angle-right')

  })
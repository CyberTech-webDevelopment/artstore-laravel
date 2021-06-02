// --------------for max width -------------------------
$('.flg-nav-img').on('click', function(){
  $('.hide-flags').slideToggle()
       $src=$(this).attr('src')
       $get_activ_src=$('.active-nav-lng').attr('src')
       $lng_name=$(this).attr('name')
       $lng_active= $('.active-nav-lng').attr('name')

       $('.active-nav-lng').attr('src', $src)
       $('.active-nav-lng').attr('name', $lng_name)
       $(this).attr('name', $lng_active)
       $(this).attr('src', $get_activ_src)
       $language=$('.active-nav-lng').attr('name')
if($lng_active!=$lng_name){
       console.log($language+' lnnng')
       $.ajax({
        method: 'post',
        url: 'language.php',
        data:{lng: $language},
        success: function(res){
          location.reload()
        }
       })
     }
    })


$('.first-nav-link').on('click', function(event){
   event.preventDefault()
   $('.nav-item').removeClass('active-item')
   $(this).parent().addClass('active-item')
   $id=$(this).attr('data-id')
   $('#hidden').css('height','266px')
   $.ajax({
     method: 'post',
     url: 'session/sub-menu-session.php',
     data: {menu_id: $id},
     success: function(res){
      $('.mes').html(res)
     }
   })
})
$('.nav-second-li a').on('click', function(){
   $('.nav-second-li').removeClass('active-border')
   $(this).parent().addClass('active-border')
   let left=$(this).offset().left-130
   let th_id=$(this).attr('href')
//    console.log(left+'--left')
   if(left>860){
      $(''+th_id+'').css({'left': 'unset','right': 0})
   }
   else{
   $(''+th_id+'').css('left', left+'px')
   }
   if($( window ).width()<1050 && left>600){
    $(''+th_id+'').css({'left': 'unset','right': 0})
   }
  })

  $( ".scroll-div" ).on('scroll', function() {
     let scroll_active_border_left=$('.active-border').offset().left-130
     let th_id=$('.active-border').find('a').attr('href')
         $(''+th_id+'').css('left', scroll_active_border_left+'px')
  })

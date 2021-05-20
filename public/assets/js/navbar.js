// --------------for max width -------------------------
$('.flg-nav-img').click(function(){
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


$('.first-nav-link').click(function(event){
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
$('.nav-second-li').click(function(){
   $('.nav-second-li').removeClass('active-border')
   $(this).addClass('active-border')
   let left=$(this).find('a').offset().left-130
   let th_id=$(this).find('a').attr('href')
   console.log(left)

   if(left>1000){
      $(''+th_id+'').css({'left': 'unset','right': 0})
   }
   else{
   $(''+th_id+'').css('left', left+'px')
   }
  })
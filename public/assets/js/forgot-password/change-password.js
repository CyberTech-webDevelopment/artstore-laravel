// -------lock------------------
$('#change-password-icon-lock').click( function(){
      let inp=$(this).parent().parent().find('input')
      if (inp.attr('type') == 'password'){
            $(this).find('img').attr('src','icons/icon-look.png');
            $(inp).attr('type', 'text');
            console.log('inp')
      } else {
            $(this).find('img').attr('src','icons/icon-lock.png');
           $(inp).attr('type', 'password');
      }
      return false;
});  


      $('.change-inp').on('input', function(){
            let valLngt=$(this).val().length
            let min=$(this).attr('min')
            let max=$(this).attr('max')

            if(valLngt<min || valLngt>max || valLngt===0){
                  console.log('error')
                  $(this).parent().parent().find('.required').addClass('hide');
                  $(this).parent().parent().find('.invalid-inp').html('Pleases enter '+min+' - '+max+' characters.')
                  $(this).attr('data-name', 0)
            }
            else{
                  $(this).parent().parent().find('.invalid-inp').html('')
                  $(this).parent().parent().find('.required').addClass('hide');
                  $(this).attr('data-name', 1)
            }
      })
    $('#change-password').click(function(){
        let countFilds=0
      
      $('.change-inp').each(function(){
            if($(this).val()==""){
                        $(this).parent().parent().find('.required').removeClass('hide');
                  }
                  else{
                         $(this).parent().parent().find('.required').addClass('hide');
                  }
                  if($(this).attr('data-name')==1){
                        countFilds++
                  }
            })

                if(countFilds==2){
                        let chng_pass=$('#change-pass').val()
                        let mail=$('#hidden-inp').val()
                        let conf_pass=$('#confirm-change-pass').val()

                       $.ajax({
                         type: "post",
                         url: "forgot-password/confirm-changed-password.php",
                         data: { change_pass: chng_pass, confirm_pass: conf_pass, email: mail},
                         success: function(res){
                              if(res!=false){
                                $("#new-password-changed").html('')
                                $("#new-password-changed").html(res)
                              }
                              else{
                                $(".password-changed").html("<span class='text-danger'> Password confirmation doesn't match the password.</span>")
                              }
                         }
                       })
                  }
             
})
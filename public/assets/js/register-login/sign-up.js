$('.check').on('change', function(){
      if($(this).is(':checked')){
             $(this).val(1)
             $(this).attr('data-name', 1)
             $(this).parent().find('.required').addClass('hide');
      }
      else{
            $(this).parent().find('.required').removeClass('hide');
            $(this).val('')
            $(this).attr('data-name', 0)
      }
})  

$('#recaptcha-anchor').on('change', function(){
      if($(this).is(':checked')){
             $('#captcha-parent').find('.required').addClass('hide');
      }
      else{
            $('#captcha-parent').find('.required').removeClass('hide');
      }
})  
// -------lock------------------
$('#icon-lock').click( function(){
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
 function ValidateEmail(email) {
      var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      return expr.test(email);
}

      $('.reg-inp').on('input', function(){
            let valLngt=$(this).val().length
            let min=$(this).attr('min')
            let max=$(this).attr('max')

            if($(this).attr('type')=='email'){
                  let mail=$('#reg-mail').val()
                  if(!ValidateEmail(mail)){
                        $('.invalid-mail').html('Please enter the valid e-mail.')
                        $(this).attr('data-name', 0) 
                  }
                  else{
                       $('.invalid-mail').html('')  
                       $(this).attr('data-name', 1)
                  }
            }
            else{
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
            }
      })
$('#registration').click(function(){
      let countFilds=0
      var $captchaid = $("#recaptchaid")
      var response = grecaptcha.getResponse();
    console.log(response);
    if (response.length === 0) {
        $('#required-captcha').removeClass('hide');
     } 
     else{
        $('#required-captcha').addClass('hide');
      }
      $('.reg-inp').each(function(){
            if($(this).val()==""){
                  if($(this).attr('type')=='password'){
                        $(this).parent().parent().find('.required').removeClass('hide');
                  }
                        $(this).parent().find('.required').removeClass('hide');
                  }
                  else{
                        if($(this).attr('type')=='password'){
                            $(this).parent().parent().find('.required').addClass('hide');
                        console.log(countFilds)

                        }
                        else{
                            $(this).parent().find('.required').addClass('hide');
                        console.log(countFilds)
                      }
                  }
                  if($(this).attr('data-name')==1){
                        countFilds++
                  }
            })

            if(countFilds==4 && response.length>0){
                        let name=$('#reg-name').val()
                        let mail=$('#reg-mail').val()
                        let pass=$('#reg-pass').val()
                        let agree=$('.check').attr('data-name')
             
                       $.ajax({
                         type: "post",
                         url: "register-login/form.php",
                         data: {user_name: name, user_mail: mail, user_pass: pass, user_agree: agree },
                         success: function(res){
                             $("#newSignUP").html(res)
                             $('#modal-footer').hide()
                             setTimeout(function(){ location.reload()},3200)
                         }
                       })
                  }
})
$('#remember-inp').on('change', function(){
      if($(this).is(':checked')){
             $(this).attr('data-name', 1)
      }
      else{
            $(this).attr('data-name', 0)
      }
})
$('#login-icon-lock').on('click', function(){
      let inp=$(this).parent().parent().find('input')
      if (inp.attr('type') == 'password'){
            $(this).find('img').attr('src','assets/icons/icon-look.png');
            $(inp).attr('type', 'text');
            console.log('inp')
      } else {
            $(this).find('img').attr('src','assets/icons/icon-lock.png');
           $(inp).attr('type', 'password');
      }
      return false;
});
 function ValidateEmail(email) {
      var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      return expr.test(email);
}

 $('.log-inp').on('input', function(){
            let valLngt=$(this).val().length
            let min=$(this).attr('min')
            let max=$(this).attr('max')
            let lng=$(this).attr('data-lng')
            let errorEmail, errorPass;
            if(lng=='en'){
               errorEmail='Please enter the valid e-mail.'
               errorPass='Pleases enter '+min+' - '+max+' characters.'
            }
            else if(lng=='ru'){
                errorEmail='Пожалуйста, введите действующий e-mail.'
                errorPass='Пожалуйста, введите '+min+' - '+max+' символ.'
            }
            else if(lng=='am'){
                errorEmail='Խնդրում ենք մուտքագրել վավեր էլ.փոստ'
                errorPass='Խնդրում ենք մուտքագրել '+min+' - '+max+' նիշ'
            }
            else{
                errorEmail='Please enter the valid e-mail.'
                errorPass='Pleases enter '+min+' - '+max+' characters.'
            }

            if($(this).attr('type')=='email'){
                  let mail=$('#log-mail').val()
                  if(!ValidateEmail(mail)){
                        $('.invalid-mail').html(errorEmail)
                        $(this).attr('data-name', 0)
                  }
                  else{
                       $('.invalid-mail').html('')
                       $(this).attr('data-name', 1)
                  }
            }
            else{
              if(valLngt<min || valLngt>max || valLngt===0){
                  $(this).parent().parent().find('.required').addClass('hide');
                  $(this).parent().parent().find('.invalid-inp').html(errorPass)
                  $(this).attr('data-name', 0)
            }
            else{
                  $(this).parent().parent().find('.invalid-inp').html('')
                  $(this).parent().parent().find('.required').addClass('hide');
                  $(this).attr('data-name', 1)
            }
            }
      })

  $(document).on('bind', 'keypress', function(e) {
      if($('#signIn').hasClass('show')){
        if(e.which==13){
            $('#log-in').trigger('click');
        }
      }
    });

 $('#log-in').on('click', function(){
      let countFilds=0

      $('.log-inp').each(function(){
            if($(this).val()==""){
                  if($(this).attr('type')=='password'){
                        $(this).parent().parent().find('.required').removeClass('hide');
                  }
                        $(this).parent().find('.required').removeClass('hide');
                  }
                  else{
                        if($(this).attr('type')=='password'){
                            $(this).parent().parent().find('.required').addClass('hide');
                        }
                        else{
                            $(this).parent().find('.required').addClass('hide');
                      }
                  }
                  if($(this).attr('data-name')==1){
                        countFilds++
                  }
            })
            if(countFilds==2){
                        let remember=$('#remember-inp').prop('checked')
                        let mail=$('#log-mail').val()
                        let pass=$('#log-pass').val()
                       $.ajax({
                         type: "post",
                         url: "register-login/login-form.php",
                         data: {user_mail: mail, user_pass: pass, user_remember: remember },
                         success: function(res){
                             $(".result").html(res)
                         }
                       })
                  }
})

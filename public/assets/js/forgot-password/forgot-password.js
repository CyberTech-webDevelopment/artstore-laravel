$(function(){
    $("#for-got-pass").on('click', function(event){
        let mail=$('#send-mail').val()
        let lng=$(this).attr('data-lng')
        let message;
        console.log(mail)
        if(mail==''){
          event.preventDefault()
          lng=='en' ? message='Email field is required' :
          lng=='ru' ? message='Поле электронной почты обязательно' :
          lng=='am' ? message='էլ. փոստի դաշտը պարտադիր է' : message='Email field is required'
          $('.invalid-inp').html(message)
        }
        else{

        }

    })

})

$(document).ready(function(){
    $("#for-got-pass").click(function(){
        let mail=$('#send-mail').val()
        console.log(mail)
       $.ajax({
                type: "post",
                url: "forgot-password/reset-password.php",
                data: {email: mail},
                success: function(res){
                    $(".result-send-mail").html(res)
                }
            })
    })
    
})
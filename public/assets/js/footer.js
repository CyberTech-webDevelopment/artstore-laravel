$(function(){
$('.news-submit').on('click', function(){
    let message=$(this).next()
    let email=$('.email-inp').val()
    let url=$('.subscribe').val()
    let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
    if(email!==''){
       pattern.test(email) ?
             $.ajax({
                 method: 'post',
                 url: url,
                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                 data: {email},
                 dataType: 'json',
                 success: function(res){
                     if(res.insert){
                        message.html(res.insert)
                         setTimeout(function(){$('.email-message').html('')},1000)
                     }
                     else if(res.isset){
                        message.html(res.isset)
                     }
                     else{
                        message.html(res.no)
                     }
                 }
             })
             : message.html('Invalid email')
    }
    else{
        message.html('Please fill fild')
    }

})
})

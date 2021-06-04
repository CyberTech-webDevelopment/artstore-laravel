  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel-shop-3").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      320:{
        items: 2
      },
      425: {
        items: 2
      },
      768: {
        items: 2
      },
      1024: {
        items: 3
      },
      1440: {
        items: 5
      }
    }
  });

  $('.caret-left').hide()
  $('.caret').click(function(){
      if($(this).hasClass('start-anim')){
           $( ".anim-div" ).animate({width: "70%", background: 'red'}, 100 );
           $('.caret-right').hide(200)
           $('.caret-left').show(200)
           $('.avatar-cont').addClass('display-none')
           $('.banner-right-div').addClass('display-none')
           $('.white-starts-cont').show()
      }
      else{
          $( ".anim-div" ).animate({width: '214px', background: 'red'}, 200 );
           $('.white-starts-cont').hide(200)
           $('.caret-right').show(200)
           $('.caret-left').hide(200)
           $('.avatar-cont').removeClass('display-none')
           $('.banner-right-div').removeClass('display-none')
      }
  })



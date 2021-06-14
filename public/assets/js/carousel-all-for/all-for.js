// display absolute div

$(document).ready(function () {

    $(".abs-center").hover(function () {
        $(this).parent().find(".img-main").css('filter', 'brightness(0.4)');
        $(this).css('display', 'block');
    }, function () {
        // on mouseout, reset the background colour
        $(this).parent().find(".img-main").css('filter', 'brightness(1)');
        $(this).css('display', 'none');

    });

    $(".img-main").hover(function () {
        $(this).css('filter', 'brightness(0.4)');
        $(this).parent().find('.abs-center').css('display', 'block');
    }, function () {
        // on mouseout, reset the background colour
        $(this).css('filter', 'brightness(1)');
        $(this).parent().find('.abs-center').css('display', 'none');

    });

    // top slide part

    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("m-sl");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 4000);
    }

    // pagination active

    var pageItem = $(".pagination li").not(".prev,.next");
    var prev = $(".pagination li.prev");
    var next = $(".pagination li.next");

    pageItem.click(function () {
        pageItem.removeClass("active");
        $(this).not(".prev,.next").addClass("active");
    });

    next.click(function () {
        $('li.active').removeClass('active').next().addClass('active');
    });

    prev.click(function () {
        $('li.active').removeClass('active').prev().addClass('active');
    });

});

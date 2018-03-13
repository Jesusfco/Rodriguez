$(document).ready(function() {

    for (var x = 0; x < sliderCount; x++) {
        if (x == 0) $(".slider-circles").append("<div class='active' onclick='selectImgSlider(" + x + ")'></div>");
        else
            $(".slider-circles").append("<div onclick='selectImgSlider(" + x + ")'></div>");
    }



    $('.img-container .slider-piece:gt(0)').hide();
    $('.img-container .slider-piece:gt(0) .img .sliderText').addClass('sliderTextAnimation');

    setInterval(function() {

        slider();
    }, 10000);

});

var sliderCount = $(".img-container .slider-piece").length;
var sliderSelect = 0;
var button = 0;

function slider() {
    if (button === 0) {
        sliderCircleBasic();
        $('.slider-piece:first-child').fadeOut(1000)
            .next('.slider-piece').fadeIn(1000)
            .end().appendTo('.slider .img-container');

        textAnimations();

    } else {
        button = 0;
    }
}

function textAnimations() {
    setTimeout(function() {
        // $('#slider-piece:last-child .img .sliderText').addClass('sliderTextAnimation');
        // $('#slider-piece:first-child .img .sliderText').removeClass('sliderTextAnimation')
    }, 500);
}

function sliderNext() {
    sliderCircleBasic();
    $('.slider-piece:first-child').fadeOut(500)
        .next('.slider-piece').fadeIn(500)
        .end().appendTo('.slider .img-container');
    button = 1;

    textAnimations();
}

function sliderBefore() {
    sliderCircleBasicReturn();
    $('.slider-piece:last-child').prependTo('.slider .img-container').fadeIn(500);
    $('.slider-piece:nth-child(2)').fadeOut();

    setTimeout(function() {
        $('#slider-piece:nth-child(2) .img .sliderText').addClass('sliderTextAnimation');
        $('#slider-piece:first-child .img .sliderText').removeClass('sliderTextAnimation')
    }, 500);

    button = 1;
}

function selectImgSlider(img) {

    for (var x = 0; sliderSelect !== img; x++) {
        $('.img-container .slider-piece:first-child').fadeOut(0)
            .next('.slider-piece').fadeIn(0)
            .end().appendTo('.img-container');

        // $('.slider-piece:first-child .img .sliderText').addClass('sliderTextAnimation');


        sliderCircleBasic();
    }

    // textAnimations();

    button = 1;
}

function sliderCircleBasic() {
    sliderSelect++;
    if (sliderSelect == sliderCount) sliderSelect = 0;

    $('.slider-circles div:nth-child(' + (sliderSelect + 1) + ')').addClass('active');
    if (sliderSelect == 0) {
        $('.slider-circles div:nth-child(' + sliderCount + ')').removeClass('active');
    } else {
        $('.slider-circles div:nth-child(' + sliderSelect + ')').removeClass('active');
    }
}

function sliderCircleBasicReturn() {
    sliderSelect--;
    if (sliderSelect == -1) sliderSelect = sliderCount - 1;

    $('.slider-circles div:nth-child(' + (sliderSelect + 1) + ')').addClass('active');
    if (sliderSelect == (sliderCount - 1)) {
        $('.slider-circles div:nth-child(1)').removeClass('active');
    } else {
        $('.slider-circles div:nth-child(' + (sliderSelect + 2) + ')').removeClass('active');
    }
}

$(window).resize(function() {
    // $('.slider-img').css('height', $('.slider-img div img').height());
});
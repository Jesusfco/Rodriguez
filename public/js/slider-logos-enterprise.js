$(document).ready(function() {
    var sliderLogoWidth = $('.enterprise-slider-container div').innerWidth();
    var sliderLogoLenght = $('.enterprise-slider-container div').length;

    $('.enterprise-slider-container').width(sliderLogoLenght * sliderLogoWidth);

    setInterval(moveRight, 4000);
});

$(document).resize(function() {
    var sliderLogoWidth = $('.enterprise-slider-container div').innerWidth();
    var sliderLogoLenght = $('.enterprise-slider-container div').length;

    $('.enterprise-slider-container').width(sliderLogoLenght * sliderLogoWidth);
});


function moveRight() {
    $('.enterprise-slider-container').animate({
        left: -$('.enterprise-slider-container div').innerWidth()
    }, 1000, function() {
        $('.enterprise-slider-container div:first-child').appendTo('.enterprise-slider-container');
        $('.enterprise-slider-container').css('left', '');
    });
};
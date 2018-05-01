var logoSliderInterval;

$(document).ready(function() {
    var sliderLogoWidth = $('.enterprise-slider-container div').innerWidth();
    var sliderLogoLenght = $('.enterprise-slider-container div').length;

    $('.enterprise-slider-container').width(sliderLogoLenght * sliderLogoWidth);

    logoSliderInterval = setInterval(moveRight, 3000);
});

$(document).resize(function() {
    var sliderLogoWidth = $('.enterprise-slider-container div').innerWidth();
    var sliderLogoLenght = $('.enterprise-slider-container div').length;

    $('.enterprise-slider-container').width(sliderLogoLenght * sliderLogoWidth);
});


function moveRight() {
    if (touchSlider == 1) return;
    $('.enterprise-slider-container').animate({
        left: -$('.enterprise-slider-container div').innerWidth()
    }, 500, function() {
        $('.enterprise-slider-container div:first-child').appendTo('.enterprise-slider-container');
        $('.enterprise-slider-container').css('left', '');
    });
};

var touchSlider = 0;
var startingX;
var change;
var countPassedSlider = 0;

function sliderTouchStart(event) {
    touchSlider = 1;
    startingX = event.touches[0].clientX;

    clearInterval(logoSliderInterval);
}

function sliderTouchMove(event) {

    touchSlider = 1;

    var widthPiece = $('.enterprise-slider-container div').innerWidth();
    var touch = event.touches[0];
    change = startingX - touch.clientX;



    if (change >= widthPiece / 2) {

        if (countPassedSlider == 0)
            countPassedSlider = 1;

        if (change >= (widthPiece / 2) * 3)
            countPassedSlider = 2;

        $('.enterprise-slider-container').css('left', -change);

    } else if (change < 0) {

        if (countPassedSlider == 0) {

            countPassedSlider = -1;
            $('.enterprise-slider-container div:last-child').prependTo('.enterprise-slider-container');

        } else if (-change >= widthPiece && countPassedSlider == -1) {

            countPassedSlider = -2;
            $('.enterprise-slider-container div:last-child').prependTo('.enterprise-slider-container');

        }

        $('.enterprise-slider-container').css('left', (-change) + (widthPiece * (countPassedSlider)));

    } else if (change >= 0 && change < widthPiece) {
        countPassedSlider = 0;
        $('.enterprise-slider-container').css('left', -change);
    }




}

function sliderTouchEnd(event) {

    var changeEnd = startingX - event.changedTouches[0].clientX;
    var widthPiece = $('.enterprise-slider-container div').innerWidth();

    //LOGICA SI NO PASA LA MITAD LO RESTABLECE
    if (changeEnd < widthPiece / 2 && changeEnd > -widthPiece / 2) {

        if (countPassedSlider == 0) {


            $('.enterprise-slider-container').animate({
                left: -0
            }, 300, function() {
                //$('.enterprise-slider-container div:first-child').appendTo('.enterprise-slider-container');
                //$('.enterprise-slider-container').css('left', '');
            });

        } else if (countPassedSlider < 0) {
            $('.enterprise-slider-container').animate({
                left: -widthPiece
            }, 300, function() {
                $('.enterprise-slider-container div:first-child').appendTo('.enterprise-slider-container');
                $('.enterprise-slider-container').css('left', '');
            });
        }
    }

    //SI PASA MAS DE LA MITAD A LA DERECHA
    else if (changeEnd >= widthPiece / 2) {

        $('.enterprise-slider-container').animate({
            left: -widthPiece * (countPassedSlider)
        }, 300, function() {

            for (var i = 0; i < countPassedSlider + 1; i++) {
                $('.enterprise-slider-container div:first-child').appendTo('.enterprise-slider-container');
            }

            $('.enterprise-slider-container').css('left', '');
        });

    } else if (changeEnd <= -widthPiece / 2) {

        $('.enterprise-slider-container').animate({
            left: ''
        }, 300, function() {

        });
    }


    touchSlider = 0;
    countPassedSlider = 0;

    logoSliderInterval = setInterval(moveRight, 3000);
}
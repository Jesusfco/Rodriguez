$(document).ready(function() {

    setTimeout(function() {
        $('.loader ul').removeClass('hidden');
    }, 600);
    setTimeout(function() {
        $('.loader p').removeClass('hidden');
    }, 2000);


    // $('.loader')KU

    // setInterval(changeColor(), 4000);K


    setTimeout(function() {
        $('.loader').fadeOut(1000);
    }, 4000);

    // setInterval(function() { changeColor(); }, 6000);
});

$(window).load(function() {
    // $('.loader').fadeOut(500);
});


function changeColor() {

    console.log('cambiando color');
    setTimeout(function() {
        $('.loader').css('background', 'rgb(26, 32, 53)');
    }, 000);

    setTimeout(function() {
        $('.loader').css('background', 'rgb(28, 8, 37)');
    }, 2000);

    setTimeout(function() {
        $('.loader').css('background', 'rgb(45, 19, 0)');
    }, 4000);
}
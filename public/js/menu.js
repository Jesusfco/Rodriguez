$(window).scroll(function() {

    var st = $(this).scrollTop();
    var sb = st + $(this).height();
    console.log('Ventana Top: ' + st + ' Bottom: ' + sb);
    if (st > 70) {
        $('nav').css({ 'height': 60, 'background': 'rgba(0, 58, 102, 0.75)' });
    } else {
        $('nav').css({ 'height': 100, 'background': 'rgba(0, 58, 102, 1)' });
    }

});

$(document).ready(function() {
    $('#nav-icon').click(function() {
        $(this).toggleClass('open');
    });
});
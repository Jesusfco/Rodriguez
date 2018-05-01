$(window).scroll(function() {

    var st = $(this).scrollTop();
    var sb = st + $(this).height();

    if (st > 70) {
        $('nav').css({ 'height': 60, 'background': 'rgba(0, 58, 102, 0.75)' });
    } else {
        $('nav').css({ 'height': 100, 'background': 'rgba(0, 58, 102, 1)' });
    }

});
var menuClick = 0;


$(document).ready(function() {
    $('#nav-icon').click(function() {

        if (menuClick == 0) {
            $(this).toggleClass('open');

            $('.movMenu').toggleClass('hidden');

            setTimeout(function() { $('.movMenu li:nth-child(1)').toggleClass('hidden'); }, 300);
            setTimeout(function() { $('.movMenu li:nth-child(2)').toggleClass('hidden'); }, 400);
            setTimeout(function() { $('.movMenu li:nth-child(3)').toggleClass('hidden'); }, 500);
            setTimeout(function() { $('.movMenu li:nth-child(4)').toggleClass('hidden'); }, 600);
            setTimeout(function() { $('.movMenu li:nth-child(5)').toggleClass('hidden'); }, 700);
            menuClick++;
            return;
        } else {
            $(this).toggleClass('open');

            setTimeout(function() { $('.movMenu li:nth-child(1)').toggleClass('hidden'); }, 0);
            setTimeout(function() { $('.movMenu li:nth-child(2)').toggleClass('hidden'); }, 100);
            setTimeout(function() { $('.movMenu li:nth-child(3)').toggleClass('hidden'); }, 200);
            setTimeout(function() { $('.movMenu li:nth-child(4)').toggleClass('hidden'); }, 300);
            setTimeout(function() { $('.movMenu li:nth-child(5)').toggleClass('hidden'); }, 400);

            setTimeout(function() { $('.movMenu').toggleClass('hidden'); }, 300);
            menuClick = 0;
        }


    });
});


var menuStartingX;

menuTargetStart(event) {
    menuStartingX = event.touches[0].clientX;
}

menuTargetMove(event) {

}

menuTargetEnd(event) {

}
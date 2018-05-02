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
var menuTargetPosition;

$(document).ready(function() {
    menuTargetPosition = $('#menuTarget').position().left;
    $('#nav-icon').click(function() {

        if (menuClick == 0) {
            $(this).toggleClass('open');

            $('.movMenu').toggleClass('hidden');

            setTimeout(function() { $('.movMenu li:nth-child(1)').toggleClass('hidden'); }, 300);
            setTimeout(function() { $('.movMenu li:nth-child(2)').toggleClass('hidden'); }, 400);
            setTimeout(function() { $('.movMenu li:nth-child(3)').toggleClass('hidden'); }, 500);
            setTimeout(function() { $('.movMenu li:nth-child(4)').toggleClass('hidden'); }, 600);
            setTimeout(function() { $('.movMenu li:nth-child(5)').toggleClass('hidden'); }, 700);
            $('#menuTarget').css('right', 250);
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
            $('#menuTarget').css('right', 0);
            menuClick = 0;
        }


    });
});


var menuStartingX;

function menuTargetStart(event) {
    menuStartingX = event.touches[0].clientX;
}

function menuTargetMove(event) {
    
    var touch = event.touches[0];
    var change = menuStartingX - touch.clientX;
    
    //console.log("MOVE: " + change);
    if(change > 250){
        return;
    }

    if(change >= 50 ) {
        if(menuClick == 0)
            openMenu();    
    }

    else if (change < 50 && change >= 0) {
        if(menuClick == 1) 
            closeMenu();
    }

    else if(change <= -50 ) {
        if(menuClick == 1) 
            closeMenu();

    } else if(change > -50 && change < 50) {
        if(menuClick == 0) 
            openMenu();
    }

    // $('#menuTarget').css('right', change);

    if(change < 0) {
        $('.movMenu').css('transform', "translateX(" + (-change) + "px)");
    } else {
            if($("#menuTarget").position().left < menuTargetPosition) return;
        $('.movMenu').css('transform', "translateX(" + (250 - change) + "px)");
    }
     
    
    $('.movMenu').addClass("transUnset");
}

function menuTargetEnd(event) {
    
    var changeEnd = menuStartingX - event.changedTouches[0].clientX;    

    $('.movMenu').removeClass("transUnset");
    if(changeEnd >= 50) {

        $('.movMenu').removeClass('hidden');
        $('.movMenu').css({'transform': "", "transition": ""});
        $('#menuTarget').css('right', 250);

    } else if(changeEnd < 50 && changeEnd >= 0) {

        $('.movMenu').css({'transform': "", "transition": ""});
        $('#menuTarget').css('right', 0);

    }

    else if(changeEnd <= -50) {

        $('.movMenu').addClass('hidden');        
        $('.movMenu').css({'transform': "", "transition": ""});
        $('#menuTarget').css('right', 0);

    } else if(changeEnd > -50 && changeEnd < 0) {

        $('.movMenu').css({'transform': "", "transition": ""});
        $('#menuTarget').css('right', 250);

     }
}

function openMenu(){                            
        
        $('#nav-icon').addClass('open');                                    
        setTimeout(function() { $('.movMenu li:nth-child(1)').removeClass('hidden'); }, 300);
        setTimeout(function() { $('.movMenu li:nth-child(2)').removeClass('hidden'); }, 400);
        setTimeout(function() { $('.movMenu li:nth-child(3)').removeClass('hidden'); }, 500);
        setTimeout(function() { $('.movMenu li:nth-child(4)').removeClass('hidden'); }, 600);
        setTimeout(function() { $('.movMenu li:nth-child(5)').removeClass('hidden'); }, 700);
        menuClick++;
}

function closeMenu(){
    $('#nav-icon').removeClass('open');                                    
    setTimeout(function() { $('.movMenu li:nth-child(1)').addClass('hidden'); }, 300);
    setTimeout(function() { $('.movMenu li:nth-child(2)').addClass('hidden'); }, 400);
    setTimeout(function() { $('.movMenu li:nth-child(3)').addClass('hidden'); }, 500);
    setTimeout(function() { $('.movMenu li:nth-child(4)').addClass('hidden'); }, 600);
    setTimeout(function() { $('.movMenu li:nth-child(5)').addClass('hidden'); }, 700);
    menuClick--;
}
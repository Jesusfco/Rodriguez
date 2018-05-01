$('.programDiv:nth-child(1)').waypoint(function(direction) {
    if (direction == 'down')
        $('.programDiv:nth-child(1)').removeClass('hidden');
    else {
        $('.programDiv:nth-child(1)').addClass('hidden');
    }
}, { offset: '90%' });

$('.programDiv:nth-child(2)').waypoint(function(direction) {
    if (direction == 'down')
        $('.programDiv:nth-child(2)').removeClass('hidden');
    else {
        $('.programDiv:nth-child(2)').addClass('hidden');
    }
}, { offset: '85%' });

$('.programDiv:nth-child(3)').waypoint(function(direction) {
    if (direction == 'down')
        $('.programDiv:nth-child(3)').removeClass('hidden');
    else {
        $('.programDiv:nth-child(3)').addClass('hidden');
    }
}, { offset: '80%' });

$('.programDiv:nth-child(4)').waypoint(function(direction) {
    if (direction == 'down')
        $('.programDiv:nth-child(4)').removeClass('hidden');
    else {
        $('.programDiv:nth-child(4)').addClass('hidden');
    }
}, { offset: '75%' });


$('.codeHability').waypoint(function(direction) {

    if (direction == 'down') {

        var cavHTML = document.getElementById("html");
        var cavJS = document.getElementById("js");
        var cavPHP = document.getElementById("php");
        var cavJ = document.getElementById("java");
        var cavPY = document.getElementById("python");

        generateBarProgressLenguages(cavHTML, 95);
        generateBarProgressLenguages(cavJS, 85);
        generateBarProgressLenguages(cavPHP, 90);
        generateBarProgressLenguages(cavJ, 60);
        generateBarProgressLenguages(cavPY, 45);

    } else {
        $('.servicios-piece:nth-child(1)').addClass('hidden');
    }
}, { offset: '75%' });


$('.servicios-piece:nth-child(1)').waypoint(function(direction) {
    if (direction == 'down')
        $('.servicios-piece:nth-child(1)').removeClass('hidden');
    else {
        $('.servicios-piece:nth-child(1)').addClass('hidden');
    }
}, { offset: '75%' });




$('.servicios-piece:nth-child(2)').waypoint(function(direction) {
    if (direction == 'down')
        $('.servicios-piece:nth-child(2)').removeClass('hidden');
    else {
        $('.servicios-piece:nth-child(2)').addClass('hidden');
    }
}, { offset: '75%' });



$('.servicios-piece:nth-child(3)').waypoint(function(direction) {
    if (direction == 'down')
        $('.servicios-piece:nth-child(3)').removeClass('hidden');
    else {
        $('.servicios-piece:nth-child(3)').addClass('hidden');
    }
}, { offset: '75%' });



$('.timeline .container:nth-child(1) .content').waypoint(function(direction) {
    if (direction == 'down')
        $('.timeline .container:nth-child(1) .content').removeClass('hidden');
    else {
        $('.timeline .container:nth-child(1) .content').addClass('hidden');
    }
}, { offset: '70%' });

$('.timeline .container:nth-child(2) .content').waypoint(function(direction) {
    if (direction == 'down')
        $('.timeline .container:nth-child(2) .content').removeClass('hidden');
    else {
        $('.timeline .container:nth-child(2) .content').addClass('hidden');
    }
}, { offset: '70%' });

$('.timeline .container:nth-child(3) .content').waypoint(function(direction) {
    if (direction == 'down')
        $('.timeline .container:nth-child(3) .content').removeClass('hidden');
    else {
        $('.timeline .container:nth-child(3) .content').addClass('hidden');
    }
}, { offset: '70%' });

$('.timeline .container:nth-child(4) .content').waypoint(function(direction) {
    if (direction == 'down')
        $('.timeline .container:nth-child(4) .content').removeClass('hidden');
    else {
        $('.timeline .container:nth-child(4) .content').addClass('hidden');
    }
}, { offset: '70%' });

$('.formContact').waypoint(function(direction) {
    if (direction == 'down')
        $('.formContact').removeClass('hidden');
    else {
        $('.formContact').addClass('hidden');
    }
}, { offset: '95%' });
$('.servicios-piece:nth-child(1)').waypoint(function(direction) {
	if(direction == 'down')
		$('.servicios-piece:nth-child(1)').removeClass('hidden');
	else {
		$('.servicios-piece:nth-child(1)').addClass('hidden');
	}	
}, { offset: '75%'});
$('.servicios-piece:nth-child(2)').waypoint(function(direction) {
	if(direction == 'down')
		$('.servicios-piece:nth-child(2)').removeClass('hidden');
	else {
		$('.servicios-piece:nth-child(2)').addClass('hidden');
	}		
}, { offset: '75%'});

$('.servicios-piece:nth-child(3)').waypoint(function(direction) {
	if(direction == 'down')
		$('.servicios-piece:nth-child(3)').removeClass('hidden');
	else {
		$('.servicios-piece:nth-child(3)').addClass('hidden');
	}	
}, { offset: '75%'});

$('.timeline .container:nth-child(1) .content').waypoint(function(direction) {
	if(direction == 'down')
		$('.timeline .container:nth-child(1) .content').removeClass('hidden');
	else {
		$('.timeline .container:nth-child(1) .content').addClass('hidden');
	}	
}, { offset: '70%'});

$('.timeline .container:nth-child(2) .content').waypoint(function(direction) {
	if(direction == 'down')
		$('.timeline .container:nth-child(2) .content').removeClass('hidden');
	else {
		$('.timeline .container:nth-child(2) .content').addClass('hidden');
	}	
}, { offset: '70%'});

$('.timeline .container:nth-child(3) .content').waypoint(function(direction) {
	if(direction == 'down')
		$('.timeline .container:nth-child(3) .content').removeClass('hidden');
	else {
		$('.timeline .container:nth-child(3) .content').addClass('hidden');
	}	
}, { offset: '70%'});

$('.timeline .container:nth-child(4) .content').waypoint(function(direction) {
	if(direction == 'down')
		$('.timeline .container:nth-child(4) .content').removeClass('hidden');
	else {
		$('.timeline .container:nth-child(4) .content').addClass('hidden');
	}	
}, { offset: '70%'});

$('.formContact').waypoint(function(direction) {
	if(direction == 'down')
		$('.formContact').removeClass('hidden');
	else {
		$('.formContact').addClass('hidden');
	}	
}, { offset: '95%'});
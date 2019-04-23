
$('.card').hover(function () {
	$(this).find('.card-action').fadeIn().addClass('animated flipInX');
});
$('.card').mouseleave(function () {
	$(this).find('.card-action').fadeOut().removeClass('animated flipInX');
});

window.sr = ScrollReveal();
sr.reveal('.r0',{origin: 'top',distance: '10%'},50);
sr.reveal('.r1',{origin: 'right',distance: '10%',scale: 0.1,},50);
sr.reveal('.r2',{origin: 'left',distance: '10%',scale: 0.1,},50);
sr.reveal('.r3',{origin: 'right',distance: '10%',scale: 0.1,},50);
sr.reveal('.r4',{origin: 'left',distance: '10%',scale: 0.1,},50);
sr.reveal('.r5',{origin: 'right',distance: '10%'},50);
sr.reveal('.r6',{origin: 'bottom',distance: '10%'},50);			

$("a[href$='#skills']").on('click',skillReveal); //using function skillReveal with Textillate

var topOfSkills = $('#skills').offset().top; //finds offset of skills

$(window).scroll(function() {
	if($(window).scrollTop() > topOfSkills - 600) {
		skillReveal();
		$('.triBlue-btn').fadeIn();
	}
});

function skillReveal() {
	$('.chip').fadeIn();
	$('.chip-txt').textillate({});
}

//Starting Functions for Logo and SideNav (mobile)
$(function() {
	$('#collab').modal();
	//Right Nav (desktop) will have random paddings of the left
	$('.rightNav a').children('h4').each(function(){
		$r = Math.random() * 3;
		$val = $r + "em";
		$(this).css('padding-left', $val);
	});

	$(".button-collapse").sideNav(); //Start sideNav
	$('#logo').fadeIn(3000); //Fadein Logo

	if ($(window).width() <= 978){
		$("#nav").fadeIn(1000);
	}
	
	var topOfOthDiv = $('#logo').offset().top;

	$(window).scroll(function() {
		if($(window).scrollTop() > topOfOthDiv) { //scrolled past logo
			$("#nav").fadeIn(1000); //fadein nav button
		}				
		if($(window).scrollTop() < topOfOthDiv && $(window).width() >= 978) {
			$("#nav").fadeOut(500); //fadeOut nav button
		}
	
	});
	
});

//Close Nav Button
$('#closeNav, .page-scroll').on('click',function(){
	$('#closeNav').sideNav('hide');
});

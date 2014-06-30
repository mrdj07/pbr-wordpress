(function ($) {

/* ===================== */
/* NICESCROLL */
/* ===================== */
$(document).ready(function(){
	$("body").niceScroll();
});

/* ===================== */
/* OWL CAROUSEL */
/* ===================== */
$(document).ready(function(){ 
	$("#owlcarousel").owlCarousel({
	navigation : false,
	slideSpeed : 300,
	paginationSpeed : 400,
	singleItem:true,
	paginationNumbers:true,
	navigationText:['«','»']
	});
});
	
/* ============================ */
/* WAYPOINTS */
/* ============================ */
$(document).ready(function(){
	$('.section-content.spectacles').waypoint(function(direction) {
		if (direction == 'down'){
			$('.navig-item.spectacles').addClass('active');
		} else if (direction == 'up'){
			$('.navig-item.spectacles').removeClass('active');
		}
	}, { offset:50});
	
	$('.section-content.videos').waypoint(function(direction) {
		if (direction == 'down'){
			$('.navig-item.spectacles').removeClass('active');
			$('.navig-item.videos').addClass('active');
		} else if (direction == 'up'){
			$('.navig-item.spectacles').addClass('active');
			$('.navig-item.videos').removeClass('active');
		}
	}, { offset:50});
	
	$('.section-content.nouvelles').waypoint(function(direction) {
		if (direction == 'down'){
			$('.navig-item.videos').removeClass('active');
			$('.navig-item.nouvelles').addClass('active');
		} else if (direction == 'up'){
			$('.navig-item.videos').addClass('active');
			$('.navig-item.nouvelles').removeClass('active');
		}
	}, { offset:50});
	
	$('.section-content.bio').waypoint(function(direction) {
		if (direction == 'down'){
			$('.navig-item.nouvelles').removeClass('active');
			$('.navig-item.bio').addClass('active');
		} else if (direction == 'up'){
			$('.navig-item.nouvelles').addClass('active');
			$('.navig-item.bio').removeClass('active');
		}
	}, { offset:50});
	
	$('.section-content.contact').waypoint(function(direction) {
		if (direction == 'down'){
			$('.navig-item.bio').removeClass('active')
			$('.navig-item.contact').addClass('active');
		} else if (direction == 'up'){
			$('.navig-item.bio').addClass('active');
			$('.navig-item.contact').removeClass('active');
		}
	}, { offset:50});
});

/* ===================== */
/* CUSTOM */
/* ===================== */

/* Header Tab Toggle */
function headertabtoggle(){
	var windowpos = $(window).scrollTop();
	if (windowpos >= 220) {
		$(".header-wrap").addClass("active");
	} else {
		$(".header-wrap").removeClass("active");
	}
}

$(document).ready(function(){
	headertabtoggle();
	$(window).scroll(function() {
		headertabtoggle();
	});
});

/* Menu Absolute Centering */
function absolutecentering(){
	var menuwidth = $('.navig-wrap-fixed').width();
	$('.navig-wrap-fixed').css('margin-left',-menuwidth/2);
	var menuwrapwidth = $('.header-wrap').width();
	$('.header-wrap').css('margin-left',-menuwrapwidth/2);
};

$(document).ready(function(){
	absolutecentering()
	$(window).resize(function () {
		absolutecentering()
	});
		
});


/* Animate ScrollTo */
$(document).ready(function(){
	$(".header-tab").click(function(event){
		$("html,body").animate({scrollTop:0},500);
	});
	$(".down-arrow-circle").click(function(event){
		$("html,body").animate({scrollTop:$('.section-content.spectacles').offset().top},500);
	});
	$(".navig-item").click(function(event){
		event.preventDefault();
		var clickid = $(this).attr('id');
		var cropid = clickid.slice(0,-2);
		console.log(cropid);			
		switch(cropid){
		case 'spectacles':
			$("html,body").animate({scrollTop:$('.section-content.spectacles').offset().top},500);
			break;
		case 'videos':
			$("html,body").animate({scrollTop:$('.section-content.videos').offset().top},500);
			break;
		case 'nouvelles':
			$("html,body").animate({scrollTop:$('.section-content.nouvelles').offset().top},500);
			break;
		case 'bio':
			$("html,body").animate({scrollTop:$('.section-content.bio').offset().top},500);
			break;
		case 'contact':
			$("html,body").animate({scrollTop:$('.section-content.contact').offset().top},500);
			break;
		}
	});
	$(".contactlink").click(function(event){
		event.preventDefault();
		var circles = $('.circle-wrap').innerHeight();
		$("html,body").scrollTop(s9pos+circles);
	});
});

})(jQuery);
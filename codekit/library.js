/************************************************************************************************/
//
// ! Eigentliche Skripte
//


var rwd_menu = 0;
var cachedWidth = $(window).width();

function resizetrigger() {

	if($("#rwd_menu_link").css("display")==="block") {
		if(rwd_menu===0) {
			rwd_menu = $.jPanelMenu({menu: '#mobile_menu',trigger: '#rwd_menu_link',direction: 'left'});
		}
		if(jQuery("#jPanelMenu-menu").length===0) {
			rwd_menu.on();
		}
	}else{
		if(rwd_menu) {
			rwd_menu.off();
		}
	}

}

/************************************************************************************************/
//
// ! Scroll-Funktionen
//


function scrollToTop() {

	$(window).scrollTop($(window).scrollTop()/1.6);
	if($(window).scrollTop()>5) {
		window.setTimeout(scrollToTop,100);
	}else{
		$(window).scrollTop(0);
	}
}

/************************************************************************************************/
//
// ! Ready
//


jQuery(document).ready(function() {
	
	jQuery("table").wrap('<div class="table" />');
	
	resizetrigger();
	
	$(window).resize( function() { 
		var newWidth = $(window).width();
		if(newWidth !== cachedWidth){
			resizetrigger();	
			cachedWidth = $(window).width();
		}
	} );
	
	$("#top a").click(function(e) {
		e.preventDefault();
		scrollToTop();
	});
	
	$('.magnificPopup').magnificPopup({ 
	  type: 'image',
	  removalDelay: 300,
	  mainClass: 'mfp-fade',
	  gallery: { enabled: true, tCounter: '<span class="mfp-counter">%curr% von %total%</span>' },
	  callbacks: { buildControls: function() { this.contentContainer.append(this.arrowLeft.add(this.arrowRight)); } }
	});	

});
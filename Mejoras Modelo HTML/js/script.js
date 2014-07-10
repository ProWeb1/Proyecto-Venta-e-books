(function(){
 "use strict";

$('.navbar-brand, .top-scroll a').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	|| location.hostname == this.hostname) {

	var target = $(this.hash);
	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	if (target.length) {
	  $('html,body').animate({
		scrollTop: target.offset().top
	  }, 2000);
	  return false;
	}
  }
});
var navbarHeight = $('.navbar').height();
$('a.btnAbout').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
	|| location.hostname == this.hostname) {

	var target = $(this.hash);
	target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	if (target.length) {
	  $('html,body').animate({
		scrollTop: target.offset().top - navbarHeight
	  }, 2000);
	  return false;
	}
  }
});    
//=====================================================================
       
setTimeout(function(){

    $('.progress-bar').each(function() {
        var me = $(this);
        var pe =  $(this).parent().parent().children('.precent-value');
        var perc = me.attr("aria-valuenow");

        var current_perc = 0;

        var progress = setInterval(function() {
            if (current_perc>=perc) {
                clearInterval(progress);
            } else {
                current_perc +=1;
                me.css('width', (current_perc)+'%');
            }

            pe.text((current_perc)+'%');

        }, 20);

    });

},300);
//=================================menu scroll==========================================
$('.navbar-nav').onePageNav({
       scrollOffset: navbarHeight,
	   scrollSpeed:2000,
        scrollThreshold: 0.25
	});
//========================================= portfolio filter =========================================	
	if($().prettyPhoto) {
	
		lightboxPhoto(); 
        imgHover();
	} 			
    

if ($().quicksand) {
// Clone applications to get a second collection
	var $data = $("ul.container_folio").clone();
  // get the action filter option item on page load
  var $filterClass = $('#filterOptions li.cur a').attr('class');
	
  // get and assign the ourHolder element to the
	// $holder varible for use later
  //var $holder = $('ul.ourHolder');

  // clone all items within the pre-assigned $holder element
  //var $data = $holder.clone();

  // attempt to call Quicksand when a filter option
	// item is clicked
	$('#filterOptions li a').click(function(e) {
		// reset the active class on all the buttons
		$('#filterOptions li').removeClass('cur');
		$('#filterOptions li a').removeClass('cur');
	
		// assign the class of the clicked filter option
		// element to our $filterType variable
		/*var $filterType = $(this).attr('class');
		$(this).parent().addClass('actived');
		
		if ($filterType == 'all') {
			// assign all li items to the $filteredData var when
			// the 'All' filter option is clicked
			var $filteredData = $data.find('li');
		} 
		else {
			// find all li elements that have our required $filterType
			// values for the data-type element
			var $filteredData = $data.find('li[data-type=' + $filterType + ']');
		}*/
		// Use the last category class as the category to filter by. This means that multiple categories are not supported (yet)
		var filterClass=$(this).attr('class').split(' ').slice(0)[0];
		$(this).parent().addClass('cur');
      
		if (filterClass == 'all') {
        
			var $filteredData = $data.find('li');
            
		} else {
			var $filteredData = $data.find('li[data-type~=' + filterClass + ']');
		}
		
		$("ul.container_folio").quicksand($filteredData, {
			duration: 800,
			adjustHeight: false,
            easing:'swing'
		}, function () {
        
            lightboxPhoto();
       	    imgHover();
			});
		
		
		$(this).addClass("cur"); 
      
		return false;
	});
    
	   
}

 //============================ function =========================================
    $(".navbar").sticky({ topSpacing: 0 });
  $("[data-gal='tooltip']").tooltip();
imgHover();
lightboxPhoto(); 
navScroll();
winHeight();
  //============================ nav container sticky =========================================

  
})();
$(window).resize(function(){
navScroll();
winHeight();
});
//================================ function ========================================
function imgHover(){
 $('.thumb-img').hover(function(){
     
    $(this).children('.folio-caption').animate({
    bottom:'0px'
    });
     
 }, function(){
    $(this).children('.folio-caption').animate({
    bottom:'-55px'
    });
     
 });   
}

function lightboxPhoto() {
	$("area[data-gal^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:200000, show_title: true, autoplay_slideshow: true});
				$(".gallery:gt(0) a[data-gal^='prettyPhoto']").prettyPhoto({animation_speed:'fast', slideshow:200000, hideflash: true});
		
				$("#custom_content a[data-gal^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[data-gal^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
    
        // $('a.pretty-link').click(function(){
           // $(this).parent().children('div.link').contents().clone().appendTo($('.ppl'));
           // });
	
	}
function navScroll(){
 $(window).scroll(function() {
		   
var top = $(window).scrollTop();
var aboutScroll = $('#aboutMore').offset().top - 184
if (top > aboutScroll) {

$('.btnAbout').css({
'position':'absolute'
});
$('.navbar-inverse').addClass('bg-nav');

}else {
    
$('.btnAbout').css({
'position':'fixed'
});
$('.navbar-inverse').removeClass('bg-nav');
   
}

if (top > 20) {

$('.btnAbout').css({
'position':'absolute'
});


}else {
    
$('.btnAbout').css({
'position':'fixed'
});

   
}

});

}
function winHeight(){
 //==================================== height header============================
var wHeight = $(window).height();
$('.header').height(wHeight); 
}
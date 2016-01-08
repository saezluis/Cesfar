$(document).ready(function() {

	/* MAIN MENU */
	// $('#main-menu > li:has(ul.sub-menu)').addClass('parent');
	// $('ul.sub-menu > li:has(ul.sub-menu) > a').addClass('parent');

	// $('#menu-toggle').click(function() {
	// 	$('#main-menu').slideToggle(300);
	// 	return false;
	// });

	// $(window).resize(function() {
	// 	if ($(window).width() > 700) {
	// 		$('#main-menu').removeAttr('style');
	// 	}
	// });

    // $('.columns').readmore({
    //   moreLink: '<a href="#" class="leer-mas">Leer más</a>',
    //   collapsedHeight: 420,
    //   afterToggle: function(trigger, element, expanded) {
    //     if(! expanded) { // The "Close" link was clicked
    //       $('html, body').animate({scrollTop: $(element).offset().top}, {duration: 100});
    //     }
    //   }
    // });


(function($){
  var ico = $('<i class="fa fa-caret-right"></i>');
  $('nav#menu li:has(ul) > a').append(ico);
  
  $('nav#menu li:has(ul)').on('click',function(){
    $(this).toggleClass('open');
  });
  
  $('a#toggle').on('click',function(e){
    $('html').toggleClass('open-menu');
    return false;
  });
  
  
  $('div#overlay').on('click',function(){
    $('html').removeClass('open-menu');
  })
  
})(jQuery)



});

// $(document).ready(function() {


// var ww = document.body.clientWidth;

// $(document).ready(function() {
// 	$(".nav li a").each(function() {
// 		if ($(this).next().length > 0) {
// 			$(this).addClass("parent");
// 		};
// 	})
	
// 	$(".toggleMenu").click(function(e) {
// 		e.preventDefault();
// 		$(this).toggleClass("active");
// 		$(".nav").toggle();
// 	});
// 	adjustMenu();
// })

// $(window).bind('resize orientationchange', function() {
// 	ww = document.body.clientWidth;
// 	adjustMenu();
// });

// var adjustMenu = function() {
// 	if (ww < 768) {
// 		$(".toggleMenu").css("display", "inline-block");
// 		if (!$(".toggleMenu").hasClass("active")) {
// 			$(".nav").hide();
// 		} else {
// 			$(".nav").show();
// 		}
// 		$(".nav li").unbind('mouseenter mouseleave');
// 		$(".nav li a.parent").unbind('click').bind('click', function(e) {
// 			// must be attached to anchor element to prevent bubbling
// 			e.preventDefault();
// 			$(this).parent("li").toggleClass("hover");
// 		});
// 	} 
// 	else if (ww >= 768) {
// 		$(".toggleMenu").css("display", "none");
// 		$(".nav").show();
// 		$(".nav li").removeClass("hover");
// 		$(".nav li a").unbind('click');
// 		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
// 		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
// 		 	$(this).toggleClass('hover');
// 		});
// 	}
// }







// });
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

//scroll top
//$(document).scrollTop( $("#slide").offset().top );

});



jQuery(document).ready(function(){
  var isMobile = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
  };
         
  if( isMobile.any() ) {
    // alert('mobile device');
    jQuery('body').addClass('mobile');
    $(document).scrollTop( $("#slide").offset().top );
  };

}); 


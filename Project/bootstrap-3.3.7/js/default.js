jQuery(document).ready(function($) {
	var offset = jQuery('.container').offset();
	jQuery('.home-banner .warp-content').css('padding-left',offset.left);
});
jQuery( window ).resize(function() {
	var offset = jQuery('.container').offset();
	jQuery('.home-banner .warp-content').css('padding-left',offset.left);
});
jQuery('.open-menu-mobile').click(function(e){ 
	e.preventDefault();
	jQuery(this).toggleClass('active');
	jQuery('.header-center').slideToggle();
});
jQuery(document).ready(function(){ 
  jQuery("a").on('click', function(event) { 
    if (this.hash !== "") { 
      //event.preventDefault(); 
      var hash = this.hash; 
      jQuery('html, body').animate({
        scrollTop: (jQuery(hash).offset().top -50)
      }, 800, function(){});
    }
  });
  jQuery(".backtotop").click(function() {
	  jQuery("html, body").animate({ scrollTop: 0 }, 800);
	  return false;
	});
	jQuery(window).scroll(function() {
	  var scrollTop = jQuery(window).scrollTop();
	  if ( scrollTop > 300 ) { 
		jQuery(".backtotop").fadeIn();
	  }else{
		jQuery(".backtotop").fadeOut();
	  }
	});
});

window.onscroll = function() {scrollFunction()};
window.load = function() {scrollFunction()};

var navbar = document.getElementById("masthead");
var sticky = navbar.offsetTop;

function scrollFunction() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

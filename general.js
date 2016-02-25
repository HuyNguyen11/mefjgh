$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('.navbar-nav li a ').css('line-height','20px');
    $('.pk-logo-navbar').css('padding','5px 15px');
    $('#custom-search-input').css('margin-top','10px');
  }else {	
  	$('.navbar-nav li a').css('line-height','40px');
  	$('.pk-logo-navbar').css('padding','15px 15px');  	
  	$('#custom-search-input').css('margin-top','20px');
  }
});

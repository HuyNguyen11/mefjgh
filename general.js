$(window).scroll(function() {
	var windowWidth = $(window).width();
	console.log(windowWidth);
	if(windowWidth > 991)
	{	
  if ($(document).scrollTop() > 50 && windowWidth > 991) {
    $('.navbar-nav li a ').css('line-height','20px');
    $('.pk-logo-navbar img').css('margin','5px 15px');
    $('#custom-search-input').css('margin-top','10px');
  }else {	
  	$('.navbar-nav li a').css('line-height','40px');
  	$('.pk-logo-navbar img').css('margin','15px 15px');  	
  	$('#custom-search-input').css('margin-top','20px');
  }
}
});

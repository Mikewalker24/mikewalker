$(function(){


	//slide-out nav
	$('.hamburger').on('click', function() {
		$('.nav').toggleClass('nav-open');
		$('.portfolio-nav').slideToggle(300);
		$('.hamburger').toggleClass('open');
		$('.portfolio-header-title').toggleClass('open');
	});

	//portfolio slide-out nav
	// $('header .hamburger-portfolio').on('click', function() {
	// 	$('.portfolio-nav').toggleClass('portfolio-nav-open');
	// 	console.log('aslgjasg');
	// 	$('header i.hamburger-portfolio').toggleClass('fa-times').toggleClass('fa-bars');
	// });

	//smooth scroll
	$('.nav a, .splash a, .top').on('click', function(e) { 
	//select the anchors
		e.preventDefault(); 
		//prevent the default action
		var target = $(this).attr('href'); 
		//store the value of the link's href in a variable
		$('html, body').animate({ 
		//animate the body
		    scrollTop: $(target).offset().top 
		    //use the pixel distance from the top of the page (offset) and scroll that far
		}, 800); //set the time it takes to get there
	});

});
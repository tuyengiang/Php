/**search**/
$(document).ready(function(){
	$(".bixslider").bxSlider();
	$('#main').slick({
 		 infinite: true,
 		 slidesToShow: 5,
 		 slidesToScroll: 5
		});
});

/**lentop**/
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>300){
			$("#updown").fadeIn(200);
		}else{
			$("#updown").fadeOut(200);
		}
	});
	$(".updown-header").on("click",function(){
		$("html,body").animate({scrollTop:0},600);
		return false; 
	});
});

/**menu**/
$(document).ready(function(){
	if( $(window).width() >= 860 ){
			$(window).scroll(function(){
		if($(this).scrollTop()>200){
			$("#header").addClass(".position");
			
		}else{
			$("#header").addClass(".position");
		}
	})
		}else{
			$("#menu-bar").show();
		}


	$("#menu-bar").on("click" , function(){
		$("#menu-mobile").toggleClass("menu-mobile-effect");
	})
});
//**slick**/


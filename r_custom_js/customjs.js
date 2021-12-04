$(function(){
	
	//scroll
	if(window.location.hash) {  
		var scrollPos = window.location.hash;

		$('html, body').animate({
			scrollTop: $(scrollPos).offset().top
		}, 2000,function(){
			window.location.hash = scrollPos;
		});
	}
	$(".links").on("click",function(){
		var thsHash = $(this).attr("data-hash");

		$('html, body').animate({
			scrollTop: $(thsHash).offset().top
		}, 1000);
	});
	
	//sidebar animate
	$("#menubtn").click(function(congside) {
		congside.preventDefault();
		$("#sidebar").toggleClass("open_congside");
		$("#wholepage_wrapper").toggleClass("open_congside");
	});
	
	//sidebar x icon
	$('#sw_con1menuid').click(function() {
		$("i", this).toggleClass("fa fa-bars fa fa-times");
	});
	
	//js for scroll left or right

	 $('#leftfixed1').simpleScrollFollow({
	    limit_elem: '#rightscroll1'
	  });
	  
	  $('#leftfixed2').simpleScrollFollow({
	    limit_elem: '#rightscroll2'
	  });
	
	//leftside homepage
	checksize();
    
	$(window).resize(function() {
		checksize();
	});
	
	function checksize(){
		if($(document).width() <= "767"){
			$(".manu_bg").css({'right' : '0px'});
			$(".wrapper_bg").css({'right' : '0px'});
		}
		
		else{
		   $(".manu_bg").css({'left' : '80px'});
		   $(".wrapper_bg").css({'left' : '0px'});
		}
	   
	}
	
	function resize(){
		var heights = window.innerHeight;
		document.getElementById("leftfixed1").style.height = heights + "px";
		document.getElementById("leftfixed2").style.height = heights + "px";
		document.getElementById("leftfixed2").style.height = heights + "px";
	}
	resize();
	window.onresize = function() {
		resize();
	};
	
	
	//modal for each porfolio
	$(function(){
		$(".hoverwhite").hover(function(){
			$(this).find(".itemsearch").toggleClass('itemsearchshow');
			$(this).find(".itemdesk").toggleClass('itemdeskshow');
		});
	});
	
	
	

	
});
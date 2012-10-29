$(document).ready(function(){

	  $('.webapp').delay(0).animate(
	      { marginTop: -85 }, // what we are animating
		      0, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
	   });
		
	  var isiPhone = navigator.userAgent.toLowerCase().indexOf("iphone");
	  var isiPad = navigator.userAgent.toLowerCase().indexOf("ipad");
	  var isiPod = navigator.userAgent.toLowerCase().indexOf("ipod");
	  var isiAndroid = navigator.userAgent.toLowerCase().indexOf("android");
	
	  if(isiPhone > -1)
	  {
		  $('.ipod-detected').hide();
		  $('.ipad-detected').hide();
		  $('.iphone-detected').show();
		  $('.android-detected').hide();

		  $('.webapp').delay(0).animate(
			{ marginTop: 0 }, // what we are animating
				0, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
			});
		  
		  $('.webapp').delay(5000).animate(
			{ marginTop: -85 }, // what we are animating
				1000, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
			});	  

	  }
	  if(isiPad > -1)
	  {
		  $('.ipod-detected').hide();
		  $('.ipad-detected').show();
		  $('.iphone-detected').hide();
		  $('.android-detected').hide();
		  
		  $('.webapp').delay(0).animate(
			{ marginTop: 0 }, // what we are animating
				0, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
			});
		  
		  $('.webapp').delay(5000).animate(
			{ marginTop: -85 }, // what we are animating
				1000, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
			});	
		  
	  }
	  if(isiPod > -1)
	  {
		  $('.ipod-detected').show();
		  $('.ipad-detected').hide();
		  $('.iphone-detected').hide();
		  $('.android-detected').hide();
		  
		  $('.webapp').delay(0).animate(
			{ marginTop: 0 }, // what we are animating
				0, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
			});
		  
		  $('.webapp').delay(5000).animate(
			{ marginTop: -85 }, // what we are animating
				1000, // how fast we are animating
				'easeOutExpo', // the type of easing
			function() { // the callback
			});	
		  
	  }   
	  
	  if(isiAndroid > -1)
	  {
		  $('.ipod-detected').hide();
		  $('.ipad-detected').hide();
		  $('.iphone-detected').hide();
		  $('.android-detected').show();
	  }  

	var slider = new Swipe(document.getElementById('slider'));
	$('.next-but-swipe').click(function(){
		slider.prev();
		return false;
	});
	
	$('.prev-but-swipe').click(function(){
		slider.next();
		return false;
	});

	$('.deploy-nav').click(function(){
		$('.header').animate(
			{ marginTop: 240 }, // what we are animating
			1000, // how fast we are animating
			'easeOutBounce', // the type of easing
			function() { // the callback
		});
		$('.deploy-nav').hide();
		$('.hide-nav').show();
		return false;
	});
	
	$('.hide-nav').click(function(){
		$('.header').animate(
			{ marginTop: 0 }, // what we are animating
			1000, // how fast we are animating
			'easeOutExpo', // the type of easing
			function() { // the callback
		});
		$('.hide-nav').hide();
		$('.deploy-nav').show();
		return false;
	});
	
	$('.nav-item').click(function(){
		$('.header').animate(
			{ marginTop: 0 }, // what we are animating
			1000, // how fast we are animating
			'easeOutExpo', // the type of easing
			function() { // the callback
		});
		$('.hide-nav').hide();
		$('.deploy-nav').show();
	});
	
	(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")

	
	$(".notification-quit-red").click(function(){
	  $(".notification-box-red").hide("slow");
	  return false;
	});
	
	$(".notification-quit-green").click(function(){
	  $(".notification-box-green").hide("slow");
	  return false;
	});
	
	$(".notification-quit-yellow").click(function(){
	  $(".notification-box-yellow").hide("slow");
	  return false;
	});
	
	$(".notification-quit-blue").click(function(){
	  $(".notification-box-blue").hide("slow");
	  return false;
	});
	
	$('.close-notification').click(function(){
		$('.header-notification, .header-notification-decoration').hide(300);
	});

	$('.toggle-deploy').click(function(){
		$('.toggle-content').show(200);
		$('.toggle-close').show();
		$('.toggle-deploy').hide();
		return false;
	});
	
	
	$('.toggle-close').click(function(){
		$('.toggle-content').hide(200);
		$('.toggle-close').hide();
		$('.toggle-deploy').show();
		return false;
	});	
	
	$('.checkbox').click(function(){
		$(this).toggleClass('selected-checkbox');
		return false;
	});
	
	$('.checkbox2').click(function(){
		$(this).toggleClass('selected-checkbox2');
		return false;
	});
	
	$('.radiobox').click(function(){
		$(this).toggleClass('selected-radiobox');
		return false;
	});
	
	$('.radiobox2').click(function(){
		$(this).toggleClass('selected-radiobox2');
		return false;
	});
	

var myPhotoSwipe = $("#gallery a, #gallery2 a").photoSwipe({ enableMouseWheel: false , enableKeyboard: false });


});
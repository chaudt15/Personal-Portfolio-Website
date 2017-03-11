// JavaScript Document


 
$.scrollify({
		section : ".panel",
		interstitialSection : "",
		easing: "",
		scrollSpeed: 1500,
		offset : 0,
		scrollbars: false,
		standardScrollElements: "",
		setHeights: true,
		
	});

document.onscroll=function(){
	"use strict";
	readjust();
	};

  function readjust() {
	
var current = $.scrollify.current();
   if(current.hasClass("home")===true) {
    document.getElementById("logo").innerHTML='<img src="http://www.tristanchaudhry.com/images/logo.svg"</img>';
	document.getElementById("logo").style.width = "50%";
	 $('.nav-main li a').each(function() {
        $(this).removeClass('selected');
		$('.nav-main li a#home').addClass('selected');
    });
    } 
	if(current.hasClass("android")===true) {
      document.getElementById("logo").innerHTML='<img src="http://www.tristanchaudhry.com/images/newlogo.svg"</img>';
	document.getElementById("logo").style.width = "15%";
	 $('.nav-main li a').each(function() {
        $(this).removeClass('selected');
		$('.nav-main li a#android').addClass('selected');
    });
    }
	if(current.hasClass("ios")===true) {
      document.getElementById("logo").innerHTML='<img src="http://www.tristanchaudhry.com/images/newlogo.svg"</img>';
	document.getElementById("logo").style.width = "15%";
	 $('.nav-main li a').each(function() {
        $(this).removeClass('selected');
		$('.nav-main li a#ios').addClass('selected');
    });
    }
	if(current.hasClass("web")===true) {
      document.getElementById("logo").innerHTML='<img src="http://www.tristanchaudhry.com/images/newlogo.svg"</img>';
	document.getElementById("logo").style.width = "15%";
	 $('.nav-main li a').each(function() {
        $(this).removeClass('selected');
		$('.nav-main li a#web').addClass('selected');
    });
    }
 if(current.hasClass("about")===true) {
      document.getElementById("logo").innerHTML='<img src="http://www.tristanchaudhry.com/images/newlogo.svg"</img>';
	document.getElementById("logo").style.width = "15%";
	  $('.nav-main li a').each(function() {
        $(this).removeClass('selected');
		$('.nav-main li a#about').addClass('selected');
    });
	
    }
 
  }
  
  $(".nav-main li a").click(function () {
  
    $('.nav-main li a').each(function() {
        $(this).removeClass('selected');
    });

    $(this).addClass('selected');

    $(".nav-main ul li a").click(function () {

    $('.nav-main ul li a').each(function() {
        $(this).removeClass('selected');
	
    });

    $(this).addClass('selected');

    console.log($(this).attr('id'));

    /* Get html by jQuery */ 
    $.get($(this).attr('id'),function(data){
        $('#result').html(data);
    });

    return false;
});

  });
  
$('.ajax-popup-link').magnificPopup({
  type:'inline',
  midClick: true 
});
  
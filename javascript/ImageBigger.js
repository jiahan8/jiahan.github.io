

// $("#yeah img").click(function(){
$("#allyeah img").click(function(){



var currentImage = 1; //assuming the 1st image shown is always the first

 // $(".imgBig").attr("onclick", "showDiv(currentImage)" );

 // $("#imgBig").attr("src",$(this).prop('src'));
 $(".imgBig").attr("src",$(this).prop('src'));
 $("#overlay").show('fast');
 $("#overlayImage").show('fast');

// no scroll
 $("body").css("overflow", "hidden");


// $(".imgBig").click(function(){
$("#overlay").click(function(){
    $(".imgBig").attr("src", "");
    $("#overlay").hide();
    $("#overlayImage").hide();


 $("body").css("overflow", "auto");


});

});





$("#allyeah video").click(function(){

 $(".vidBig").attr("src",$(this).prop('src')); 
 $("#overlay").show('fast');
 $("#overlayVideo").show('fast');


 $("body").css("overflow", "hidden");

		// $(".vidBig").click(function(){
		$("#overlay").click(function(){

		    $(".vidBig").attr("src", "");
		    $("#overlay").hide();
		    $("#overlayVideo").hide();

		 $("body").css("overflow", "auto");

		});

});







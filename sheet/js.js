$.mobile.loading().hide();
$(document).ready(function() {
	


//SWIPEBOX
	
		
//______________________________________________________________


// MOBILE MENUE
	var menu = 0;

	function openMenu(speed){
		$('#navi ul').animate({left:"25%"},speed);
			menu = 1;
	}
	function closeMenu(speed){
		$('#navi ul').animate({left:"100%"},speed);
			menu = 0;
	}

	console.log(4);
	$('#swipebox-close').click(function(){
		console.log(5);
		alert("jo");
		e.stopPropagation();
	});


	$('#menu').click(function(){
		
		if(menu == 0){
			openMenu(350);
		}
		else{
			closeMenu(350);
		}
	});
	$('#closemenu').click(function(){
		
		if(menu == 0){
			openMenu(350);
		}
		else{
			closeMenu(350);
		}
	});
    
    

    $.event.special.swipe.horizontalDistanceThreshold=130;

	$("body").on("swiperight",function(){
    	closeMenu(250);
  	});

	$("body").on("swipeleft",function(){
    	openMenu(250);
  	});

	
	
/*
	window.onresize=function(){
		if(window.innerWidth>900){
			$('#navi').animate({height:"80px"},500);	
		}
		else{
			$('#navi').animate({height:"50px"},500);
		}
	}
*/
	
// KONTAKT

	$("#kontaktformular").submit(function() {
						if($("#von").val() == "" || $("#mail").val() == "" || $("#betreff").val() == "" || $("#nachricht").val() == "") {
							alert("Bitte füllen Sie alle Felder aus");
						} else {
							$("#response").html("Bitte haben Sie einen Moment Geduld...");
							$.ajax({
								type: "POST",
								url: "senden.php",
								data: "&von=" + $("#von").val() + "&mail=" + $("#mail").val() + "&betreff=" + $("#betreff").val() + "&nachricht=" + $("#nachricht").val(),
								success: function(msg)
								{
										$("#response").html(msg);
										$("#von").val('');
										$("#mail").val('');
										$("#betreff").val('');
										$("#nachricht").val('');
								}
							});
						}
						return false;
					});
	

	
});
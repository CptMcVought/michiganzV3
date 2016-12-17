$(document).ready(function() {
	
$.ajax({
	  type: "POST",
	  url: "sites/zaehler.php",
	  data: "&width=" + $(window).width(),
	  success: function(msg){
		  
		}
});
	

//SWIPEBOX
	
		
//______________________________________________________________


// MOBILE MENUE
	var menu = 0;
	$('#menu').click(function(){
		
		if(menu === 0){
			$('#navi').animate({height:"279px"},500);
			menu = 1;
		}
		else{
			$('#navi').animate({height:"50px"},500);
			menu = 0;
		}
	});
	
	window.onresize=function(){
		if(window.innerWidth>900){
			$('#navi').animate({height:"80px"},500);	
		}
		else{
			$('#navi').animate({height:"50px"},500);
		}
	}
	
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
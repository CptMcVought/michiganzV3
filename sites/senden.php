<?php
	$empf = "info@michiganz.ch";
	$betreff = $_POST['betreff'];
	$fromtemp = $_POST['mail'];
	$text = $_POST['nachricht'];
	if($fromtemp=="" || $text==""){
		echo "Leider ist ein Fehler aufgetreten.";
	}
	else{
	$from = "From: ";
	$from .= $_POST['von'];
	$from .= " <";
	$from .= $fromtemp;
	$from .= ">\n";
	$from .= "Content-type:text/html;charset=utf-8" . "\n";
	$from .= "Content-Transfer-Encoding: quoted-printable" . "\n";
	
	if(mail($empf, $betreff, $text, $from)){
		echo "Vielen Dank, Ihre Nachricht ist bei mir eingegangen.";
	}
	else{
		echo "Leider ist ein Fehler aufgetreten.";
	}


	$text2 = '<html>
    <head>
	<title>Email</title>
        <link href="http://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet" type="text/css">
        <style>
            body{
                font-family:"Roboto";
                font-size: 20px;
            }
            h1{
                font-size: 30px;
                font-weight: 100;
            }
        </style>
    </head>
    <body>
        <h1>Guten Tag</h1><br>
        Herzlichen Dank für Ihre Nachricht.<br>
        Ich werde mich so schnell wie möglich bei Ihnen melden.<br><br>
        Mit freundlichen Grüssen und noch einen angenehmen Tag<br>
        Michi Ganz<br><br>
        
        <a href=" http://michiganz.ch">http://michiganz.ch<br>
		<img src=" http://michiganz.ch/template/nav/logo_klein_black.png" alt="" width="250px"/></a>
        
    
    </body>
</html>';
				
	$headers = "Return-Path: info@michiganz.ch". "\n";
	$headers .= "MIME-Version: 1.0" . "\n";
	$headers .= "Content-type:text/html; charset=UTF-8" . "\n";
	$headers .= "Content-Transfer-Encoding: quoted-printable" . "\n";
	$headers .= 'From: Michi Ganz <info@michiganz.ch>' . "\n";

	mail($fromtemp, $betreff, $text2, $headers);

	
	$datum= date("d.m.Y H:i:s");
	$message = "\n---------------- \nAm: $datum \n$from \nNachricht: \n$text "; 
	$datei = fopen("../data/nachricht.txt", "a");
   	fwrite($datei, "\n".$message);
   	fclose($datei);
	}
?>
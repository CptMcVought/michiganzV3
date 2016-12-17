<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Michi Ganz - Fotografie und Grafik</title>
	<META name="keywords" content="Fotografie, Fotograf, Grafike, Grafiker, Schweiz, Tösstal, Zürich, Kinderfotos, Babyfotos, Bewerbungsfotos, Michi Ganz, Michael Ganz, Michi, Michael, Ganz,">
	<META name="de-scription" content="Fotograf für allerlei; Hochzeit, Bewerbung, Kinderfotos, Familienfotos, Paarfotos, Flyer für Geburtstagsparty etc.">
	<META name= "revisit-after" content="2 days">
    
<link rel="stylesheet" href="../sheet/css.css">

<script type="text/javascript" src="../sheet/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="../sheet/js.js"></script>

<style>
	form{
		text-align: left;
		font-weight:100;
		font-size: 20px;
	}
	input{
		border: none;
		box-shadow: rgba(0,0,0,0.55) 2px 2px 10px;
		height: 30px;
		width: 220px;
		margin-top: 10px;
		margin-bottom: 10px;
		margin-left: 8px;
		padding: 5px;
		font-family: robothin;
		font-size: 17px;
	}
	input:focus{
		outline: none;
		background-color: rgba(255,160,13,0.03);	
	}
	input.submit{
		width: 100px;
		height: 40px;
		margin-left: 100px;	
		background-color: white;
		cursor: pointer;
		
		-webkit-transition: all 250ms ease-out;
    	-moz-transition: all 250ms ease-out;
    	-o-transition: all 250ms ease-out;
    	transition: all 250ms ease-out;
		
	}
	input.submit:hover{
		background-color: #FFA00D;
		color: white;	
	}
	textarea{
		width: 300px;
		min-height: 150px;
		border: none;
		box-shadow: rgba(0,0,0,0.55) 2px 2px 10px;
		font-family: robothin;
		font-size: 20px;
		margin-top: 15px;
	}
	textarea:focus{
	outline: none;
	background-color: rgba(255,160,13,0.03);
	}
	footer{
		text-align: center;
	}
	.content{
		width: 300px;
	}
	th{
		width: 50px;
		font-weight: 100;	
		font-size: 20px;
		padding: 0;
	}
	tr{
		width: 300px;
	}
	p{
		font-size: 20px;	
	}
</style>

</head>

<body>



	<nav id="navi">
        <div id="logo"><img src="../template/nav/logo_klein_black.png"></div>
        <ul>
            <li id="menu"><img src="../template/nav/menu.png"></li>
            <li class="navlinks"><a href="../">HOME</a></li>
            <li class="navlinks"><a href="portfolio.php">PORTFOLIO</a></li>
            <li class="navlinks"><a href="uebermich.php">ÜBER MICH</a></li>
            <li class="navlinks"><a href="angebot.php">ANGEBOT & PREISE</a></li>
            <li class="navlinks"><a href="#">KONTAKT</a></li>
        </ul>
    </nav>
    <div id="logomobile"><img src="../template/nav/logo_klein_black.png"></div>
    
    
    
	<div class="content">
    
    	<h1>Kontakt</h1>
        <p>
        Michi Ganz - Fotografie und Grafik<br>
        Nörgelbach 8<br>
		8493 Saland<br><br>
		<a href="mailto:info@michiganz.ch">info@michiganz.ch</a><br>
        +41 79 338 80 14
        </p>
        
        <form id="kontaktformular" name="kontaktformular" action="senden.php" method="post">
        	<table>
       			<tr><th>Name: </th> <th><input type="text" name="von" id="von" /></th></tr>
                <tr><th>Email: </th> <th> <input type="text" name="mail" id="mail" /></th></tr>
                <tr><th>Betreff: </th> <th> <input type="text" name="betreff" id="betreff" /></th></tr>
                    <br>
            <table>
					Nachricht:<br>
					<textarea name="nachricht" id="nachricht"></textarea><br>
					<input class="submit" type="submit" value="Senden" />
         </form>
   		<div id="response"></div>
    
        
        
        
       
    </div>
    
    <footer>
     webdesign by michiganz 2015
    </footer>
</body>
</php>

<?php
  $dateis="../data/zaehlers.txt";
  $dateim="../data/zaehlerm.txt";
  $dateil="../data/zaehlerl.txt";
  $width = $_POST['width'];
  $stellen = 5;
  
  if($width==200){
	  echo "Fehler2";
  }
  else{
	  echo $width;
	  if($width<601){
		  $fp=fopen($dateis,"a+");
		  $zahl=fgets($fp,$stellen);
		  fclose($fp);
		  $fp=fopen($dateis,"w");
	  }
	  elseif($width<901){
		  $fp=fopen($dateim,"a+");
		  $zahl=fgets($fp,$stellen);
		  fclose($fp);
		  $fp=fopen($dateim,"w");
	  }
	  else{
		  $fp=fopen($dateil,"a+");
		  $zahl=fgets($fp,$stellen);
		  fclose($fp);
		  $fp=fopen($dateil,"w"); 
	  }
	  
	  
	  $zahl++;
//	  flock($fp,2);
	  fputs($fp,$zahl,$stellen);
//	  flock($fp,3);
	  fclose($fp);
  }
  
?>
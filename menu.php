<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css" media="all"/>
</head>
<body>
	<?
	$gmenu = array ('home'=>'index.php', 'about'=>'about.php', 'product'=>'product.php', 'contact' => 'contact.php');
	$vmenu = array ('home'=>'index.php', 'about'=>'about.php', 'product'=>'product.php', 'contact' => 'contact.php');
	 function getMenu ($menu, $position = true){
	             if (!$position)   $class = "hor";
				 
		  		  echo "<ul class ='$class'>";
				  
						   foreach ($menu  as $k => $v){
						   
									echo "<li><a href ='$v'>$k</a></li>" ;
							}
							
				   echo "</ul>";
				   		   
	  }
	
	echo "<div>";
	getMenu ($gmenu,false);
	echo "</div>";
	echo "<div>";
	getMenu ($vmenu);
	echo "</div>";
	?>
</body>
</html>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?
	$menu = array ('home'=>'index.php', 'about'=>'about.php', 'product'=>'product.php', 'contact' => 'contact.php');
	  
	  
	  
	 foreach ($menu  as $k => $v){
	  echo "<ul style='list-style-type:none'>";
	   echo "<li><a href ='$v'>$k</a></li>";
	   echo "</ul>";
	  }
	  
	
	
	?>
</body>
</html>
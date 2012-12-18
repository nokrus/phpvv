<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<?

$name = trim(strip_tags ($_GET ['name']));
$age = abs((int)$_GET['age']);
	

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method ="GET">
<p><input type="text" name = "name" value="<?=$name?>"/></p>
<p><input type="text" name = "age" value="<?=$age?>" /></p>
<p><input type="submit" /></p>
</form>
<?

 echo "<p>Ваше імя: $name</p> <p>Ваш вік: $age</p>";
 
 ?>

</body>
</html>
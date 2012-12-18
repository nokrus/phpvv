<?
$output = ' ';

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Калькулятор</title>
</head>
<body>

<form action="<?$_SERVER['PHP_SELF']; method="GET"?>">

<p>
	<input type="text" name="val1"></input>
</p>
<p>
	<input type="text" name="sign"></input>
</p>
<p>
	<input type="text" name="val2"></input>
</p>
<p>
	<input type="submit" value="порахувати"></input>
</p>
</form>	
</body>
</html>


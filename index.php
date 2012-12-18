<?require_once ("lib.inc.php");
    require_once ("data.inc.php");
	require_once ("conf.inc.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title></title>
<meta name="" content="">
<link rel="stylesheet" type="text/css" href="css.css" media="all"/>
</head>

<body>

<div id = "container">
<div id = "header"><?include ("top.inc.php");?></div>
<div id = "menu"><?if(!getMenu($gmenu,false)) echo MY_ERROR;?></div>
<div id="container2">
<div id="right"><?if (!getMenu($vmenu)) echo MY_ERROR;?></div>
<div id="content"><?
$view = strip_tags($_GET['view']);

switch ($view){
	
	case 'kitchen':
	       include 'kitchen.php'; break;
	case 'room':
	       include 'room.php'; break;
    case 'worktop':
	       include 'worktop.php'; break;
    case 'about':
	       include 'about.php'; break;
	case 'news':
	       include 'news.php'; break;
	case 'table':
	       table(5,5); break;
    default:
	      echo "Домашня сторінка";
		   
}


 
?></div>
<div id="buttom"><?include ("buttom.inc.php");?></div>
</div>
</div>
 
  
 
 </body>
</html>
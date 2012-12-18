<?php

$lenth = $_POST['lenth'];
$time = $_POST['time'];

function speed_info($lenth,$time)
{
if (empty($lenth)|| empty($time))

	echo "Введіть значення відстані та часу";
	

elseif (is_numeric($lenth) !== TRUE || is_numeric($time) !== TRUE )

	echo "Введіть числові значення";


else

	
$speed = ($lenth / $time);

return $speed;
	

}


?>
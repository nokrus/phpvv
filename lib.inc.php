<?
//  menu
//////////////////////////////////////////////////////////////////////

	 function getMenu ($menu, $position = true){
				if(!is_array($menu)) return false;
	             if (!$position)   $class = "hor";
				 
		  		  echo "<ul class ='$class'>\n";
				  
						   foreach ($menu  as $k => $v){
						   
									echo "<li><a href ='$v'>$k</a></li>\n" ;
							}
							
				   echo "</ul>\n";
				   
				   return true;
				   		   
	  }
	
	
	
// table
//////////////////////////////////////////////////////////////////////////////////////	
function table ($row =10, $col=10){

//перевіряєм наявність рядків, стовбців
if ($row && $col){
     //малюєм таблицю
	 echo "<table class ='style' border= '1'>\n";
	 
	 
	         //малюєм рядки
			 for ($tr = 1;  $tr<=$row; $tr++){
						 
					 echo "\t<tr>\n";
					 
							 for ($td = 1;  $td<=$col; $td++){
								  if ($td ==1 or $tr ==1)  $style = 'text';
								   else unset ($style);
												 //малюєм стовбці
												 echo "<td class='$style'>".$tr*$td."</td>\n";
								 }
					echo "</tr>\n";
			 
			 }
	 
	 
	 echo "</table>\n";
 }
 }
 
 //calc
/////////////////////////////////////////////////////////

function myCalc($val1,$val2,$sign){

if (!is_numeric($val1 && $val2))echo "Введіть числові значення";
if (preg_match('/[+-/*]/',$sign))echo "Введіть відповідні знаки";



	
}

?>
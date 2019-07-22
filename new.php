<?php 


/////////////////////////////////////////////////////////////////////////////
//while loop

 $i=0;
 while($i<=10)
 {
     $j=$i+$i;
 	echo "$i+$i=$j </br>";
 	$i++;

 }


//////////////////////////////////////////////////////////////////////////do while loop

 
 $i=0;
 do {
 	echo "hi";
    $i++;
 } 
 while ($i<=10);
 




$value="parents";
switch ($value) {
	case 'baccha':
		echo "hi ami baby";
		break;

	case 'parents':
		echo "hi ami parents";
		break;

	case 'guest':
		echo "hi ami guest";
		break;
	
	default:
		echo "wrong pass";
		break;
}


/////////////////////////////////////////////////////////////// nestle loop namota


 for ($i=8; $i >1 ; $i--) 
 	
 { 
 	echo "</br>";
 	for ($j=0; $j <11 ; $j++)
 	{
        $l=$i*$j;
 		echo "$i*$j=$l </br>";
 		
 	} 
 		
 } 


/////////////////////////////////////////////////////////////////////recursion GREET

 function greet($n)
 {
 	
 	if ($n != 0){
        $n--;
        greet($n);
      echo "hi </br>";
 	}


 }
greet(5);



greet(5);
function greet($n)
{
	if ($n <= 0)
	{

	}
	else{

		echo "hello </br>";
		$n--;
		greet ($n);
	}
}
 


greet(0);
function greet($n)
{
	if ($n >= 6)
	{

	}
	else{
      
		echo "$n+";
		$n++;
		greet ($n);
	}
}

 ?> 	

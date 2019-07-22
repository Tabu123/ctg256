<?php 

 
 echo "number1: Print 20 to 10 reversely (using loop)";
 echo "</br>";
 echo "</br>";

$i=20;
 while($i>=10)
 {
     
 	echo "$i</br>";
 	$i--;

 }

 echo "</br>";
  
  ?>




  <?php 
 
 echo " number 2: sum 1,2,3,4 using loop";
 echo "</br>";
 echo "</br>";

 $i=1;
 while ($i<=4)
 {
 	$j=$i+$i;
 	echo "$i+$i=$j </br>";
    $i++;
 }
 
 echo "</br>";
  ?>



<?php 
 

 echo "number 3: Make multiplication table using nested loop";
echo "</br>";
 for ($i=0; $i <=20 ; $i++) 
 	
 { 
 	echo "</br>";
 	for ($j=0; $j <11 ; $j++)
 	{
        $l=$i*$j;
 		echo "$i*$j=$l </br>";
 		
 	} 
 		
 }
 echo "</br>";
 echo "</br>";

 ?>



 <?php 


  echo "number 4: Make 1+2+3+4+5 = ? by recursion function";
 echo "</br>";
 echo "</br>";

greet(1);
function greet($n)
{
	if ($n <= 5)
	{
         $j= $n;
         $k=$j+1;
         $l=$k+1;
         $m=$l+1;
         $n=$m+1;
         
         $p=$j+$k+$l+$m+$n;
         echo "$j+$k+$l+$m+$n=$p";
	}
	else{
        

		greet ($n);

	}

}
 echo "</br>";
 echo "</br>";
  ?>




  <?php  

 
  echo "number 5: Take a number and print it reversely till 0 using loop";
 echo "</br>";
 echo "</br>";

 $i=15;
 while($i>=0)
 {
     
 	echo "$i</br>";
 	$i--;

 }

 echo "</br>";
  
  ?>




  <?php  

  echo "number 6: Namata of 22 and 40 using nested loop";
 echo "</br>";
 echo "</br>";
for ($i=22; $i >21 ; $i--) 
 	
 { 
 	echo "</br>";
 	for ($j=0; $j <11 ; $j++)
 	{
        $l=$i*$j;
 		echo "$i*$j=$l </br>";
 		
 	} 
 		
 }


for ($i=40; $i >39 ; $i--) 
 	
 { 
 	echo "</br>";
 	for ($j=0; $j <11 ; $j++)
 	{
        $l=$i*$j;
 		echo "$i*$j=$l </br>";
 		
 	} 
 		
 }


 ?>

  <?php 



 

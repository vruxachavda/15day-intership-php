<?php 

echo "su chale";

$num = 5;  
$factorial = 1;  
for ($i=1; $i<=$num; $i++)   
{  
  $factorial = $factorial * $i;
  echo $factorial."<br>";  
}  
echo "Factorial of $num is $factorial";  
?> 
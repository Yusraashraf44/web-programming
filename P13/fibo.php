<?php
$n=20;
$a=0;
$b=1;
echo "Fibonacci Series: $a, $b";  

for($i=2; $i<$n;$i++)
{  
    $c= $a + $b;  
    echo ", $c";  
    $a= $b;  
    $b = $c;  
}  
?>
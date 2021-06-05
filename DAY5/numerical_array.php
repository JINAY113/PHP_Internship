<?php

//numeric array

//method 1

$a[0]=108;
$a[1]="jinay";
$a[2]="21.5";
$a[3]="php internship";

//method 2

$a[]=108;
$a[]="jinay";
$a[]="21.5";
$a[]="php internship";

//method 3
$a=array(108,"jinay",21.5,"php internship");
//print array
echo"index 1 value is $a[1]";

//print array using for loop
for($i=0;$i<count($a);$i++)
{
    echo "<br/>index $i value is <b> $a[$i]</b>";
}

//print array using do while loop
$j = 0;
do
{
    echo"<br/>".$a[$j];
    $j++;
    
}while($j<count($a));


//3 inbuilt method 

echo "<pre>";
print_r($a);
echo "<pre>";
var_dump($a);






 

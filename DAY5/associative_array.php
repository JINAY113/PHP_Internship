<?php

// Associative array

//method 1

$a['enrollment'] = 108;
$a['name'] = "jinay";
$a[20]=21.5;
$a['work']="php internship";

//method 2

$a = array(
    "enrollment" => 108,
    "name" => "jinay",
    20 => 21.5,
    "work" => "php internship"

);

//print 
echo"name is ".$a['name'];
echo"</br>";


//foreach loop

foreach ($a as $value) {
    
        echo"</br> value is $value";
}
echo"</br>";
foreach ($a as $k => $v) {
    
    echo"</br>index <b>$k</b> value is <b>$v</b>";
    
}
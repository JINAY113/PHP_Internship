<?php

$a = array("hii","hello","how are u");
print_r($a);


//print_r
$a=array("hii","hello","how are u");
$b=array("php","internship","work");
print_r($a);


//count
echo "</br>Count= ".count($a);


//array_change_key_case
echo "</br>array_change_key_case= ";
print_r(array_change_key_case($a,CASE_UPPER));


//array_combine
echo "</br>array_combine= ";
print_r(array_combine($a,$b));


//array_diff
echo "</br>array_diff= ";
$a1=array(0=>"hello",1=>"how are u",2=>"hii");
$a2=array(3=>"work",4=>"php",5=>"intrenship");
print_r(array_diff($a1,$a2));


//array_fill
echo "</br>array_fill= ";
$a=array_fill(2,3,"hii");
print_r($a);


//array_flip
echo "</br>array_flip= ";
$a=array(0=>"hii",1=>"hello",2=>"how are u");
print_r(array_flip($a));

//array_intersect
echo "</br>array_intersect= ";
print_r(array_intersect($a1,$a2));


//array_keys
echo "</br>array_keys= ";
$a=array("hi"=>"hii","hlo"=>"hello","how"=>"how are u");
print_r(array_keys($a));


//array_merge
echo "</br>array_merge= ";
print_r(array_merge($a1,$a2));


//array_pop
echo "</br>array_pop= ";
array_pop($a);
print_r($a);


//array_push
echo "</br>array_push= ";
array_push($a,"hii");
print_r($a);


//array_product
echo "</br>array_product= ";
$a=array(25,5);
echo(array_product($a));


//array_rand
echo "</br>array_rand= ";
$a=array("hi"=>"hii","hlo"=>"hello","how"=>"how are u");
print_r(array_rand($a,1));


//array_reverse
echo "</br>array_reverse= ";
print_r(array_reverse($a));


//array_search
echo "</br>array_search= ";
echo array_search("hello",$a);


//array_sum
echo "</br>array_sum= ";
$a=array(0=>"25",1=>"34",2=>"105");
echo array_sum($a);


//array_unique
echo "</br>array_unique= ";
$a=array("a"=>"hello","b"=>"hii","c"=>"hello");
print_r(array_unique($a));


//array_values
echo "</br>array_values= ";
print_r(array_values($a));


//asort
echo "</br>asort= ";
$my_array = array("hi"=>"hii","hlo"=>"hello","how"=>"how are u");
asort($my_array);
print_r($my_array);


//compact
echo "</br>compact= ";
$firstname = "jinay";
$lastname = "shah";
$age = "20";
$result = compact("firstname", "lastname", "age");
print_r($result);


//end
echo "</br>end= ";
$people = array("jinay", "shah", "C", "C++");
echo current($people) . "<br />";
echo end($people);


//in_array
echo "</br>in_array= ";
if (in_array("shah",$people)){
 echo "Match found";
 }
else{
 echo "Match not found";
 }
 
 
//ksort
echo "</br>ksort= ";
 ksort($my_array);
print_r($my_array);


//krsort
echo "</br>krsort= ";
krsort($my_array);
print_r($my_array);


//range
echo "</br>range= ";
$number = range(0,5);
print_r ($number);


//rsort
echo "</br>rsort= ";
rsort($my_array);
print_r($my_array);


//usort
echo "</br>usort= ";
function my_sort($a, $b){
 if ($a == $b) return 0;
 return ($a > $b) ? -1 : 1;
 }
$arr = array("jinay", "shah","C",
"shah","C", "jinay");
usort($arr, "my_sort");
print_r ($arr);

?>
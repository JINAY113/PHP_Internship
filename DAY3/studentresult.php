<?php


$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$f=$_POST['txt6'];

$total=($b+$c+$d+$e+$f);
$pr=($total)/5;


echo "<table>";
echo"<tr>";
    echo"<td>";
        echo"Student Name : $a";
    echo"<td>";
echo"</tr>";
    echo"</br>";
echo"<tr>";
    echo"<td>";
     echo"Student total marks :$total";
    echo"<td>";
echo"</tr>";
    echo"</br>";

    if($pr>=90)
{
    echo"<tr>";
    echo"<td>";
    echo "<p style='background-color:red'>Student Pass With First Class</p>";
    echo"<td>";
echo"</tr>";
echo"</br>";
}
 else if($pr>=70 && $pr<=89)
{
    echo"<tr>";
    echo"<td>";
    echo "<p style='background-color:blue'>Student Pass With second Class</p>";
    echo"<td>";
echo"</tr>";
echo"</br>";
}
 else if($pr>=40 && $pr<=69)
{
    echo"<tr>";
    echo"<td>";
    echo "<p style='background-color:yellow'>Student Pass With third Class</p>";
    echo"<td>";
echo"</tr>";
echo"</br>";
}
 else
{
    echo"<tr>";
    echo"<td>";
    echo "<p style='background-color:green'>Student Fail</p>";
    echo"<td>";
echo"</tr>";
echo"</br>";
}

?>




    
    


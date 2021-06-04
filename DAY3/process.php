<?php


$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['age'];
$d=$_POST['emailid'];
$e=$_POST['mno'];
$f=$_POST['city'];


echo "<table>";
echo"<tr>";
    echo"<td>";
        echo"First Name : $a";
    echo"<td>";
    echo"</br>";
echo"<tr>";
    echo"<td>";
        echo"Last Name : $b";
    echo"<td>";
    echo"</br>";
echo"<tr>";
    echo"<td>";
        echo"Age : $c";
    echo"<td>";
    echo"</br>";
echo"<tr>";
    echo"<td>";
        echo"Email Id: $d";
    echo"<td>";
    echo"</br>";
echo"<tr>";
    echo"<td>";
        echo"Mobile No. : $e";
    echo"<td>";
    echo"</br>";    
echo"<tr>";
    echo"<td>";
        echo"City : $f";
    echo"<td>";
    echo"</br>";    


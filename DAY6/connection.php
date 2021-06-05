<?php

$host = "localhost";
$username="root";
$passwd="";
$dbname="db_internship";

$connection = mysqli_connect($host,$username,$passwd,$dbname);

$q =
     mysqli_query($connection, 
                    "insert into tbl_user(user_name,user_mobileno,user_gender) values('Jay','8689897878','male')") or die("error". mysqli_error($connection));


  if($q)
  {
      echo "<script>alert('record addedd succesfully');</script>";
  }

?>
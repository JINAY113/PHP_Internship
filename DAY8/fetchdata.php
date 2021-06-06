<?php

$connection = mysqli_connect('localhost','root','','db_internship');

$q = mysqli_query($connection, "select * from tbl_user") or die("error".mysqli_error($connection));



$fetch = mysqli_fetch_array($q);
echo "<pre>";
print_r($fetch);

?>
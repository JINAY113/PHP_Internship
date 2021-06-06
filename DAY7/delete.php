<?php

$connection = mysqli_connect('localhost','root','','db_internship');

$id=$_GET['deleteid'];

$q = mysqli_query($connection, "update tbl_student set is_delete=1 where student_id='{$id}'") or die("error".mysqli_error($connection));


if($q)
{
    echo "<script>alert('Record Deleted');window.location='student_table_display.php';</script>";
}






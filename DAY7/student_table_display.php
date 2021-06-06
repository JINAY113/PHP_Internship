<?php


$connection = mysqli_connect('localhost','root','','db_internship');

$q = mysqli_query($connection, "select * from tbl_student where is_delete=0") or die("error".mysqli_error($connection));

echo"<table border='1'>";
echo"<tr>";
    echo"<th>Student Id</th>";
    echo"<th>First Name</th>";
    echo"<th>Last Mobile No</th>";
    echo"<th>Age</th>";
    echo"<th>Email Id</th>";
    echo"<th>Password</th>";
    echo"<th>Mobile No</th>";
    echo"<th>City</th>";
    echo"<th>Pincode</th>";
    echo"<th>Action</th>";
echo"</tr>";
while($fetch = mysqli_fetch_array($q) )
{
    echo"<tr>";
        echo"<td>{$fetch['student_id']}</td>";
        echo"<td>{$fetch['student_firstname']}</td>";
        echo"<td>{$fetch['student_lastname']}</td>";
        echo"<td>{$fetch['student_age']}</td>";
        echo"<td>{$fetch['student_emailid']}</td>";
        echo"<td>{$fetch['student_password']}</td>";
        echo"<td>{$fetch['student_mobileno']}</td>";
        echo"<td>{$fetch['student_city']}</td>";
        echo"<td>{$fetch['student_pincode']}</td>";
        echo"<td><a href='delete.php?deleteid={$fetch['student_id']}'>Delete</td>";
        
    echo"</tr>";
}

echo "</table>";
echo"<a href= 'student_form.php'> Add Record</a>";
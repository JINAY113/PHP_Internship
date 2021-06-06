<?php

    $connection = mysqli_connect('localhost','root','','db_internship');
    
    if($_POST)
   {
        
         
        
        $fn=$_POST['t1'];
        $ln=$_POST['t2'];
        $age=$_POST['t3'];
        $eid=$_POST['t4'];
        $pwd=$_POST['t5'];
        $mno=$_POST['t6'];
        $city=$_POST['t7'];
        $pc=$_POST['t8'];
   
        $q = mysqli_query($connection, "insert into tbl_student(student_firstname,student_lastname,student_age,student_emailid,student_password,student_mobileno,student_city,student_pincode) values('$fn','$ln','$age','$eid','$pwd','$mno','$city','$pc')") or die("error". mysqli_error($connection));
    
     if($q)
    {
        echo "<script>alert('Student Record Succesfully Added');</script>";
    }
     }
     
     
    
   
?>








<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form method="post" >
            <table>
            <tr>
                <td>First Name</td>
                <td> <input type="text" name="t1" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Last name</td>
                <td> <input type="text" name="t2" required/> </td>
                </tr>
                </br>
                <tr>
                <td>age</td>
                <td> <input type="number" name="t3" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Email Id</td>
                <td> <input type="email" name="t4" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Password</td>
                <td> <input type="password" name="t5" required/> </td>
                </tr>
                </br>
                
                <td>Mobile Number</td>
                <td> <input type="number" name="t6" required/> </td>
                </tr>
                </br>
                <tr>
                <td>City</td>
                <td> <input type="text" name="t7" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Pincode</td>
                <td> <input type="number" name="t8" required/> </td>
                </tr>
                </br
                
                <tr>
                    <td><input type="submit"/> </td>
                </tr>
                <tr>
                
            </table>
        </form>

    </body>
</html>
<?php
echo"<a href= 'student_table_display.php'> Display  Record</a>";
?>




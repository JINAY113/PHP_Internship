<?php

$connection = mysqli_connect("localhost","root","","db_internship");

$edit_id = $_GET['editid'];

$editq = mysqli_query($connection, "select * from tbl_student where student_id='{$edit_id}'") or die("error". mysqli_error($connection));

$edit_data= mysqli_fetch_array($editq);

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
        
        $uq=mysqli_query($connection , "update tbl_student set student_firstname='{$fn}',student_lastname='{$ln}',student_age='{$age}',student_emailid='{$eid}',student_password='{$pwd}',student_mobileno='{$mno}',student_city='{$city}',student_pincode='{$pc}' where student_id='{$edit_id}'") or die ("error". mysqli_error($connection));
                
                if($uq)
        {
            echo "<script>alert('Record updated');window.location='student_table_display.php';</script>";
        }
        }
    
?>




<html>
    
    <body>
       
        <form method="post" >
            <table>
            <tr>
                <td>First Name</td>
                <td> <input type="text" value= "<?php echo$edit_data['student_firstname'] ?>" name="t1" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Last name</td>
                <td> <input type="text" value= "<?php echo$edit_data['student_lastname'] ?>" name="t2" required/> </td>
                </tr>
                </br>
                <tr>
                <td>age</td>
                <td> <input type="number" value= "<?php echo$edit_data['student_age'] ?>"name="t3" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Email Id</td>
                <td> <input type="email" value= "<?php echo$edit_data['student_emailid'] ?>" name="t4" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Password</td>
                <td> <input type="password" value= "<?php echo$edit_data['student_password'] ?>" name="t5" required/> </td>
                </tr>
                </br>
                
                <td>Mobile Number</td>
                <td> <input type="number" value= "<?php echo$edit_data['student_mobileno'] ?>"name="t6" required/> </td>
                </tr>
                </br>
                <tr>
                <td>City</td>
                <td> <input type="text" value= "<?php echo$edit_data['student_city'] ?>" name="t7" required/> </td>
                </tr>
                </br>
                <tr>
                <td>Pincode</td>
                <td> <input type="number"  value= "<?php echo$edit_data['student_pincode'] ?>"name="t8" required/> </td>
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

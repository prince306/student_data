<?php
 echo $stu_name=$_POST["sname"];
 echo $stu_address=$_POST["saddress"];
 echo $stu_class=$_POST["class"];
 echo $stu_phoneNo=$_POST["sphone"];

 include 'config.php';
  $sql= "INSERT into student(s_name,s_address,s_class, s_phoneNo) values ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phoneNo}')";
 $result = mysqli_query($conn,$sql) or die("Query not run");

 header("Location: http://localhost/crud_html/index.php");
 mysqli_close($conn);


 ?>

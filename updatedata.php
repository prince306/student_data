<?php
  $stu_id=$_POST["sid"];
  $stu_name=$_POST["sname"];
  $stu_address=$_POST["saddress"];
  $stu_class=$_POST["sclass"];
  $stu_phoneNo=$_POST["sphone"];

  include 'config.php';
   $sql= "UPDATE student set s_id='{$stu_id}',s_name='{$stu_name}',s_address='{$stu_address}',s_class='{$stu_class}',s_phoneNo='{$stu_phoneNo}' where s_id=$stu_id";
 $result = mysqli_query($conn,$sql) or die("Query not run");

 header("Location: http://localhost/crud_html/index.php");
 mysqli_close($conn);


 ?>

<?php

include 'config.php';
$stu_id= $_GET['id'];
$sql= "DELETE from student where  s_id = $stu_id";
$result =mysqli_query($conn, $sql) or die("Query not successful");

header("Location: http://localhost/crud_html/index.php");

mysqli_close($conn);

?>
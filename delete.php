<?php include 'header.php'; ?>
<?php
    include 'config.php';
    
   
    if(isset($_POST['deletebtn'])){
    $stu_id=$_POST['sid'];
    $sql= "DELETE from student where s_id=$stu_id";
    $result = mysqli_query($conn,$sql);
    header('Location: http://localhost/crud_html/index.php');
    mysqli_close($conn);
    }
    ?>

<div id="main-content">
    <h2>Delete Record</h2>
    
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
 
</div>

</div>
</body>
</html>

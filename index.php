<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
      include 'config.php';
      $sql= "SELECT * from student JOIN student_class WHERE student.s_class = student_class.c_id";
      $result = mysqli_query($conn,$sql) or die("Query not run");
      if(mysqli_num_rows($result)> 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th> 
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($rows=mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $rows["s_id"]?></td>
                <td><?php echo $rows["s_name"]?></td>
                <td><?php echo $rows["s_address"]?></td>
                <td><?php echo $rows["c_name"]?></td>
                <td><?php echo $rows["s_phoneNo"]?></td>
                <td>
                    <a href='edit.php?id=<?php echo $rows["s_id"]?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $rows["s_id"]?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
</body>
</html>

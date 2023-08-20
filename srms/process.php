<?php

include("init.php");

$page = isset($_GET['p'])? $_GET['p'] : '' ;
    $result = $conn->query("SELECT stu_id,sub_id,repeating,grade FROM student_sub");
    while($row = $result->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['stu_id'] ?></td>
            <td><?php echo $row['sub_id'] ?></td>
            <td><?php echo $row['repeating'] ?></td>
            <td><?php echo $row['grade'] ?></td>
        </tr>
        <?php
    }

?>

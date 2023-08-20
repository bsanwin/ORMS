<?php
    include('init.php');
    include('session.php');
    $db = mysqli_select_db($conn,'srms');
    $re = $_POST['p2'];
    $sql = "SELECT `stu_id`, `sub_id`,`grade`  FROM `student_sub` where stu_id='$re'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
       echo "<table>
        <caption>Manage Classes</caption>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        </tr>";

        while($row = mysqli_fetch_array($result))

          {
          echo "<tr>";
          echo "<td>" . $row['stu_id'] . "</td>";
          echo "<td>" . $row['sub_id'] . "</td>";
          echo "<td>" . $row['grade'] . "</td>";

          echo "</tr>";

          }

        echo "</table>";
    }
    else {
        echo "0 results";
    }
?>

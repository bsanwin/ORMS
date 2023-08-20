<?php
if(isset($_POST['submit'])){
    foreach ($_POST as $k=>$v){
        // use even and odd count to differentiate TRP and CPP
        if ($k != "submit") {
            // split the form input on _
            $input = explode("_", $k);
            echo "<BR>Region: " . $input[0];
            echo "<BR>Date: " . $input[2];
            if($input[1] == "value1"){
                echo "<BR>Value 1: " . $v;
            }
            elseif($input[1] == "value2"){
                 echo "<BR>Value 2: " . $v;
            }
         }
        echo "<br/>";
     }
}
else {
    $date_array = Array("student", "subject", "repeating", "grade");
    $region_array = Array("NYC", "DC");
?>
    <form name="test_form" id="test_form" method="post" action="">
        <table border="1">
            <tr>
                <td></td>
<?php
                foreach ($date_array as $date){
                    echo "<td>".$date."</td>";
                }
?>
            </tr>
<?php
        foreach ($region_array as $region){
            echo "<tr>";
            echo "<td>".$region."</td>";
            foreach ($date_array as $date){
                echo '<td><input type="text" name='.$region."_value1_".$date.'></td>';
            }
            echo "</tr>";
        }
?>
        </table>
    <input type="submit" name="submit">
</form>
<?php
}
?>

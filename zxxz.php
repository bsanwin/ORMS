<?php
include("0dbconn.php");

echo "string i am zxxz";

//$query = "SELECT * FROM teacher";
//$result = mysqli_query($conn, $query);
$outpt='';
if (isset($_POST['srch'])) {
  $tid = $_POST['tid'];
  $sql="SELECT * FROM subject WHERE sub_code='$tid' ";
  $result=mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));

     ?>
     <?php
     if($result->num_rows>0){
       $outpt .='
        <br />
        <br />
             <div class="table-responsive">
         <h3 align="center">Live Table Data Edit Delete using Tabledit Plugin in PHP</h3><br />
         <table id="editable_table" class="table table-bordered table-striped table-hover">
          <thead>
           <tr>
            <th>ID</th>
            <th>Name</th>
            <th>credit</th>
            <th>type</th>
           </tr>
          </thead>
          <tbody>';
     while($row = mysqli_fetch_array($result))
     {
      $outpt .= '
      <tr>
       <td readonly="">'.$row["sub_code"].'</td>
       <td>'.$row["sub_name"].'</td>
       <td>'.$row["credit"].'</td>
       <td>'.$row["sub_type"].'</td>
      </tr>
      ';
     }
     $outpt .='</tbody>
     </table>
    </div>
       ';
   }
   else{
     $outpt .='<div class="alert alert-warning " style="padding-left:30px">
              No record has been found!
             </div>';
   }

 echo $outpt;
 }
?>

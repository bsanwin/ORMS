<?php include('data.php'); ?>

<html lang="en">
  <head>
    <title>Bootstrap Combobox Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    function delete_confirm(){
if ($('.checkbox:checked').length>0) {
  var result= confirm("Are you sure to delete selected users?");
  if (result) {
    return true;
  }else {
    return false;
  }
}else {
  alert('select at least 1 record to delete.');
}
    }

    $(document).ready(function(){
       $('#select_all').on('click',function(){
         if(this.checked){
           $('.checkbox').each(function(){
             this.checked=true;
           });
         }else {
           $('.checkbox').each(function(){
             this.checked=false;
           });
         }
       });

       $('.checkbox').on('click',function(){
         if ($('.checkbox:checked').length == $('.checkbox').length) {
           $('#select_all').prop('checked',true);
         }else{
           $('#select_all').prop('checked',false);
         }
       });
    });

    </script>
   <style media="screen">

   </style>
 </head>
<body>
<div class="container">
<center>  <h1>Delete Student Grade Recordes</h1></center>

  <?php if(!empty($statusmsg)){ ?>
    <div class="alert alert-success"><?php echo $statusmsg; ?>
    </div> <?php } ?>

  <form name="bulk_action_form" action="" method="post" onSubmit="return delete_confirm();"/>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th><input type="checkbox" id="select_all" value=""/></th>
        <th>student_ID</th>
        <th>Subject_ID</th>
        <th>Repeating</th>
        <th>Grade</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php
        include('init.php');

        $query=$conn->query("SELECT * FROM student_sub ORDER BY stu_id DESC");

        if($query->num_rows>0){
             while ($row = $query->fetch_assoc()) {

               // code...
      ?>
       <tr>
         <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['S.No']; ?>"/></td>
           <td><?php echo $row['stu_id']; ?></td>
           <td><?php echo $row['sub_id']; ?></td>
           <td><?php echo $row['repeating']; ?></td>
           <td><?php echo $row['grade']; ?></td>
           <td><?php echo $row['numgrade']; ?></td>
       </tr>

     <?php } }else{ ?>
         <tr><td colspan="5">No records found.</td></tr>
     <?php } ?>

    </tbody>
  </table>
  <br>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="DELETE"/>
  </form>

</div>
</body>
 </html>

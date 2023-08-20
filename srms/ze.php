<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="zin.php" method="POST">
      <div class="modal-body">

          <div class="form-group">
           <label for="exampleInputEmail1">student</label>
            <input type="text" class="form-control" name="exam" id="exam"/>

          </div>
           <div class="form-group">
             <label for="exampleInputPassword1">subject</label>
             <input type="hidden" class="form-control" name="ex" id="ex"/>
               </div>
            <div class="form-group">
              <label for="exampleInput">Repeating</label>
           <input type="text" class="form-control" name="examp" id="examp"/>
          </div>

          <div class="form-group">
            <label for="example">grade</label>
         <input type="text" class="form-control" name="example" id="example"/>
        </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
      </div>
        </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="jumbotron">
    <div class="card">
      <h2>PHP CRUD POP UP</h2>
    </div>
    <div class="card">
      <div class="card-body">
      </div>

    </div>

     <div class="card">
       <div class="card-body">

          <?php
            include("init.php");
            $query = "SELECT stu_id,sub_id,repeating,grade FROM student_sub";
            $query_run=mysqli_query($conn,$query);
     ?>
         <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">stu</th>
      <th scope="col">subj</th>
      <th scope="col">repeating</th>
      <th scope="col">grade</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>

  <?php

         if ($query_run) {
           // code...
            foreach ($query_run as $row) {
              ?>
  <tbody>
    <tr>
      <td><?php echo $row['stu_id']; ?></td>
      <td><?php echo $row['sub_id']; ?></td>
      <td><?php echo $row['repeating']; ?></td>
      <td><?php echo $row['grade']; ?></td>
      <td>
        <button type="button" class="btn btn-success editbtn">EDIT</button>
      </td>
    </tr>

  </tbody>

  <?php
  }

}
else {
    echo "No Records";

}
?>

</table>

       </div>

     </div>
</div>
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('.editbtn').on('click',function(){

    $('#editmodal').modal('show');

       $tr=$(this).closest('tr');

       var data=$tr.children('td').map(function(){
         return $(this).text();
       }).get();

       console.log(data);

       $('#exam').val(data[0]);
       $('#ex').val(data[1]);
       $('#examp').val(data[2]);
       $('#example').val(data[3]);

  });
});

</script>
  </body>
</html>

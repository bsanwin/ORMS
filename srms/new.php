<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body onload="viewData()">
    <div class="container" style="margin-top:35px">
      <h4>Table</h4>
      <table id="tabledit" class="table table-bordered table-striped">
        <thead>
          <tr>
            <td>student id</td>
            <td>subject id</td>
            <td>repeating</td>
            <td>Grade</td>
            <td></td>
          </tr>
        </thead>

      </table>


    </div>
<script type="text/javascript">
function viewData(){
  $.ajax({
    url: 'proces.php',
    method:'GET',
  }).done(function(data){
     $('tbody').html(data)
    tableData()
  });

}
  /*function tableData(){
    $('#tabledit').Tabledit({
    url: 'proces.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
    }
});
}*/
</script>


  </body>
</html>

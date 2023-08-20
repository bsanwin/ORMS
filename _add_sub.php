

<!DOCTYPE html>
<html>
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <title>ORMS</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 </head>

 <body>
  <br /><br />
  <div class="container">
    <div class="row">

       <br />

 <div class="jumbotro">

   <h2 align="center">Multiple Inline Insert into Mysql using Ajax JQuery in PHP</h2>
      <br />
   <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="30%">Teacher Id</th>
      <th width="300%">Subject Code</th>
      <th width="35%">Course</th>
      <th width="10%">Semestre</th>
      <th></th>
     </tr>
     <tr>
      <td contenteditable="true" class="teachid"></td>
      <td contenteditable="true" class="sub_code"></td>
      <td contenteditable="true" class="cors"></td>
      <td contenteditable="true" class="sem"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
  </div>



   </div>
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='teachid'></td>";
   html_code += "<td contenteditable='true' class='sub_code'></td>";
   html_code += "<td contenteditable='true' class='cors'></td>";
   html_code += "<td contenteditable='true' class='sem' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
   html_code += "</tr>";
   $('#crud_table').append(html_code);
 });

 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });

 $('#save').click(function(){
  var teachid = [];
  var sub_code = [];
  var cors = [];
  var sem = [];
  $('.teachid').each(function(){
   teachid.push($(this).text());
  });
  $('.sub_code').each(function(){
   sub_code.push($(this).text());
  });
  $('.cors').each(function(){
   cors.push($(this).text());
  });
  $('.sem').each(function(){
   sem.push($(this).text());
  });
  $.ajax({
   url:"_insert.php",
   method:"POST",
   data:{teachid:teachid, sub_code:sub_code, cors:cors, sem:sem},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });

 function fetch_item_data()
 {
  $.ajax({
   url:"_fetch.php",
   method:"POST",
   data:{teachid:teachid, sub_code:sub_code, cors:cors, sem:sem},
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();

});
</script>

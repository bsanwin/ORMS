<!DOCTYPE html>
<html lang="en">
<head>
  <title>showR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <style>
   body{
     background:#202a3f;
   }
   .container{
       margin-top:50px;
   }
   #sh{
      padding: 50px 30px;
      margin-top:50px;
   }
   .glyphicon-search{
     font-size:20px;
   }
   .btn-default{
     background:orange;
     width:70px;
     padding:4px;
   }
   .form-control{
     padding:2px;
     font-size:20px;
   }
   h3{
     color:white;
   }
  </style>
</head>
<body>
<div class="container ">
    <div class="row content">
      <div class="col-sm-3"></div>
       <div class="col-sm-5">
  <form id="sh"  action="singleR.php" method="POST" enctype="multipart/form-data">
     <h3>Enrollment Number</h3><br>
     <div class="input-group">
       <input type="text" class="form-control" placeholder="Search" name="re" style='text-transform:uppercase'>
       <div class="input-group-btn">
         <button class="btn btn-default" type="submit">
           <i class="glyphicon glyphicon-search"></i>
         </button>
       </div>
     </div>
   </form>
 </div>
   <div class="col-sm-3"></div>
</div>
</body>
</html>

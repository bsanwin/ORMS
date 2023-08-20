<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Combobox Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style media="screen">
   .form-search .combobox-container,
.form-inline .combobox-container {
  display: inline-block;
  margin-bottom: 0;
  vertical-align: top;
}
.form-search .combobox-container .input-group-addon,
.form-inline .combobox-container .input-group-addon {
  width: auto;
}
.combobox-selected .caret {
  display: none;
}
/* :not doesn't work in IE8 */
.combobox-container:not(.combobox-selected) .glyphicon-remove {
  display: none;
}
.typeahead-long {
  max-height: 300px;
  overflow-y: auto;
}
.control-group.error .combobox-container .add-on {
  color: #B94A48;
  border-color: #B94A48;
}
.control-group.error .combobox-container .caret {
  border-top-color: #B94A48;
}
.control-group.warning .combobox-container .add-on {
  color: #C09853;
  border-color: #C09853;
}
.control-group.warning .combobox-container .caret {
  border-top-color: #C09853;
}
.control-group.success .combobox-container .add-on {
  color: #468847;
  border-color: #468847;
}
.control-group.success .combobox-container .caret {
  border-top-color: #468847;
}



   </style>


  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="well">
          <h1> Combine Results</h1>
        </div>
      </div>
            <div class="row">
              <div class="col-sm-4"></div>
        <h3>MCA</h3>
        <div class="">
            <form  action="html.php" method="POST" class="form-horizontal">

<div class="input-group pull-lext">
 <input type="text" name="AR" class="form-control" placeholder="Enter semestre" id="txtSearch"/>

 <div class="input-group-btn pull-right">
   <button class="btn btn-primary" type="submit">OK

   </button>
 </div>
 </div>
          </form>
        <div class="col-sm-4"></div>
      </div>
    </div>


  </body>
</html>

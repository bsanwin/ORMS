<?php require('2.6_adminopprocess.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin_teacher!</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/scroll_script.js"></script>
      <style>
        body {
               position: relative;
            }
      .card{
            padding:20px 0px 20px 50px;
            /*color: #ffffff;
           background-color: #343a40*/
            }
    .footer{
          height: 70px;
         padding-top:20px;
        }
    .nav-link {
              color: #343a40;
           }
           .alert{
             height:100px;
             padding: 40px 0px 0px 0px;
           }

           .scroll {
             color: #fff;
             margin-top: 100px
         }

         #toTopBtn {
             position: fixed;
             bottom: 26px;
             right: 39px;
             z-index: 98;
             padding: 21px;
             background-color: hsla(5, 76%, 62%, .8)
         }

         .js .cd-top--fade-out {
             opacity: .5
         }

         .js .cd-top--is-visible {
             visibility: visible;
             opacity: 1
         }

         .js .cd-top {
             visibility: hidden;
             opacity: 0;
             transition: opacity .3s, visibility .3s, background-color .3s
         }

         .cd-top {
             position: fixed;
             bottom: 20px;
             bottom: var(--cd-back-to-top-margin);
             right: 20px;
             right: var(--cd-back-to-top-margin);
             display: inline-block;
             height: 40px;
             height: var(--cd-back-to-top-size);
             width: 40px;
             width: var(--cd-back-to-top-size);
             box-shadow: 0 0 10px rgba(0, 0, 0, .05) !important;
             background: url(https://res.cloudinary.com/dxfq3iotg/image/upload/v1571057658/cd-top-arrow.svg) no-repeat center 50%;
             background-color: hsla(5, 76%, 62%, .8);
             background-color: hsla(var(--cd-color-3-h), var(--cd-color-3-s), var(--cd-color-3-l), 0.8)
         }

         .height {
             height: 3000px;
           }
           .affix {
             top:0;
             width: 100%;
             z-index: 9999 !important;
           }


           .affix ~ .container-fluid {
             position: relative;
             top: 50px;
           }
          .strong{
            font-weight: bold;
          }
         .i{
           font-style: italic;
         }
    </style>
      </head>
        <body data-spy="scroll" data-target=".navbar" data-offset="50">
         <a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

         <div class="container-fluid">
           <nav class="navbar navbar-dark bg-dark" style="padding-left:150px;padding-bottom:40px;padding-top:0px;height:40px">
             <a class="navbar-brand" href="#">some info</a>
             <div class="navbar-right" style="padding-right:150px">
               <a href="/logout.php" class="text-white"><small><i class="fas fa-sign-out-alt"></i> Logout</small></a>
             </div>
          </nav>
          <nav class="navbar sticky-top navbar-light bg-light" style="padding-left:150px;padding-right:150px">
              <a class="navbar-brand" href="#"><img src="/img/logoo.png" width="400" height="70" alt=""></a>
                <div class="navbar-right navbar-expand-sm" style="padding-right:20px">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="navbar-brand" href="2.2_admin_aflog.php">Menu</a>
                   </li>
                 </ul>
              </div>
          </nav>
          </div>

             <!-- option navbar -->
         <nav id="nav" class="navbar navbar-expand-sm bg-light sticky-top" data-spy="affix" data-offset-top="197" style="padding-left:150px;padding-right:150px">
            <ul class="navbar-nav">
             <li class="nav-item">
               <a class="nav-link navbar-brand" href="#addteach" id="navbardrop">
                 <small><b> Add Teacher</b></small>
               </a>
            </li>
            <li class="nav-item">
              <a class="nav-link navbar-brand" href="#adup" id="navbardrop">
                <small><b>Search/Update/Delete Teacher</b></small>
             </a>
           </li>
           <li class="nav-item">
              <a class="nav-link navbar-brand" href="#addtsub" id="navbardrop">
                <small><b>Add Teacher subject</b></small>
              </a>
           </li>
           <li class="nav-item">
              <a class="nav-link navbar-brand" href="#tup" id="navbardrop">
                <small><b>Update/Delete Teacher subject</b></small>
             </a>
          </li>
         </ul>
      </nav>
      <!-- end of option navbar -->

    <!-- add teacher -->
      <div id="" class="container-fluid">
        <div class="row">
          <div class="col-sm-2">

          </div>
          <div class="col-lg-8" style="padding-top:40px">

             <?php if (isset($_SESSION['message'])): ?>
               <div class="alert text-center alert-<?=$_SESSION['msg_type']?>">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
              ?>
                </div>
              <?php endif ?>
            <div id="addteach" class="card">
              <h6><b>Add Teacher</b></h4>
            </div>
            <div class="jumbotron text-center">
                <form action="/adminopprocess.php" method="post">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Teacher ID</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control col-sm-5" name="teachid" placeholder="id">
                    </div>
                 </div><br>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Teacher Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control col-sm-5" name="tname" placeholder="name" style="text-transform:capitalize">
                  </div>
               </div><br>
               <div class="form-group row">
                 <label class="col-sm-2 col-form-label">Center</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control col-sm-5" name="tcenter" placeholder="center" style="text-transform:uppercase">
                 </div>
               </div><br>
               <div class="form-group row">
                  <label class="col-sm-2 col-form-label">School</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control col-sm-5" name="tschool" placeholder="school" style="text-transform:uppercase">
                  </div>
              </div><br>
              <div class="form-group row">
                 <div class="col-sm-7">
                  <button type="submit" class="btn btn-primary col-sm-3" name="button">Save</button>
                </div>
              </div>
           </form>
         </div>
        <!-- end of add teacher -->

         <!-- search update delete teacher -->
         <div id="adup" class="card">
              <h6><b>For Search/update/delete Teacher</b></h6>
         </div>
              <div class="jumbotron">
                <form action=" " method="post">
                   <div class="form-group row">
                       <label class="col-sm-2 col-form-label">Search by ID</label>
                          <div class="col-sm-4">
                             <input type="text" name="tid" class="form-control col-sm-12" placeholder="search">
                        </div>
                        <button type="submit" class="btn btn-primary" name="srch">Search</button>
                     </div>
                  </form>
                  <br>
                  <?php require '101.php'; ?>
                  <br><br>
                </div>
            <!-- end of  search update delete teacher -->

            <!--add teacher subject -->
               <div id="addtsub" class="card">
                   <h6><b>Add Teacher subject</b></h6>
               </div>
               <div class="jumbotron text-center">
                 <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="teach_subject_table" style="background-color:white;text-transform:uppercase">
                      <tr>
                        <th width="10%">Teacher ID</th>
                        <th width="10%">Subject Code</th>
                        <th width="10%">Course</th>
                        <th width="10%">Semester</th>
                        <th width="5%"></th>
                     </tr>
                     <tr>
                        <td contenteditable="true" class="teach_id"></td>
                        <td contenteditable="true" class="sub_code"></td>
                        <td contenteditable="true" class="course"></td>
                        <td contenteditable="true" class="semester"></td>
                        <td></td>
                    </tr>
                  </table>
                 <div align="right">
                   <button type="button" name="adder" id="adder" class="btn btn-success btn-xs">+</button>
                 </div>
                <div align="center">
                 <button type="button" name="saveer" id="saveer" class="btn btn-primary">Save</button>
               </div>
            </div>

                </div>
               <!-- end of add teacher subject-->

            <!-- search update  teacher subject -->
               <div id="tup" class="card">
                  <h6><b>For update/Delete Teacher Subject</b></h6>
               </div>
               <div class="jumbotron">
                 <form class="" action="" method="post">
                   <div class="form-group row">
                     <label class="col-sm-2 col-form-label"> Teacher ID</label>
                     <div class="col-sm-4">
                       <input type="text"  name ="tid" class="form-control col-sm-12" placeholder="search" style="text-transform:uppercase">
                     </div>
                   <button type="submit" class="btn btn-primary" name="srching">Search</button>
                   </div>
                 </form>
                 <br><br>
                 <div class="container-fluid" style="padding: 0px 40px 0px 40px">
                 <?php require('102.php'); ?>
                  </div>
                  <br><br>

          </div>
       <br>

          </div>
          <div class="col-sm-2">

          </div>
        </div>
      </div>

      <div class="p-3 mb-2 bg-dark text-white" style="margin-left:20px;margin-right:18px;margin-top: 10px">
         <footer class="footer text-center" >
            <div class="container container-fluid">
              <span class="text-muted">Place sticky footer content here.</span>
            </div>
          </footer>
      </div>
  </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#adder').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='teach_id'></td>";
   html_code += "<td contenteditable='true' class='sub_code'></td>";
   html_code += "<td contenteditable='true' class='course'></td>";
   html_code += "<td contenteditable='true' class='semester'></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
   html_code += "</tr>";
   $('#teach_subject_table').append(html_code);
 });

 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });

 $('#saveer').click(function(){
  var teach_id = [];
  var sub_code = [];
  var course = [];
  var semester = [];
  $('.teach_id').each(function(){
   teach_id.push($(this).text());
  });
  $('.sub_code').each(function(){
   sub_code.push($(this).text());
  });
  $('.course').each(function(){
   course.push($(this).text());
  });
  $('.semester').each(function(){
   semester.push($(this).text());
  });
  $.ajax({
   url:"_fetch.php",
   method:"POST",
   data:{teach_id:teach_id, sub_code:sub_code, course:course, semester:semester},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
  }
  });
 });
 });
</script>

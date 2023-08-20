<html>
    <head>
        <title>Update Multiple Mysql Data using Checkbox with Ajax in PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript">

        $(document).ready(function(){
            function fetch_data()
            {
                $.ajax({
                    url:"select.php",
                    method:"POST",
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        for(var count = 0; count < data.length; count++)
                        {
                            html += '<tr>';
                            html += '<td><input type="checkbox" id="'+data[count].stu_id+'"data-name="'+data[count].stu_id+'"data-address="'+data[count].sub_id+'"data-gender="'+data[count].repeating+'"data-age="'+data[count].grade+'" class="check_box"  /></td>';
                            html += '<td>'+data[count].stu_id+'</td>';
                            html += '<td>'+data[count].sub_id+'</td>';
                            html += '<td>'+data[count].repeating+'</td>';
                            html += '<td>'+data[count].grade+'</td></tr>';

                        }
                        $('tbody').html(html);
                    }
                });
            }

            fetch_data();

            $(document).on('click', '.check_box', function(){
                var html = '';
                if(this.checked)
                {
                    html = '<td><input type="checkbox" id="'+$(this).attr('stu_id')+'" data-name="'+$(this).data('stu_id')+'"  data-address="'+$(this).data('sub_id')+'" data-gender="'+$(this).data('repeating')+'" data-age="'+$(this).data('grade')+'" class="check_box" checked /></td>';
                    html += '<td>'+$(this).data("stu_id")+'</td>';
                    html += '<td>'+$(this).data("sub_id")+'</td>';
                    html += '<td>'+$(this).data("repeating")+'</td>';
                    html += '<td><input type="text" name="grade[]" class="form-control" value="'+$(this).data("grade")+'" ><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';

                }
                else
                {
                    html = '<td><input type="checkbox" id="'+$(this).attr('stu_id')+'" data-name="'+$(this).data('stu_id')+'"data-gender="'+$(this).data('repeating')+'" data-address="'+$(this).data('sub_id')+'"  data-age="'+$(this).data('grade')+'" class="check_box" /></td>';
                    html += '<td>'+$(this).data('stu_id')+'</td>';
                    html += '<td>'+$(this).data('sub_id')+'</td>';
                    html += '<td>'+$(this).data('repeating')+'</td>';
                    html += '<td>'+$(this).data('grade')+'</td>';

                }
                $(this).closest('tr').html(html);
                //$('#gender_'+$(this).attr('id')+'').val($(this).data('gender'));
            });

            $('#update_form').on('submit', function(event){
                event.preventDefault();
                if($('.check_box:checked').length > 0)
                {
                    $.ajax({
                        url:"mul.php",
                        method:"POST",
                        data:$(this).serialize(),
                        success:function()
                        {
                            alert('Data Updated');
                            fetch_data();
                        }
                    });
                }
            });

        });

        $(document).ready(function(){
           $('#select_all').on('click',function(){
             if(this.checked){
               $('.check_box').each(function(){
                 this.checked=true;
               });
             }else {
               $('.check_box').each(function(){
                 this.checked=false;
               });
             }
           });

           $('.check_box').on('click',function(){
             if ($('.check_box:checked').length == $('.check_box').length) {
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
            <br />
   <div class="table-responsive">
    <h2 align="center">Examiner's Awarded List</h2><br />
    <form method="post" id="update_form">


                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                               <th width="5%"><input type="checkbox" id="select_all" value=""/></th>
                                <th width="20%">student ID</th>
                                <th width="20%">subject ID</th>
                                <th width="15%">Repeating</th>
                                <th width="20%">Grade</th>

                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <br />
                    <div align="center">
                        <input type="submit" name="submi" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                </form>
   </div>
 </div>
    </body>
</html>

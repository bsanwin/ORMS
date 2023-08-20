$(document).ready(function(){
    $('#editable_table').Tabledit({
     url:'process.php',
     columns:{
      identifier:[0, "sub_code"],
      editable:[[1, 'sub_name'], [2,'credit'], [3, 'sub_type']]
     },
     restoreButton:false,
     onSuccess:function(data, textStatus, jqXHR)
     {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
     }
    });

});

/*
$(document).ready(function(){
    $('#editable_table').Tabledit({
     url:'process.php',
     columns:{
      identifier:[0, "teachid"],
      editable:[[1, 'tname'], [2,'password'], [3, 'tcenter'],[4, 'tschool']]
     },
     restoreButton:false,
     onSuccess:function(data, textStatus, jqXHR)
     {

     }
    });

});

################################
   new scroll_script

   $(document).ready(function(){
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'first_name'], [2, 'last_name']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });

});




*/

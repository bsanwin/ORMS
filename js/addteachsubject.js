$(document).ready(function(){
 var count = 1;
 $('#addtsub').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='tid'></td>";
   html_code += "<td contenteditable='true' class='tsid'></td>";
   html_code += "<td contenteditable='true' class='tc'></td>";
   html_code += "<td contenteditable='true' class='tsem' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";
   html_code += "</tr>";
   $('#t_subject').append(html_code);
 });

 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });

 $('#tesave').click(function(){
  var tid = [];
  var tsid = [];
  var tc = [];
  var tsem = [];
  $('.tid').each(function(){
   tid.push($(this).text());
  });
  $('.tsid').each(function(){
   tsid.push($(this).text());
  });
  $('.tc').each(function(){
   tc.push($(this).text());
  });
  $('.tsem').each(function(){
   tsem.push($(this).text());
  });
  $.ajax({
   url:"insert_add_t_sub.php",
   method:"POST",
   data:{tid:tid, tsid:tsid, tc:tc, tsem:tsem},
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

 /*function fetch_item_data()
 {
  $.ajax({
   url:"2.3_fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();
*/
});

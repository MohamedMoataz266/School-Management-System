<?php include "homemenu.php"; ?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>View Students</title>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <style>
    <?php require_once "Styles/viewTeacher.css"?>
  
  </style>
 </head>
 <body onload='personnelMenu()'>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 align="center">EMPLOYEE</h2><br />
   <div class="form-group">
    <div class="row">
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
     </div>
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <div align="right">
     <p><b>TotalRecords: <span id="total_records"></span></b></p>
    </div>
    <div class="t">
    <table class="table table-hover">
     <thead>
      <tr>
       <th>Name</th>
       <th>code</th>
       <th>nationalNumber</th>
       <th>qualification</th>

      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
</div>
   </div>
  </div>
  <div style="clear:both"></div>
  <br />
  
  <br />
  <br />
  <br />
 </body>
</html>


<script>
$(document).ready(function(){
 
 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"actionfour.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td>'+data[count].name+'</td>';
      html += '<td>'+data[count].code+'</td>';
      html += '<td>'+data[count].nationalNumber+'</td>';
      html += '<td>'+data[count].qualification+'</td>';
    
    
     
     }
    }
    else
    {
     html = '<tr><td colspan="5">No data has been found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});
</script>


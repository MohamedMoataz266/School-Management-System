<style>
   
<?php include "Styles/addQuestions.css" ?> 
</style>
<body onload='teacherMenu()'>
<div class="cc"><?php include "homemenu.php"?></div>
<div class="register">

<form method="POST" action="">
    <div class="input-file">
    <input type="text" placeholder="Write down a question" name="array[]"><span> +</span><br>
    <input type="submit" name="sub" value="Add Question">
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function(){
        "use strict";
        $(".input-file").delegate("span", "click", function(){
       $("<br><input type='text' placeholder='Write down a question' name='array[]'><span> +</span>").insertAfter($(this)); 
    });
    }); 
</script>
</form>
</div>
</body>
<?php 
 include "dB.php";
 include 'classAssignments.php';
   if(isset($_POST['sub'])){
     $assignment = new Assignment();  
    foreach($_POST['array'] as $a){
        if($a == ''){
            echo '<script>alert("Error, Fill all the requirments")</script>';
            return;
        }
    } 
      foreach($_POST['array'] as $a){
         $assignment->addQuestion($_SESSION['email'], $a);
    }
 } 


?>
<style>
   
<?php include "Styles/addQuestions.css" ?> 
</style>
<div class="cc"><?php include "teacherfrontEnd.php"?></div>
<div class="register">

<form method="POST" action="">
    <div class="input-file">
    <input type="text" placeholder="Write Question Here" name="array[]"><span> +</span><br>
    <input type="submit" name="sub" value="Add Question">
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    $(document).ready(function(){
        "use strict";
        $(".input-file").delegate("span", "click", function(){
       $("<br><input type='text' placeholder='Write Question Here' name='array[]'><span> +</span>").insertAfter($(this)); 
    });
    }); 
</script>
</form>
</div>

<?php 
 include "dB.php";
 include 'classAssignments.php';
   if(isset($_POST['sub'])){
     $assignment = new Assignment();  
    foreach($_POST['array'] as $a){
        if($a == ''){
            echo '<script>alert("Error, Fill All requirments")</script>';
            return;
        }
    } 
      foreach($_POST['array'] as $a){
         $assignment->addQuestion($_SESSION['name'], $a);
    }
 } 


?>
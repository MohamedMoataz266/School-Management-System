$(document).ready(function(){ 
    $(".wrap-login100").hide(); 
    $(".wrap-login100").animate({width:"70%",height:"70%"},"slow");
    $(".wrap-login100").slideDown("slow");
    
    $(".sT").change(function() {
        if ($(this).val() == 'Student'){
            $(".sC").show();
        }else{
            $('.sC').hide();
            $('.sN').hide();
        }
        if($(this).val() == 'Teacher'){
            $(".tN").show();
        }else{
            $('.tN').hide();
        }
        if($(this).val() == 'Student Affairs Employee'){
            $(".sAN").show();
        }else{
            $('.sAN').hide();
        }
        if($(this).val() == 'Personnel Affairs Employee'){
            $(".pAN").show();
        }else{
            $('.pAN').hide();
        }
      });

      $(".sC").change(function() {
        if ($(this).val() != 'Select Class'){
            $(".sN").show();
        } else{
            $('.sN').hide();
        }
      });


}); 
 
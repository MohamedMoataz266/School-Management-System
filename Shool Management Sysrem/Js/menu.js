function homeMenu(){
$.get("homemenu.php", function(data){
    $(".home").replaceWith('<a href="homepage.php">Home</a>');
    $(".atr1").replaceWith('<a href="logIn.php">logIn</a>');
    $(".atr2").replaceWith('<a href="Registration.php">signUp</a>');
});
}


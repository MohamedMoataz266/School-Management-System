<div class="wrapper">
<?php include "dB.php"; 
ob_start();
include "studentFrontEnd.php";
session_start();
 ?>

<style>
 <?php include "Styles/message.css";?>
  </style>
<div class="main_container">
<div class="item"> 

<form method="POST" action="">
<div class="box">  
<h1>send Message</h1>

<br><div class="wra">


<h4>From:
   <input type="text" name="S" class='from' readonly value="<?php 
     $result = mysqli_query($conn, "SELECT email FROM Registration WHERE email='".$_SESSION["email"]."'");
      if($row = mysqli_fetch_array($result)){
      echo $row['email'];
      }
      ?>
      ">
      </h4>
        <h4 class='tohead'>To:
   <input type="text" name="R" class= 'to' readonly value="<?php 
      $result = mysqli_query($conn, "SELECT email FROM Registration WHERE ID='".$_GET['!?']."'-255");
      if($row = mysqli_fetch_array($result)){
      echo $row['email'];
    }
    ?>
    ">
    </h4>
  <div class="rec">
  <?php
    $result = mysqli_query($conn, "SELECT * FROM Chat WHERE Sender='".$_SESSION['email']."'");
 // output data of each sender
 echo '<p class="send">';
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="message-blue">
  <?php echo $row['message'] ?>
</div>
 <?php
}
echo '</p>';
$result = mysqli_query($conn, "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."'");
// output data of each receiver
echo '<p class="rece">';
while($row = mysqli_fetch_array($result)){
  ?>
  <div class="message-orange">
 <?php echo $row['message'] ?> 
  </div>
  <?php
}
echo '</p>';

?>
 </div>

    <textarea placeholder="Type Message Here" name="M"></textarea><br><br><br>
    <input type="submit" name="sub" value="Send Message">
    </div>  
    </div>
    </div>
  </div>
  </div>
  </form>


<?php
   if(isset($_POST['sub'])){
      if(empty($_POST['M'])){
         echo '<script>alert("Error, no message is inserted to be sent")</script>';
         return;
      }
      else{
        $message = new Chatting();
        $message->setData($_POST['S'], $_POST['R'], $_POST['M'], 'Delivered');
        $message->sendMessage();
      }
    
   }
?>


  
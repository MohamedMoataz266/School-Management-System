<?php include "dB.php"; 
 include "studentFrontEnd.php";

?>
<style>
   <?php  include "Styles/reply.css";?>
  </style>


<form method="POST" action="">
    
  <div class="box">
    <br><div class="wra">
      <h1>send message</h1>
      <br><br><br>
      <div class="from">
<h4>From:
   <input type="text" name="S" readonly value=
   "<?php
   ob_start(); 
     $result = mysqli_query($conn, "SELECT email FROM Registration WHERE email='".$_SESSION["email"]."'");
      if($row = mysqli_fetch_array($result)){
      echo $row['email'];
      }
      ?>
      ">
    </h4>
      </div>
    <br><br>
    <div class="to">
   <h4 class='to'> To:
   <input type="text" name="R" readonly value="<?php 
      $result = mysqli_query($conn, "SELECT Sender FROM Chat WHERE Sender='".$_GET['<!?>']."'");
      if($row = mysqli_fetch_array($result)){
      echo $row['Sender'];
    }
    ?>
    ">
  </h4>
  </div>

<div class="rec">
  <?php

$result = mysqli_query($conn, "SELECT * FROM Chat WHERE Sender='".$_SESSION['email']."'");
// output data of each sender
echo '<p class="send">';
while($row = mysqli_fetch_array($result)){
  echo $row['message']. '<br>';
}
echo '</p>';
$result = mysqli_query($conn, "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."'");
// output data of each receiver
echo '<p class="rece">';
while($row = mysqli_fetch_array($result)){
 echo $row['message']. '<br>';
}
echo '</p>';

?>

</div>

    <textarea placeholder="Type Message Here" name="M"></textarea><br><br><br>
    <input type="submit" name="sub" value="Send Message">
  </div>
</div>
</form>


<?php
    $message = new Chatting();
    $message->updateMessage();
    if(isset($_POST['sub'])){
      if(empty($_POST['M'])){
         echo "ERROR U Don't Enter Message";
         return;
      }
      else {
          $message->setData($_SESSION['email'], $_GET['<!?>'], $_POST['M'], 'Delivered');
         $message->sendMessage($_SESSION['email'], $_GET['<!?>'], $_POST['M'], 'Delivered');
                }
   }

?>
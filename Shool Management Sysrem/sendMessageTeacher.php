<div class="wrapper">
<?php include "dB.php"; 
  ob_start();
include "teacherfrontEnd.php";
session_start();
 ?>

<style>
 <?php include "Styles/message.css";?>
  </style>
<div class="main_container">
<div class="item"> 

<form method="POST" action="">
<div class="box">  
<h1>Send Message</h1>

<br><div class="wra">
<h4>From:<input type="text" name="S" class='from' readonly value="<?php echo $_SESSION['email']; ?>">
      </h4>
        <h4 class='to'>To:
   <input type="text" name="R" readonly value="<?php echo $_GET['!?'];?>">
    </h4>
  <div class="rec">
  <?php
    $result = mysqli_query($conn, "SELECT * FROM Chat WHERE Sender='".$_SESSION['email']."'");
 // output data of each row
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





    <textarea placeholder="Type your message here" name="M"></textarea><br><br><br>
    <input type="submit" name="sub" value="Send Message">
    </div>  
    </div>
    </div>
  </div>
  </div>
  </form>


<?php
include 'Chatting.php';
   if(isset($_POST['sub'])){
      if(empty($_POST['M'])){
         echo "Error, no message is inserted to be sent";
         return;
      }
      else{
        $message = new Chatting();
        $message->setData($_POST['S'], $_POST['R'], $_POST['M'], 'Delivered');
        $message->sendMessage();
        $message->updateMessage();
      }
    
   }
?>


  
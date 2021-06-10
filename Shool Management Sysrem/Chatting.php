<?php
class Chatting{
    private $sender;
    private $receiver;
    private $message;
    private $messageType;
    
    public function setData($sender, $receiver, $message ,$messageType){
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
        $this->messageType = $messageType;
        if($this->validateData()){
            echo '<script>alret("Error, the data entered is not true")</script>';
            return;
        }
       
    }
    private function validateData(){
        $flag = true;
        if($this->sender == '' || $this->receiver == '' || $this->message == ''){
            return $flag;
        }
        else{
            $flag = false;
            return $flag;
        }
    }
    public function sendMessage(){
        include 'dB.php';
        $sql = mysqli_query($conn, "INSERT INTO Chat (Sender, Receiver, Message, messageType) 
        VALUES
        ('$this->sender', '$this->receiver', '$this->message', '$this->messageType')");
        header('Refresh: 0.1');
    }
    public function receiveMessage(){
        include 'dB.php';
        $sql = mysqli_query($conn, "SELECT * FROM Chat WHERE Receiver='".$_SESSION['email']."' AND messageType='Delivered'");
        if(mysqli_fetch_array($sql)){
            ?>
            <h4><?php $row['Receiver']; ?></h4>
            <h4><?php $row['message']; ?></h4>
            <h4><a href='Reply.php'></a></h4>
            <?php
        }
        header('Refresh: 0.1');
    }
public function updateMessage(){
        include 'dB.php';
        $res = mysqli_query($conn, "UPDATE Chat SET messageType='Read' WHERE Sender='".$_GET['!?']."' AND Receiver='".$_SESSION['email']."'");
   }
 public function getNumberOfMessages(){
        include 'dB.php';
        $sql = mysqli_query($conn, "SELECT message FROM Chat WHERE Receiver= '".$_SESSION['email']."' AND messageType='Delivered'");
        $count = 0;
        while($row = mysqli_fetch_array($sql)){
            $count++;
        }
        return $count;
   }


}


?>
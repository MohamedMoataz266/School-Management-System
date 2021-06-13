<?php
include 'Videos.php';
session_start();
$video = new Videos();
$video->setData('History', 'Lecture1', 'video/vid3.mp4');
//$video->addVideo($_SESSION['email'],'History', 'Lecture1', 'video/vid3.mp4');
//$video->removeVideo(10);
$video->updateVideo(12, 'History', 'Lecture2', 'video/vid3.mp4');


?>
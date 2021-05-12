<?php
include 'studentAffairs.php';

$student = new studentAffairs();

$student->addStudent('Ahmed', 'Ali', 'Hassan', 'Omar', 
                    '21596345879631', '2/3/2002', 'Male', 'Egyption', 
                    'Muslim', 'Cairo', 'SamarOmarKareem', '22 Roxy Street', 
                    '01125694692', 'Engineer', '2/5', '1487');
 $student->removeStudent('AhmedAliHassanOmar', '21596345879631');                    

?>
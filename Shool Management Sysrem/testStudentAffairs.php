<?php
include 'studentAffairs.php';

$student = new studentAffairs();

/*
$student->addStudent('Ahmed', 'Ali', 'Hassan', 'Omar', 
                    '21596345879631', '2/3/2002', 'Male', 'Egyption', 
                    'Muslim', 'Cairo', 'SamarOmarKareem', '22 Roxy Street', 
                    '01125694692', 'Engineer', '2/5', '1487');
                    */

$student->updateStudent(8,'AhmedAliHassanOmar', 
                          '21596345879631', 
                          '2/3/2002',
                          '19 Year 7 Month 31 Day', 
                          'Male', 
                          'Egyption', 
                           'Muslim', 
                           'Giza', 
                           'SamarOmarKareem', 
                           '22 Roxy Street', 
                           '01125694692', 
                           'Engineer', 
                           '2/4', 
                           '1487');

?>
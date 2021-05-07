<?php
include 'User.php';
$user = new User();
echo '<h2>Student</h2>';
$user->setData('Ahmed', 'Ali', 'Omar', 'Hassan', '12544365789631', '20/6/2014', 'Male', 'Student');
echo 'First Name: '.$user->getFirstName(). '<br>';
echo 'Second Name: '.$user->getSecondName(). '<br>';
echo 'Third Name: '.$user->getThirdName(). '<br>';
echo 'Fourth Name: '.$user->getFourthName(). '<br>';
echo 'National Number: '.$user->getNationalNumber(). '<br>';
echo 'Birth Date: '.$user->getBirthDate(). '<br>';
echo 'Gender: '.$user->getGender(). '<br>';
echo 'Full Name: '.$user->getFullName(). '<br>';
echo 'User Type: '.$user->getType(). '<br>';


echo '<h2>Teacher</h2>';
$user->setData('Kareem', 'Omar', 'Saad', 'Ibrahem', '21963785643126', '20/2/1990', 'Male', 'Teacher');
echo 'First Name: '.$user->getFirstName(). '<br>';
echo 'Second Name: '.$user->getSecondName(). '<br>';
echo 'Third Name: '.$user->getThirdName(). '<br>';
echo 'Fourth Name: '.$user->getFourthName(). '<br>';
echo 'National Number: '.$user->getNationalNumber(). '<br>';
echo 'Birth Date: '.$user->getBirthDate(). '<br>';
echo 'Gender: '.$user->getGender(). '<br>';
echo 'Full Name: '.$user->getFullName(). '<br>';
echo 'User Type: '.$user->getType(). '<br>';


echo '<h2>Student Affairs</h2>';
$user->setData('Mai', 'Saad', 'Hassan', 'Kamel', '21368425425128', '10/1/1995', 'Female', 'Student Affairs');
echo 'First Name: '.$user->getFirstName(). '<br>';
echo 'Second Name: '.$user->getSecondName(). '<br>';
echo 'Third Name: '.$user->getThirdName(). '<br>';
echo 'Fourth Name: '.$user->getFourthName(). '<br>';
echo 'National Number: '.$user->getNationalNumber(). '<br>';
echo 'Birth Date: '.$user->getBirthDate(). '<br>';
echo 'Gender: '.$user->getGender(). '<br>';
echo 'Full Name: '.$user->getFullName(). '<br>';
echo 'User Type: '.$user->getType(). '<br>';

echo '<h2>Personnel Affairs</h2>';
$user->setData('Rana', 'Saied', 'Mohsen', 'Hassan', '19657832107460', '20/2/1970', 'Female', 'Personnel Affairs');
echo 'First Name: '.$user->getFirstName(). '<br>';
echo 'Second Name: '.$user->getSecondName(). '<br>';
echo 'Third Name: '.$user->getThirdName(). '<br>';
echo 'Fourth Name: '.$user->getFourthName(). '<br>';
echo 'National Number: '.$user->getNationalNumber(). '<br>';
echo 'Birth Date: '.$user->getBirthDate(). '<br>';
echo 'Gender: '.$user->getGender(). '<br>';
echo 'Full Name: '.$user->getFullName(). '<br>';
echo 'User Type: '.$user->getType(). '<br>';


?>
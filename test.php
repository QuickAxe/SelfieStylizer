<?php 

$password = 'hello';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$hashedPassword2 = password_hash($password, PASSWORD_DEFAULT);
//echo "this : $hashedPassword";
var_dump($hashedPassword2);
var_dump($hashedPassword);
if($hashedPassword === $hashedPassword2)
    echo "<br>.True!";
else
    echo "<br>.False";
//echo password_verify("<br>hello", $hashedPassword);


?>


<?php

$cookie_fName = $_POST['fName'] ;
$cookie_lName = $_POST['lName'] ;
$cookie_gender = $_POST['gender'];

$fName = "FirstNameCookie";
$lName = "LastNameCookie";
$gender = "GenderCookie";

setcookie( $fName , $cookie_fName , time() + (86400 * 7), "/"); // 86400 = 1 day
setcookie( $lName, $cookie_lName , time() + (86400 * 7), "/"); // 86400 = 1 day
setcookie( $gender , $cookie_gender , time() + (86400 * 7), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$fName])) {
    echo "Cookie named '" . $fName . "' is not set!";
  } else {
    echo "Cookie '" . $fName . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$fName] . "<br>";
  }

if(!isset($_COOKIE[$lName])) {
    echo "Cookie named '" . $lName . "' is not set!";
  } else {
    echo "Cookie '" . $lName . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$lName] . "<br>";
  }

  if(!isset($_COOKIE[$gender])) {
    echo "Cookie named '" . $gender . "' is not set!";
  } else {
    echo "Cookie '" . $gender . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$gender] . "<br>";
  }

?>

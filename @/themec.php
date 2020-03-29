<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['themec']))
{
$themec = $_GET['themec'];

// register the session and set the cookie
$_SESSION['themec'] = $themec;

setcookie("themec", $themec, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['themec']))
{
$themec = $_SESSION['themec'];
}
else if(isSet($_COOKIE['themec']))
{
$themec = $_COOKIE['themec'];
}
else
{
$themec = 'blu';
}

switch ($themec) {
  case 'blu':
  $themec_file = 'blu.php';
  break;

  case 'red':
  $themec_file = 'red.php';
  break;

  case 'vi':
  $themec_file = 'vi.php';
  break;

  default:
  $themec_file = 'blu.php';

}

include_once 'th2/'.$themec_file;
?>
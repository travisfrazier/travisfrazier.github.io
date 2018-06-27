<?php
$your_email = 'travisfrazier.me@gmail.com';
$subject = 'New contact request from portfolio form';

if (isset($_POST) && !empty($_POST)) { //Checks if action value exists

  $name = $_POST['name'];
  $email = $_POST['email'];
  $massage = $_POST['massage'];

  if(@mail($your_email, $subject, $massage))
  {

    $result = array("status" => "1","msg" => "Thanks for reaching out! I will get back to you as soon as possible.");
    echo json_encode($result);

  }else{

    $result = array("status" => "0","msg" => "Somthing went wrong.Please try later.");
    echo json_encode($result);

  }

}

?>

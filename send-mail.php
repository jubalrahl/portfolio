<?php
if($_POST){
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $message .= " My phone number is ";
    $message .= $phone;


//send email
    mail("admin@jubalrahlportfolio.name", "This is an email from: " .$email,  $message);
}
?>

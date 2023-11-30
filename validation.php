<?php

require_once 'mail.php';
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];     
$message = $_POST["subject"];

if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["subject"]))
{
    echo "please enter ur information";
}else if(!preg_match('/[A-Za-z\s]/',$name)){
    echo "name invalid";
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "email invalid";
}else if(!preg_match('/^[0-9]{10}$/',$phone)){
    echo 'phone invalid';
}else if(strlen($message)>30){
    echo "it must contain more than 30 caractere";
}else{
   

    $mail->setFrom($email,$name);
    $mail->addAddress('elhattabmohammedelarbi@gmail.com', 'test');
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';     

    $mail->send();

}
?>
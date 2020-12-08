<?php

if ((isset($_POST['submit']))) {


    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth= true;
    $mail->SMTPSecure='tls';
    $mail->Username='mailwork869@gmail.com';
    $mail->Password='$debaroti$dollar';

    $mail->setFrom($mailFrom,$name);
    $mail->addAddress('joydascsepuc@gmail.com');
    $mail->addReplyTo($mailFrom,$name);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body='<h5> Mail From: </h5><br>'.$name.'<p>Email: </p>'.$mailFrom.'<br> <p>Message(From BITM-Website) : <br>'.$message;

    if(!$mail->send()){

        // echo "<script> location.href='notsent.php'</script>";
        header('location:notsent.php');
        exit;

    }else{

        // echo "<script> location.href='confirm.php'; </script>";
        header('location:confirm.php');
        exit;
    }

}

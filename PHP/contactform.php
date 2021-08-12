<?php


if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $emailFrom=$_POST['email'];
    $options=$_POST['options'];
    $message=$_POST['message'];

    $to="withanisha@withanisha.com"; 
    $headers="From: My Website";
    $txt="You have recieved an e-mail from your website"."\n\n".$name.$options.$message;

    mail($mailTo,$options,$txt,$headers);
    header("Location: index.php?mailsend");
}
<?php

if(isset($_POST['submit'])) {
    $name = $_POST['uname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $txt = "From: ".$email."\n\n Message: \n".$message;
    
    
    mail("contact@kytek.pl", $name, $txt);
    
    
   
    header("Location: index.php#mail");
     
} else {
    echo 'dupa';
}

?>


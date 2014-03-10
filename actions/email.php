<?php

$mailto = "ddmoulton@vwc.edu";
$emailSubject = "dmltn.com Contact Form";
$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];


$body = "<p>Name: " + $name + "<br />Email: " + $email  + "<br />Comments: <br />" + $comments + "<br />";
       
        
        $headers = "From: $email\r\n";
        $headers .= "Content-type: text/html\r\n";
        
        $success = mail($mailto, $emailSubject, $body, $headers);
        
        
   ?>
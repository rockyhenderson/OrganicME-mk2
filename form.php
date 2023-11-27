<?php
    $to = "jack@teamhendo.com"
    $subject = "website Enquiry"
    $email_field = $_POST['email']
    $name = $_POST['name']
    $query = $_POST['query']


    $body = "From: E-Mail : $name \n $email_field\n Message:\n $query"

    echo("Thank you for your message, it has been sent to $to")
    mail($to, $subject, $body) //mail function
?>
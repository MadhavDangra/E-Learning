<?php

if($_POST["submit"]) {
    $recipient="techteam@pxy.in";
    $subject="Form to email message";
    $UserName=$_POST["UserName"];
    $Email=$_POST["Email"];
    $Mobile=$_POST["Mobile"];
    $DOB=$_POST["DOB"];
    $expectation=$_POST["expectation"];
    $intern=$_POST["intern"];  

    $mailBody="Name: $Username\nEmail: $Email\nMobile: $Mobile\nDOB: $DOB\n expectation: $expectation \nintern: $intern";

    mail($recipient, $subject, $mailBody, "From: $sender <$Email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

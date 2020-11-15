
<?php

    $name = $_POST["name"];
    $company = $_POST["company"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comment = $_POST["comment"];
    $email_from = "Greenland Institute";
    $email_subject = "anthoniaonyekaa@gmail.com";
    $email_body =   "name: $name.\n".
                    "company: $company.\n".
                    "email: $email.\n".
                    "phone: $phone.\n".
                    "comment: $comment.\n";
    $to = 'anthoniaonyekaa@gmail.com';
    $headers = "FROM: $email_from \r\n";
    $headers = "REPLY-TO: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("location: index.html");
?>

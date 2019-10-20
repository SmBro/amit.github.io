<?php



   $name = $_POST['name'];
   $visitor_email = $_POST['email'];
   $msg = $_POST['message'];
   $sub = $_POST['subject'];
   $phn = $_POST['phone'];
  
    $email_from = 'contact@snehashis.cf';

    $email_subject = "New Form Submission";

    $email_body  = "User name : $name.\n".
                    "User Email: $visitor_email.\n".
              "User Contact Number: $phn.\n".
                "Subject: $sub.\n".
                    "Message : $msg.\n";

    $to = "smbrohere@gmail.com ";
    $headers = "Form: $email_from \r\n";
    $headers = "Reply- To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact-form-thank-you.html");

?>
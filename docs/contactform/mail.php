<?php
if(isset($_POST['submit'])){
    $to = "bibhashp.das@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject']
    $message = $__POST['message']
    $subject2 = "Message Received";
    $message2 = "Dear " . $name . "," . "\n Your response has been submitted successfully. Thank you for visiting my profile. Your message is much appreciated and I will surely look into it\nRegards,\nBibhash Pran Das";


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
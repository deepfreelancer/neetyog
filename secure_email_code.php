
<?php 
//if(isset($_POST['submit'])){
    $to = "info@neetyog.com"; // this is your Email address
    $first_name = $_POST['first_name'];
    $from = $_POST['email']; // this is the sender's Email address
    $mobile = $_POST['mobile'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $mobile . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
   // echo "<script language= 'JavaScript'>alert('Mail Sent. Thank you $first_name , we will contact you shortly. ');</script>";
    //echo "<script language= 'JavaScript'>myFn();</script>";
    //header('Location: thank_you.php');
//}
?>
<?php
if($_POST) {
    $name = "";
    $email = "";
    $message = "";
    
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    if(isset($_POST['message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
    }
    if(empty($name)) {
        echo "Name is empty.<br>";
        exit(1);
    }
    if(empty($email)) {
        echo "Email is empty.<br>";
        exit(1);
    }
    if(empty($message)) {
        echo "You have not entered a message.<br>";
        exit(1);
    }

    $email_from = $email;

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
    $to = "daniel.jensen.077@gmail.com";

    $headers = "From: $email_from \r\n";
                          
    $headers .= "Reply-To: $visitor_email \r\n";
                          
    mail($to,$email_subject,$email_body,$headers);
} 
else {
    echo '<p>Something went wrong</p>';
}
?>
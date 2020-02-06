
<?php


    if(isset($_POST['submit'])){


        $to = "mikowhy72@gmail.com";
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $txt = $_POST['message'];
        $headers = "From: ".$email . "\r\n";
        /*header("Location: contact.html");       */ 
      
        mail($to, $subject, $txt, $headers);

    
        if(mail($to, $subject, $txt, $headers)){
            echo "The form has been submitted.";
        }else{
            echo "The form has not been submitted.";
        }

        
        
    }


?>


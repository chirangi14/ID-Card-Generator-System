<?php
    
    $qry=$con->prepare("INSERT INTO registration(name, email) VALUES(?, ?)");
    $qry->bind_param("ss", $name, $email);
    $result = $qry->execute();
    if($result){
    require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer(true);
        try{
            $mail->SMTPDebug = 0;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'idcardsystem34@gmail.com';                 // SMTP username
            $mail->Password = '24031404';                           // SMTP password  
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('idcardsystem34@gmail.com', 'qr');
            $mail->addAddress($email);     // Add a recipient

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = "Your ID and Password!";
            $mail->Body    = "<p>Dear $ufname,</p>
                <p>Thank you for your order!</p>
                <p>Your order has now been received, and you will shortly receive an amount for your event photography.</p>
                <p>Kind regards,<br>
                Himanshu Art.</p>";
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                //echo json_encode(array("a"=>1, "b"=>"Your order is sent successfully. We will contact you soon."));
                echo "Your order is sent successfully. We will contact you soon.";
            }   
        }catch(Exception $e){
            
        }
    }

?>
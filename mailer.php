<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '/home2/omrihopson/public_html/Xquoticmas/phpmailer/vendor/autoload.php';
require '/home2/omrihopson/public_html/Xquoticmas/phpmailer/vendor/phpmailer/phpmailer/src/Exception.php';
require '/home2/omrihopson/public_html/Xquoticmas/phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '/home2/omrihopson/public_html/Xquoticmas/phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';


function sendEmail($toAddress)
{
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            // $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            // $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'xquoticmas@gmail.com';                 // SMTP username
            $mail->Password = 'xquoticband';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465; //587 for tls                                  // TCP port to connect to

            //Recipients
            $mail->setFrom('xquoticmas@gmail.com', 'Xquotic Mas');
            // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress($toAddress);               // Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'UWI Carnival Package Order';
            $mail->Body    = '<img src="/Xquoticmas/assets/MasLogo.png" id="exotic" alt="exotic" style="width: 25%; position: fixed; right: 0; left: 0; top: 0;">

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


            <div style="position: relative; right: 0; left: 0; top: 0; bottom: 0; ">
                <p style="font-size:160%;">Hi {$firstname} ,</p>
                <br>
                Thank you for choosing Xquotic Mas ! If you have any questions with regard to your order please visit our website and contact us as soon as possible.
                <br>
                <br>
                In the event that we need to reach you we will contact you using the number below.
                <h1 style="font-size:300%;">Invoice</h1>
                <p style="font-size:160%;">Name on Order:</p>
                <p style="font-size:160%;">Call back Number:</p>
                <br>
                <h1>Order Details</h1>
                <p style="font-size:160%;">Order #: </p>
                <p style="font-size:160%;">Date: </p>
                <hr>
                <b style="margin-right: 100px;">Amount</b><span style="margin: 50px 100px;"><b>Purchase Description</b></span><b style="margin: 50px 100px;">Amount</b>
                <br>
                <br>
                <b style="margin-right: 100px;">Amount</b><span style="margin: 50px 100px;"><b>Purchase Description</b></span><b style="margin: 50px 100px;">Amount</b>
                <hr>';

            $mail->send();
            echo 'Email Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
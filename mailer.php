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


function sendEmail($toAddress, $firstname, $lastname, $phone, $invoicenumber, $dte, $quantity, $package, $subpackage, $ordertotal, $paymenttype)
{
    $firstname = (string)$firstname;
    $lastname = (string)$lastname;
    $phone = (string)$phone;
    $invoicenumber = (string)$invoicenumber;
    $dte= (string)$dte;
    $quantity = (string)$quantity;
    $package = (string)$package;
    $subpackage = (string)$subpackage;
    $ordertotal = (string)$ordertotal;
    $paymenttype = (string)$paymenttype;

    if ($subpackage == 'N/A') {
        $subpackage = '';
        exit;
    }
    if ($paymenttype == 'bank') {
        $paymentmessage = 'Your choice of payment was to do a bank deposite. A member from the Xquotic team will be contacting you shortly with more details.';
    }else{
        $paymentmessage = 'Your choice of payment was to meet face to face. A member from the Xquotic team will be contacting you shortly with more details.';
    }


$body = '<!DOCTYPE html>'
.'<html>'
.'<head>'
    .'<meta charset="utf-8">'
    .'<meta http-equiv="X-UA-Compatible" content="IE=edge">'
    .'<meta name="viewport" content="width=device-width, initial-scale=1">'

    .'<link rel="apple-touch-icon" sizes="57x57" href="/Xquoticmas/assets/favicon/apple-icon-57x57.png">'
    .'<link rel="apple-touch-icon" sizes="60x60" href="/Xquoticmas/assets/favicon/apple-icon-60x60.png">'
    .'<link rel="apple-touch-icon" sizes="72x72" href="/Xquoticmas/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/Xquoticmas/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/Xquoticmas/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/Xquoticmas/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/Xquoticmas/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/Xquoticmas/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/Xquoticmas/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/Xquoticmas/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/Xquoticmas/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/Xquoticmas/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/Xquoticmas/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/Xquoticmas/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/Xquoticmas/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link href="http://www.xquoticmas.com/Xquoticmas/stylesheet/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="http://www.xquoticmas.com/Xquoticmas/stylesheet/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="http://www.xquoticmas.com/Xquoticmas/stylesheet/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.xquoticmas.com/Xquoticmas/stylesheet/css/lightbox.min.css" rel="stylesheet">
    <link href="http://www.xquoticmas.com/Xquoticmas/stylesheet/css/homestyle.css" rel="stylesheet">


</head>
<body>'
.'<img src="http://www.xquoticmas.com/Xquoticmas/assets/MasLogo.png" id="exotic" alt="exotic" style="width: 25%; position: fixed; right: 0; left: 0; top: 0;">'
                .'<br>'
            .'<div class="container" style="position: relative; right: 0; left: 0; top: 0; bottom: 0; border: 2px; border-radius: 8px; ">'
                .'<p style="font-size:160%;">Hi '.$firstname.' , </p>'
                .'<br>'
                .'<p>Thank you for choosing Xquotic Mas! If you have any questions with regard to your order please visit our website and contact us as soon as possible.</p>'
                .'<br>'
                .'<br>'
                .'<p> In the event that we need to reach you we will contact you using the number or email below.</p>'
                .'<br>'
                .'<h1 style="font-size:300%;">Invoice</h1>'
                .'<p style="font-size:160%;">Name on Order: '.$firstname.' '.$lastname.'</p>'
                .'<p style="font-size:160%;">Call back Number: '.$phone.'</p>'
                .'<br>'
                .'<h1>Order Details</h1>'
                .'<p style="font-size:160%;">Order : '.$invoicenumber.'</p>'
                .'<p style="font-size:160%;">Date: '.$dte.'</p>'
                .'<p style="font-size:160%;">Payment Choice: '.$paymentmessage.'</p>'
                .'<table class="table table-hover">'
                  .'<thead>'
                    .'<tr>'
                      .'<th scope="col">Quantity</th>'
                      .'<th scope="col">Purchase Description</th>'
                      .'<th scope="col">Order Amount</th>'
                    .'</tr>'
                  .'</thead>'
                  .'<tbody>'
                    .'<tr>'
                      .'<td>' .$quantity.'</td>'
                      .'<td>' .$package. ' '  .$subpackage.'</td>'
                      .'<td>' .$ordertotal.' JMD</td>'
                    .'</tr>'
                  .'</tbody>'
                .'</table>'
                .'<hr>'
                .'<br>'
                .'<br>'
                .'</body>'
                .'</html>';


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
            // $mail->addAttachment('/Xquoticmas/assets/MasLogo.png');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'UWI Carnival Package Order';
            $mail->Body    = $body;

            $mail->send();
            // echo 'Email Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
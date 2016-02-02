<?php
require ('PHPMailer/PHPMailerAutoload.php') ;

$from       = 'rentals@villaaqua.com';
$fromName   = 'Villa Aqua Contact Form';
$to         = 'rentals@villaaqua.com';
$replyTo    = 'rentals@villaaqua.com';

$mail       = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP                                    // TCP port to connect to

$mail->From = $from;
$mail->FromName = $fromName;
$mail->addAddress($to, 'Info');     // Add a recipient             // Name is optional
$mail->addReplyTo($replyTo, 'New coments from Villa Aqua - Contact Form');
$mail->addBCC('oliver@wheretogo.com.mx');
$mail->addBCC('raul@wheretogo.com.mx');


$mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'New coments from Villa Aqua - Contact Form';
    $mail->Body    = ' Name: <strong>'.$_POST['clientName']. '</strong> <br />'
                . ' City / Country: <strong>'.$_POST['clientCity']. '</strong> <br />'
                . ' Company: <strong>'.$_POST['clientCompany']. '</strong> <br />'
                . ' Phone: <strong>'.$_POST['clientPhone']. '</strong> <br />'
                . ' Mobile: <strong>'.$_POST['clientMobile']. '</strong> <br />'
                . ' E-mail: <strong>'.$_POST['clientEmail'] . '</strong> <br />'
                . ' Arrival: <strong>'.$_POST['clientArrival'] . '</strong> <br />'
                . ' Departure: <strong>'.$_POST['clientDeparture'] . '</strong> <br />'
                . ' No. of Adults: <strong>'.$_POST['clientAdults'] . '</strong> <br />'
                . ' No. of Children: <strong>'.$_POST['clientChildren'] . '</strong> <br />'
                . ' Purpose of my Trip: <strong>'.$_POST['clientPurpose'] . '</strong> <br />'
                . ' Info about: <strong>'.$_POST['clientInfo']. '</strong>'
            ;


if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
	echo 0;
} else {
    echo 'success';
}
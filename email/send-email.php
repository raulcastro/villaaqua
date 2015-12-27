<?php
require ('PHPMailer/PHPMailerAutoload.php') ;

$from       = 'reservaciones@inroadrivieramaya.com';
$fromName   = 'In Road Riviera Maya';
$to         = 'reservaciones@inroadrivieramaya.com';
$replyTo    = 'reservaciones@inroadrivieramaya.com';

$mail       = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP                                    // TCP port to connect to

$mail->From = $from;
$mail->FromName = $fromName;
$mail->addAddress($to, 'Info');     // Add a recipient             // Name is optional
$mail->addReplyTo($replyTo, 'Comentarios desde In Road Riviera Maya');
$mail->addBCC('oliver@wheretogo.com.mx');
$mail->addBCC('raul@wheretogo.com.mx');


$mail->isHTML(true);                                  // Set email format to HTML
if ($_POST['kindForm'] == 'transferService')
{
    $mail->Subject = 'Nuevo transfer In Road Riviera Maya';
    $mail->Body    = ' Servicio: <strong>'.$_POST['serviceTitle']. '</strong> <br />'
                . ' Hora: <strong>'.$_POST['serviceHour']. '</strong> <br />'
                . ' Dia: <strong>'.$_POST['dateService']. '</strong> <br />'
                . ' Numero de personas: <strong>'.$_POST['noPeople']. '</strong> <br />'
                . ' Nombre: <strong>'.$_POST['name']. '</strong> <br />'
                . ' Email: <strong>'.$_POST['email'] . '</strong> <br />'
                . ' Telefono: <strong>'.$_POST['phone'] . '</strong> <br />'
                . ' Nota: <strong>'.$_POST['message']. '</strong>'
            ;
}
else
{
    $mail->Subject = 'Comentarios desde In Road Riviera Maya';
    $mail->Body    = ' Name: <strong>'.$_POST['name']. '</strong> <br />'
                . ' Email: <strong>'.$_POST['email'] . '</strong> <br />'
                . ' Phone: <strong>'.$_POST['phone'] . '</strong> <br />'
                . ' Message: <strong>'.$_POST['message']. '</strong>'
            ;
}

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'success';
}
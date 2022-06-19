<?php

    $empresa = $_POST['empresa'];
    $mensaje = $_POST['mensaje'];
    $contenido = "Empresa: " . $empresa . "<br>" . "Mensaje: " . $mensaje;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpMailer/Exception.php';
    require 'phpMailer/PHPMailer.php';
    require 'phpMailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->SMTPDebug = 0;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'correo de acceso';            //SMTP username
        $mail->Password   = 'clave de acceso';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('dirección de correo, de donde enviará los correos', 'nombre de usuaio');
        $mail->addAddress('dirección de correo hacia donde serán enviados los correos');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Correo de: ' . $empresa;
        $mail->Body    = $contenido;

        $mail->send();
        echo json_encode("ok");
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        echo json_encode("error");
    }

?>
<?php
require_once("class.phpmailer.php");

$mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress('nilayan_ahmed@outlook.com','Nilayan Ahmed');
        
        $mailer->Subject = "PHP Mail Test ";

        $mailer->From = "NilayanAhmedBPHC";        

        
        $mailer->Body ="I am YOU!!!";

        if(!$mailer->Send())
        {
            echo "Failed sending registration confirmation email.";
        }
        return "Mail send successfully";
?>
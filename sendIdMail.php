<?php
require_once("class.phpmailer.php");

$query="select * from regtable where atmos_id='atmos131000'";
$result=mysql_query($query);

while($row=mysql_fetch_array($result))
{
		$mailer = new PHPMailer();
        
        $mailer->CharSet = 'utf-8';
        
        $mailer->AddAddress($row['email'],$row['name']);
        
        $mailer->Subject = "ATMOS ID Update";

        $mailer->From = "admin@bits-atmos.org";        

        
        $mailer->Body ="Please note your revised ATMOS ID : ".$row['atmos_id']."\r\n".
		"".
		"\r\n".
        "Regards,\r\n".
        "Webmaster\r\n".
        "admin@bits-atmos.org";

        if(!$mailer->Send())
        {
            echo "Failed sending registration confirmation email.";
        }
        echo "Mail send successfully";
}		
?>
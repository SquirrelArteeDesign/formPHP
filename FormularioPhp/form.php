<?php
 
	include('Classes/Mail.php');
    $mail = new Mail($_POST);
    $mail->sendMail();

?>
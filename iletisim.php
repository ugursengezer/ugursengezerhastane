<?php

include "iletisim_form.php";

if (!isset($_POST['ad']) AND !isset($_POST['subject']) AND !isset($_POST['message']) AND !isset($_POST['sender']) ) exit;

require '/classes/class.phpmailer.php';

$mail = new PHPMailer;
$mail->CharSet='UTF-8';
$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'u.sengezer@hotmail.com';                // SMTP username
$mail->Password = '8tLsCmofpAnboJXmWMH3Vw';  

$mail->From = 'Dev1.Turksat@net.com';
$mail->FromName = 'TURKSAT E-DEVLET A.Ş.';
// $mail->AddAddress('fthblt_91@hotmail.com', 'Josh Adams');  // Add a recipient
 $mail->AddAddress('ugurcansengezer@gmail.com');               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = $_POST['subject'];
$mail->email =  "E-Posta: ".$_POST['email'];
$mail->Body    =  "Ad - Soyad: ".$_POST['ad']."<br>"."<br>"."<br>"."Konu: ".$_POST['subject']."<br>"."<br>"." ve MESAJ: "."<br>".$_POST['message'];
$mail->AltBody = 'Nothing to do! Sorry.';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo "<script>alert('Mesajınız Gönderildi!')</script>";




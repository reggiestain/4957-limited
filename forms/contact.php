<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'smtp.mailtrap.io';
  $mail->SMTPAuth = true;
  $mail->Port = 2525;
  $mail->Username = '292255af1388f9';
  $mail->Password = '39e7f92fce48fb';
  try {

  //Recipients
      $mail->setFrom($_POST['email'], $_POST['name']);
      $mail->addAddress('reggiestain@gmail.com', 'Forty Nine 57');     //Add a recipient
      //$mail->addAddress('ellen@example.com');               //Name is optional
      //$mail->addReplyTo('info@example.com', 'Information');
      //$mail->addCC('cc@example.com');
      //$mail->addBCC('bcc@example.com');

      //Attachments
      //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
      //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $_POST['subject'];
      $mail->Body    = $_POST['message'];
      //$mail->AltBody =

      $mail->send();
      echo 'OK';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

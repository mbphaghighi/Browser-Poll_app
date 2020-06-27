<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendEmail($emailAddress,$name,$mailContent){
    require("PHPMailer.php");
    require("Exception.php");
    require("SMTP.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->SMTPDebug = 1;
    $mail->SMTPAuth = true;
    $mail->Username = 'justfortestbb8185@gmail.com';
    $mail->Password = 'bagH2022';
    $mail->SetFrom('justfortestbb8185@gmail.com', 'mehdibb');
    //$mail->AddReplyTo('mbph471@gmail.com', 'mehdi');
    $mail->AddAddress($emailAddress, $name);
    $mail->isHTML(true);
    $mail->Subject = 'The Poll Record';
    $mail->Body = $mailContent;
    //for attach a html file to email!
    //$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
    if($mail->send()){
        echo 'Message has been sent';
    }else {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}

    //for attach a file
    // $mail->addAttachment('path/to/invoice1.pdf', 'invoice1.pdf');
    //for attach a image
    /* $mail->addEmbeddedImage('path/to/image_file.jpg', 'image_cid');
     $mail->isHTML(true);
     $mail->Body = '<img src="cid:image_cid">';*/
    //for send multiple email
    /*  $users = [
          ['email' => 'max@example.com', 'name' => 'Max'],
          ['email' => 'box@example.com', 'name' => 'Bob']
      ];

      foreach ($users as $user) {
          $mail->addAddress($user['email'], $user['name']);

          $mail->Body = "<h2>Hello, {$user['name']}!</h2> <p>How are you?</p>";
          $mail->AltBody = "Hello, {$user['name']}! \n How are you?";
          try {
              $mail->send();
              echo "Message sent to: ({$user['email']}) {$mail->ErrorInfo}\n";
          } catch (Exception $e) {
              echo "Mailer Error ({$user['email']}) {$mail->ErrorInfo}\n";
          }

          $mail->clearAddresses();
      }

      $mail->smtpClose();*/


//var_dump($_SERVER) ;
echo time();

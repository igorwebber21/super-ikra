<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

//echo phpinfo();
//print_r($_POST);


// Create a message
/*ob_start();
require APP. '/views/mail/mail_order.php';
$body = ob_get_clean(); */

//============================= send email by SwiftMailer =======================================//

if(isset($_POST['Name']) && isset($_POST['Phone']))
{

  ob_start();
  require 'mail_order.php';
  $body = ob_get_clean();

  $transport = (new \Swift_SmtpTransport('smtp.ukr.net',
    '2525', 'ssl'))
    ->setUsername('igorwebber21@ukr.net')
    ->setPassword('duP4f7xivl14OvES');

  $mailer = new \Swift_Mailer($transport);

  // megaopt27@ukr.net
  $messageClient = (new \Swift_Message("Новый заказ"))
    ->setFrom(['igorwebber21@ukr.net' => 'Super Ikra'])
    ->setTo('megaopt27@ukr.net')
    ->setBody($body, 'text/html');

  // Send a message
  $result = $mailer->send($messageClient);

  echo $result;
}

/*

Name: Макс
Phone: 0506789432
Quantity:  Кета 2 по 0,5 = 1160 грн.
comm: Кета в один клік
ip: 31.128.76.48

formId: form4, form5, form7

*/


/*


Name: цауца
lastName: цуауца
Phone: 0689182663
City: Одесса
Department: №233
Quantity:  Щука 2 по 0,5 = 1000 грн. + 0.5 в подарунок!
comm: Акція 1+1=3в
ip: 31.128.76.48
formId: form3

*/


 
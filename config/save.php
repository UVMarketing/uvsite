<?php
  session_start();
  require 'db.php';
  $contact = R::dispense('contacts');
  if (isset($_POST['name']) AND isset($_POST['email'])) {
    $contact->name = $_POST['name'];;
    $contact->email = $_POST['email'];
    $contact->phone = $_POST['phone'];
    $contact->message = $_POST['message'];
    $id = R::store($contact);

    $title = 'UV Marketing | Contacto';
    $message = '<html><body>';
    $message .= '<h1>Hola '.$contact->name.'</h1>'
    .'<h3>Gracias por contactarnos<br>'
    .'Nos comunicaremos en la brevedad contigo.</h3>';
    $message .='</body></html>';
    $headers = 'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=UTF-8'."\r\n";
    $headers .= 'From: contacto@uvmarketing.com.mx'."\r\n".'Reply-To: contacto@uvmarketing.com.mx'."\r\n".'X-Mailer: PHP/'.phpversion();
    mail($contact->email,$title,$message,$headers);
    $_SESSION['message'] = $contact->name.', Gracias por enviar tu mensaje';
    header('location:../index.php');
  }else {
    $_SESSION['message'] = 'Error al enviar tu mensaje';
    header('location:../index.php');
  }
 ?>

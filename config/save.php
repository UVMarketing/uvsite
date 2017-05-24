<?php
  require 'db.php';
  $contact = R::dispense('contacts');
  $contact->name = $_POST['name'];;
  $contact->email = $_POST['email'];
  $contact->phone = $_POST['phone'];
  $contact->message = $_POST['message'];
  $id = R::store($contact);

  $title = 'UV Marketing | Contacto';
  $message = '<h1>Hola '.$contact->name.'</h1>'
  .'<h3>Gracias por contactarnos<br>'
  .'Nos comunicaremos en la brevedad contigo.</h3>';
  $headers = 'From: contacto@uvmarketing.com.mx'."\r\n".'Reply-To: contacto@uvmarketing.com.mx'."\r\n".'X-Mailer: PHP/'.phpversion();
  mail($contact->email,$title,$message,$headers);
 ?>

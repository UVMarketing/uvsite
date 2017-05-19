<?php
  require 'rb.php';
  R::setup('mysql:host=localhost;dbname=uvsite', 'uvsite', 'uvsite');
  $clients = R::findAll('client');
 ?>

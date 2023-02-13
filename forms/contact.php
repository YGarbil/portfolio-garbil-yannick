<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
echo function_exists('mail') ? 'mail() est activée' : 'mail() est désactivée';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "garbil.yannick@laposte.net";
  $subject = "Nouveau message de $name";
  $headers = "From: $email\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "Le message a été envoyé avec succès.";
  } else {
    echo "Il y a eu une erreur lors de l'envoi du message.";
  }
}

echo "Bonjour, ceci est une page PHP";

?>
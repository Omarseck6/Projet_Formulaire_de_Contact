<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $receiver = "seckomar839@gmail.com"; //C"est cette email qui reçevra tout les message envoyé
      $subject = "From: $name <$email>";
      $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
      $sender = "From: $email";
      if(mail($receiver, $subject, $body, $sender)){
         echo "Votre message a été envoyé avec succées";
      }else{
         echo "Desolé, echec lors de l'envoie du message !";
      }
    }else{
      echo "Entrer un address email valide !";
    }
  }else{
    echo "L'Email et le message sont requis!";
  }
?>

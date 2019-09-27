<?php

   $to    = "contact@petitromain.fr";
   // adresse MAIL OVH liée à l’hébergement.
   $from  = "contact@rentree-etudiants-cmz.fr";
   ini_set("SMTP", "smtp.rentree-etudiants-cmz.fr");   // Pour les hébergements mutualisés Windows de OVH
   // *** Laisser tel quel
   $Subject = "Rentrée des Etudiants - Inscription";



   $message = 'Bienvenue a la validation de linscription,

   Pour valider votre inscription, veuillez cliquer sur le lien ci dessous
   ou copier/coller dans votre navigateur internet.

   http://rentree-etudiants-cmz.fr/validation-picnic.php?nom='.urlencode($nom).'&cle='.urlencode($cle).'


   ---------------
   Ceci est un mail automatique, Merci de ne pas y répondre.';



   $headers  = "MIME-Version: 1.0 \n";

   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";

   $headers .= "From: $from  \n";

   $headers .= "Disposition-Notification-To: $from  \n";



   // Message de Priorité haute

   // -------------------------

   $headers .= "X-Priority: 1  \n";

   $headers .= "X-MSMail-Priority: High \n";



   $CR_Mail = TRUE;



   $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);



   if ($CR_Mail === FALSE)

      {

      echo " ### CR_Mail=$CR_Mail - Erreur envoi mail <br> \n";

      }

   else

      {

      echo " *** CR_Mail=$CR_Mail - Mail envoyé<br> \n";

      }

?>

<html>
<head>
<title>Formulaire de contact</title>
</head>

<?php

// Envoi du message sur ma boite mail

    $email = $_POST['mail'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    
    $sujet="Formulaire de contact";
    $mailDestinataire="adrien.naulet@gmail.com";

	$from = "From: ".$prenom." ".$nom."<".$email."> \nMime-Version:\n"; 
	$from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";
	$header= $Sujet;
	
	$messageMail = "
            Formulaire de contact:
            
            Nom :   ".$nom."
            Prénom :   ".ucfirst($prenom)."
            Email :   ".$email."
			Objet :   ".$objet."
            
            ----------- Commentaires -----------
            ".Stripslashes($_POST['commentaire'])."
            ---------------------------------------";
            
	mail($mailDestinataire, $sujet, $messageMail, $from);

?>

<table width="370" height="245" border="1" align="center">
  <tr>
    <td align="center">Votre demande <br>
est bien prise en compte.<br>
<br>
Une r&eacute;ponse vous sera envoy&eacute;e prochainement.<br /> <strong>Merci, &agrave; bient&ocirc;t</strong><br /><br /><a href="http://adrien.naulet.free.fr">Retour vers le site</a></td>
  </tr>
</table>
</body>
</html>
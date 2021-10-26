<?php

	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$message = $_POST['message'];
	
	$email_from = 'contact@xxx';
	$email_body = "Nouveau message de $prenom $nom\n\n".
		"Son adresse email: $email\n\n".
        "Son téléphone: $telephone\n\n"
		"Son message:\n $message\n\n\n".
		
	$to = 'contact@xxx';
	$headers = "De $email_from \r\n";
		
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("refresh:5;url=index.html");
?>
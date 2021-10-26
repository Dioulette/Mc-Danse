<?php
$nom = $_POST["nom"] ;
$prenom = $_POST["prenom"] ;
$email = $_POST["email"] ;
$telephone = $_POST["telephone"] ;
$message = $_POST["message"];

$EmailTo = "aude.arnaudet@gmail.com" ;
$Subject = "Nouveau message reçu" ;

// préparer le corps du texte de l'e-mail
$Corps .= "Nom : " ;
$Corps .= $nom;
$Corps .= "\n";

$Corps .= "Prénom : " ;
$Corps .= $prenom;
$Corps .= "\n";

$Corps .= "Télephone : " ;
$Corps .= $telephone;
$Corps .= "\n";

$Body .= "E-mail : " ;
$Corps .= $email;
$Corps .= "\n";

$Corps .= "Message : " ;
$Corps .= $message;
$Corps .= "\n";

// envoyer un e-mail
$success = mail($EmailTo, $Subject, $Body, "From :".$email);

// redirige vers la page de réussite
si ($succès){
   echo "succès" ;
}autre{
    echo "invalide" ;
}

?>
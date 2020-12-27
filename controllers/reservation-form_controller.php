<?php
session_start();

if(!isset($_SESSION['user'])) // retour à l'envoyeur si pas de variable session crée
{
    header('location: connexion');
    exit();
}

if (isset($_POST['submit'])) 
{
    // variables intermediaires
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $debut = htmlspecialchars($_POST['date']). " ".$_POST['heure-debut'];
    $fin = htmlspecialchars($_POST['date']). " ".$_POST['heure-fin'];
    $id_utilisateur = $_SESSION['user'];

    $reservation = new Reservation(connect());  //instanciation de Reservation
    $request = $reservation->insert_event($titre, $description, $debut, $fin, $id_utilisateur);  // insertion d'une nouvelle resa

    header('location: planning');
    exit();
}

?>
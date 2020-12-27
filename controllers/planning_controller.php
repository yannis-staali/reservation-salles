<?php

session_start();

if(!isset($_SESSION['user'])) // retour à l'envoyeur si pas de variable session crée
{
    header('location: connexion');
    exit();
}

$reservation = new Reservation(connect());  //instanciation de la class Reservation
$result = $reservation->get_reservation();  //methode permettant de recupérer les réservations
?>
<?php
session_start();

if(!isset($_SESSION['user'])) // retour à l'envoyeur si pas de variable session crée
{
    header('location: connexion');
    exit();
}

$myId = $_GET['id'];

// $PDO = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
$reservation = new Reservation(connect());
$resa = $reservation-> show_reservation($myId);
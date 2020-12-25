<?php
session_start();
//  var_dump($_GET);

$myId = $_GET['id'];
//RECUP AVEC GET
//  $db = mysqli_connect("localhost", "root", "", "reservationsalles");
//  $date = "SELECT login, titre, description, debut, fin FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id =$myId";
//  $query = mysqli_query($db, $date);
//  $result = mysqli_fetch_all($query);

// $PDO = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
$reservation = new Reservation(connect());
$result = $reservation-> show_reservation($myId);
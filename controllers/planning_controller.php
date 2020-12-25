<?php

session_start();

// $reservation = new Reservation(connect());
// $result = $reservation->get_reservation();

// $result = Reservation::get_reservation();

$reservation = new Reservation(connect());  //instanciation de Reservation
$result = $reservation->get_reservation();  //methode permettant de recupérer les résa
?>
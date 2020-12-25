<?php
session_start();

if (isset($_POST['submit'])) 
{
    // $reservation = new Reservation(connect());  //instanciation de Reservation

    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $debut = htmlspecialchars($_POST['date-debut']). " ".$_POST['heure-debut'];
    $fin = htmlspecialchars($_POST['date-fin']). " ".$_POST['heure-fin'];
    $id_utilisateur = 5;

    // $PDO = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');
    // $request = $PDO->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES (?, ?, ?, ?, ?)");
    // $request->execute([$titre, $description, $debut, $fin, $id_utilisateur]);


    // $request->execute();   

    

    $reservation = new Reservation(connect());  //instanciation de Reservation
    $request = $reservation->insert_event($titre, $description, $debut, $fin, $id_utilisateur);  //methode permettant de recupérer les résa

    var_dump($request);
}

?>
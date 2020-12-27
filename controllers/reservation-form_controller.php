<?php
session_start();

if(!isset($_SESSION['user'])) // retour à l'envoyeur si pas de variable session crée
{
    header('location: connexion');
    exit();
}

$reservation = new Reservation(connect());  //instanciation de Reservation

$check_fields ='';  //variables intermédiaires
$check_point ='';
$check_past ='';
$check_weekend = '';
$check_book = '';

if (isset($_POST['submit'])) 
{
    $check_fields = $reservation->check_fields_form(); //permet de verifier que tous les champs sont remplis

    // variables intermediaires
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $debut = htmlspecialchars($_POST['date']). " ". htmlspecialchars($_POST['heure-debut']);
    $fin = htmlspecialchars($_POST['date']). " ".  htmlspecialchars($_POST['heure-fin']);
    $id_utilisateur = $_SESSION['user'];

        if($check_fields==false)
        {
            $check_point = $reservation->check_point(); // verifie que les créneaux ne dépassent pas une heure

                if($check_point==false)
                {
                    $check_past = $reservation->check_past(); // verifie que la date ne soit pas deja passée

                        if($check_past==false)
                        {
                            $check_weekend = $reservation->check_weekend(); // verifie que la reservation ne tombe pas un weekend

                                if($check_weekend==false)
                                {
                                    $check_book = $reservation->check_book($debut); // verifie que le creneau est libre

                                        if($check_book==false)
                                        {
                                            $request = $reservation->insert_event($titre, $description, $debut, $fin, $id_utilisateur);  // insertion d'une nouvelle resa
                                            header('location: planning');
                                            exit();
                                        }
                                   
                                }   
                        }
                    
                }
        }

  
    
    
   
}


?>
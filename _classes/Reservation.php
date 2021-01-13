<?php

class Reservation
{

private $pdo;

    function __construct($db) // la construct ne sert ici qu'a connecter à la base de donnée
    {
        $this->pdo = $db;
    }

    public function get_reservation() //permet de recuperer les reservations pour les afficher sur le planning
    { 
        $request = $this->pdo->prepare("SELECT reservations.debut, reservations.titre, reservations.id, utilisateurs.login  FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id");         
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);
       
        return $result;

    }

  
    public function insert_event($titre, $description, $debut, $fin, $id_utilisateur)   //inserer une nouvelle reservation
    {
        $request = $this->pdo->prepare("INSERT INTO reservations (titre, description, debut, fin, id_utilisateur) VALUES (?, ?, ?, ?, ?)");
        $request->execute([$titre, $description, $debut, $fin, $id_utilisateur]);
    }

  
    public function show_reservation($myId)   //permet d'afficher une reservation en particulier grace à son ID
    {
        $request = $this->pdo->prepare("SELECT login, titre, description, DATE_FORMAT(debut, '%d/%m/%Y at %Hh') AS debut, DATE_FORMAT(fin, '%d/%m/%Y at %Hh') AS fin FROM reservations INNER JOIN utilisateurs ON reservations.id_utilisateur = utilisateurs.id WHERE reservations.id =$myId");         
       
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

   
    public function check_fields_form()  //permet de verifier que tous les champs sont remplis
    {
        if(isset($_POST['submit']))
          {
                if(empty($_POST['titre']) && empty($_POST['description']) && empty($_POST['date']) && empty($_POST['heure-debut'])&& empty($_POST['heure-fin']))
                {
                    $error = 'Veuillez renseigner tous les champs' ;
                    return $error;
                }
                if(empty($_POST['titre']))
                {
                   $error='Veuillez renseigner le titre';
                    return $error;
                }
                if(empty($_POST['description']))
                {
                    $error='Veuillez renseigner la description';
                    return $error;
                }
                if(empty($_POST['date']))
                {
                    $error='Veuillez renseigner la date';
                    return $error;
                }
                if(empty($_POST['heure-debut']))
                {
                    $error='Veuillez renseigner l\'heure de debut';
                    return $error;
                }
                if(empty($_POST['heure-fin']))
                {
                    $error='Veuillez renseigner l\'heure de fin';
                    return $error;
                }
               else return false;
          }
    }
    
    public function check_point() // verifie que les créneaux ne dépassent pas une heure
    {
        if($_POST['heure-fin'] - $_POST['heure-debut'] !== 1)
        {
            $error = 'Les créneaux ne peuvent dépasser une heure';
            return $error;
        }
        else return false;
    }

    public function check_past() // verifie que la date ne soit pas deja passée
    {
        $today = date('Y-m-d, G-i-s');
        $debut = htmlspecialchars($_POST['date']). " ".  htmlspecialchars($_POST['heure-debut']);
        
            if($debut < $today )
            {
                $error = 'Cette date est passée';
                return $error;
            }
            else return false;
    }
    
    public function check_weekend() // verifie que la reservation ne tombe pas un weekend
    {
        $datetest = date('N', strtotime($_POST['date']. " ". $_POST['heure-debut']));

        if($datetest==6 || $datetest==7)
        {
            $error = 'Pas de reservation le weekend';
            return $error;
        }
        else return false;
    }

    public function check_book($creneau) // verifie que le creneau est libre
    {
        $request = $this->pdo->prepare("SELECT * FROM reservations WHERE debut = ?");  
        $request->bindValue(1, $creneau);       
        $request->execute();

        $row = $request->rowCount();
            if($row==0)
            {
              return false; 
            }
            elseif($row==1)
            { 
                 $error="Déjà reservé";
                 return $error; 
            }
    }

}
 
?>




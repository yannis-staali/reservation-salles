<?php
session_start();

if(!isset($_SESSION['user'])) // retour à l'envoyeur si pas de variable session crée
{
    header('location: connexion');
    exit();
}

//ici on stocke le contenu de la variable SESSION (l'id entré precedemment) dans $idverify
//pour pouvoir l'utiliser pour fixer la ligne lors de la requete UPDATE
$idverify = $_SESSION['user'];

$objet = new User(connect()); //INSTANCIATION

      if(isset($_POST['submit']))
      {
      $login = htmlspecialchars($_POST['login']);
      $password = htmlspecialchars($_POST['password']);
      $password2 = htmlspecialchars($_POST['password2']);

      $check_fields = $objet->check_fields_profil(); //on verifie que tous les champs soient remplis

            if($check_fields==false)      
            {
            $checkinlog = $objet->check_login_profil($login); // verifie que le login n'existe pas deja

                  if($checkinlog==false)
                  {
                  $checkinpass = $objet->check_same_password($password, $password2); // mp identiques
                        
                        if($checkinpass==false)
                        {
                              $hached_pass = password_hash($password, PASSWORD_DEFAULT);
                              $update = $objet->update($login, $hached_pass, $idverify);
                              echo $update;
                        }
                  }
            }
      }
?>
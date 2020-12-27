<?php
session_start();

$objet = new User(connect()); //INSTANCIATION

$check_fields ='';  //variables intermédiaires
$checkinlog= '';
$checkinpass = '';

    if(isset($_POST['submit']))
    { 
      $check_fields = $objet->check_fields(); //permet de verifier que tous les champs sont remplis
      $login = htmlspecialchars($_POST['login']); 
      $password = htmlspecialchars($_POST['password']);       
      
        if($check_fields==false)
        {
          $checkinlog = $objet->check_login($login);  //verifie que le login est présent en bdd
          
          $checkinpass = $objet->check_password($login, $password); // password verify inclu
              
              if($checkinlog==false && $checkinpass==false)
              {
                $getid = $objet->get_id($login); // on recupere l'ID de l'utilisateur
                $_SESSION['user'] = $getid; // on le stocke dans sa variable session
                $_SESSION['welcome'] = $login;
                header('location: welcome');
              }
        }
    }
?>
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
          $checkinlog = $objet->check_login($login);  
          
          $checkinpass = $objet->check_password($login, $password); // passord verify inclu
              
              if($checkinlog==false && $checkinpass==false)
              {
                $getid = $objet->get_id($login);
                $_SESSION['user'] = $getid;
                header('location: profil');
              }
        }
    }
?>
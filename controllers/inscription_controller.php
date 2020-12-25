<?php
session_start();

$check_fields ='';  //variables intermédiaires
$checkinlog= '';
$checkinpass = '';

$objet = new User(connect()); //INSTANCIATION

      if(isset($_POST['submit']))
      {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);

        $check_fields = $objet->check_fields_inscription(); //verifie que tous les champs sont remplis

            if($check_fields==false)
            {
            $checkinlog = $objet->check_login_inscription($login);
                
                    if($checkinlog==false)
                    {    
                    $checkinpass = $objet->check_same_password($password, $password2);
                    
                        if($checkinpass==false)
                        {
                            $hached_pass = password_hash($password, PASSWORD_DEFAULT);
                            $insert = $objet->insert($login, $hached_pass);
                            header('location: connexion');
                            exit(); 
                        }
                    }
            }
      } 
?>
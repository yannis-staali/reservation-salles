<?php

      function connect() : PDO
      {
        // variables intermédiaires 
         $DB_DSN = 'mysql:host=localhost;dbname=reservationsalles';
         $DB_USER = 'root';
         $DB_PASS = '';
     
           try
           {
             $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS);
             $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
           }
           catch(PDOexception $e)
           {
           echo "connexion failed" .$e->getMessage();
           }

           return $PDO;      
      }

      //$PDO = new PDO('mysql:host=localhost;dbname=reservationsalles', 'root', '');


?>



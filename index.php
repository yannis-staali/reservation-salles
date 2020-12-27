<?php

// Inclusion des fichiers principaux
include_once '_config/config.php';
include_once '_config/db.php';
include_once '_functions/functions.php';
include_once '_classes/Autoloader.php';

Autoloader::register(); // autoloader de classes
// on utilisera la fonction connect() pour connecter les classes par la construct

//permet d'eviter d'inclure toutes les classes comme ça :
// include_once '_classes/Authors.php';
// include_once '_classes/Categories.php';
// include_once '_classes/Articles.php';


// Définition de la page courante
// la chaine à l'interieur de $_GET va definir la page a afficher
if (isset($_GET['page']) AND !empty($_GET['page'])) 
{
    $page = trim(strtolower($_GET['page']));
} 
else 
{
    $page = 'accueil';
}


// Tableau contenant toutes les pages
$allPages = scandir('controllers/');

// Vérification de l'existence de la page
if (in_array($page.'_controller.php', $allPages)) 
{
    // Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    //include_once 'views/'.$page.'_view.php'; -----> // J'ai enlever le _view pour que les noms de fichiers correspondent au sujet
    include_once 'views/'.$page.'.php'; // <------ du coup on inclu la page comme ça

} 
else 
{

    // Inclusion de la page erreur
    include_once 'models/error_model.php';
    include_once 'controllers/error_controller.php';
    include_once 'views/error_view.php';
    //on va pas s'en servir sur ce projet
}
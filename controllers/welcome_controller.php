<?php
session_start();

if(!isset($_SESSION['user']) && !$_SESSION['welcome']) // retour à l'envoyeur si pas de variable session crée
{
    header('location: connexion');
    exit();
}
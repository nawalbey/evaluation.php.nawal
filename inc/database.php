<?php
function dbConnexion()
{
    $connexion = null;
    try {
        $connexion = new PDO("mysql:host=localhost;dbname=wf3_php_intermediaire_nawal", "root", "");
    } catch (PDOException $e) {
        $connexion = $e->getMessage();
    }
    return $connexion;
}
<?php

require_once("./inc/database.php");
if (isset($_POST['submit'])) {
    //recuperer les infos saisies par le user
    $titredelannonce = htmlspecialchars($_POST['titre']);
    $descriptiondelannonce = htmlspecialchars($_POST['description']);
    $codepostal = htmlspecialchars($_POST['cp']);
    $ville = htmlspecialchars(($_POST['ville']));
    $typedannonce = htmlspecialchars($_POST['type']);
    $prix = htmlspecialchars($_POST["prix"]);


    //retablir la connexion avec la bd 
    $db = dbConnexion();
    // var_dump($db);
    //preparer la requete 
    $request = $db->prepare("INSERT INTO `advert`(`title`, `description`, `postal_code`, `city`, `type`, `price`) VALUES (?,?,?,?,?,?)");
    //executer la requete 
    try {
        $request->execute(array($titredelannonce, $descriptiondelannonce, $codepostal, $ville, $typedannonce, $prix));
        header("location:http://localhost/evaluation.php.nawal/accueil.php");
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
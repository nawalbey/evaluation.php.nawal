<?php
require_once("./inc/database.php");
function advertList()
{
    $listAnnonce = [];
    // se connecter a la db (date base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM advert limit 15");
    //executer la requete
    try {
        $request->execute();
        //recuperer le resultat dans un tableau 
        $listAnnonce = $request->fetchAll(PDO::FETCH_ASSOC);
        return $listAnnonce;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $listAnnonce;

}
function annonces()
{
    $listAnnonce = [];
    // se connecter a la db (date base) ou bd (base de donnees)
    $db = dbConnexion();
    //preparer la requete
    $request = $db->prepare("SELECT * FROM advert");
    //executer la requete
    try {
        $request->execute();
        //recuperer le resultat dans un tableau 
        $listAnnonce = $request->fetchAll(PDO::FETCH_ASSOC);
        return $listAnnonce;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $listAnnonce;

}

function annonceDetail()
{
    $annonce = null;
    if (!empty($_GET['id'])) {
        $id = $_GET['id'];
        // se connecter a la db (date base) ou bd (base de donnees)
        $db = dbConnexion();
        //preparer la requete
        $request = $db->prepare("SELECT * FROM advert where id = ?");
        //executer la requete
        try {
            $request->execute([$id]);
            //recuperer le resultat dans un tableau 
            $annonce = $request->fetch(PDO::FETCH_ASSOC);
            return $annonce;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $annonce;
    }
}
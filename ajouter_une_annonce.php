<?php
include_once "./inc/header.php";
include_once "inc/header.php";
?>

<form action="add_annonce.php" method="post">
    <div class="mb-3">
        <label for="titre de l'annonce" class="form-label">titre de l'annonce</label>
        <input type="text" class="form-control" id="titre de l'annonce" aria-describedby="titre de l'annonce"
            name="titre">
        <div id="titre de l'annonce" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="Description de l’annonce" class="form-label">Description de l’annonce</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
        <label for=" Code postal et ville du bien immobilier" class="form-label"> Code postal et ville du bien
            immobilier</label>
        <input type="text" class="form-control" id=" Code postal et ville du bien immobilier" name="cp">
    </div>

    <div class="mb-3">
        <label for=" Code postal et ville du bien immobilier" class="form-label">Ville</label>
        <input type="text" class="form-control" id=" Code postal et ville du bien immobilier" name="ville">
    </div>
    <div class="mb-3">
        <label for=" Type d’annonce (location ou vente)" class="form-label"> Type d’annonce (location ou vente)
            <select name="type">
                <option value="location">location</option>
                <option value="vente" selected>vente</option>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for=" Prix" class="form-label"> Prix</label>
        <input type="number" class="form-control" id=" Prix" name="prix">
    </div>


    <button name="submit" type="envoyer" class="btn btn-primary">envoyer</button>
</form>




<?php include_once "./inc/footer.php"; ?>
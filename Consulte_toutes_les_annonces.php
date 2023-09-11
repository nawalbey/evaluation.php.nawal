<?php
include_once "./inc/header.php";

require_once("./inc/function.php");

$listAnnonce = annonces();
?>


<div class="container">

    <table class="table">
        <thead>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>postal_code</th>
            <th>city</th>
            <th>price</th>
            <th>Voir l'annonce</th>
            </thea>
        <tbody>
            <?php foreach ($listAnnonce as $annonce) { ?>
                <tr>
                    <td>
                        <?= $annonce['id']; ?>
                    </td>
                    <td>
                        <?= strtoupper($annonce['title']); ?>
                    </td>
                    <td>
                        <?= $annonce['description']; ?>
                    </td>
                    <td>
                        <?= $annonce['postal_code']; ?>
                    </td>
                    <td>
                        <?= $annonce['city']; ?>
                    </td>
                    <td>
                        <?= $annonce['price']; ?>
                    </td>
                    <td>
                        <a href="./annonce.php?id=<?= $annonce["id"] ?>">Voir
                            l'annonce</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include_once "./inc/footer.php";
?>
<?php
include_once "./inc/header.php";

require_once("./inc/function.php");

$listAdvert = advertList();
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
            </thea>
        <tbody>
            <?php foreach ($listAdvert as $annonce) { ?>
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
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include_once "./inc/footer.php";
?>
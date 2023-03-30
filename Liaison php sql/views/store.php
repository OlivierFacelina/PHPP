<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (is_array($stores) && count($stores) > 0) { ?>
        <?php foreach ($stores as $store) {?>
            <h2>Magasin n°<?= $store->store_id ?></h2>
            <p>Nom du manager : <?= $store->last_name ?></p>
            <p>Code postal du magasin : <?= $store->postal_code ?></p>
            <p>Ville : <?= $store->city ?></p>
            <p>Adresse electronique de contact : <?= $store->email ?></p>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
</body>
</html>
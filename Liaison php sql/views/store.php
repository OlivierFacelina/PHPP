<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php 
    require_once './template/header.php'?>
    <main>
        <h1>Boutique</h1>
    </main>
    <?php

    if (is_array($stores) && count($stores) > 0) { ?>
        <?php foreach ($stores as $store) {?>
            <div class="store-row section">
                <h2>Magasin n°<?= $store->store_id ?></h2>
                <p>Nom du manager : <?= $store->last_name ?></p>
                <p>Code postal du magasin : <?= $store->postal_code ?></p>
                <p>Ville : <?= $store->city ?></p>
                <p>Adresse electronique de contact : <?= $store->email ?></p>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
<?php 
require_once './template/footer.php' 
?>
</body>
</html>
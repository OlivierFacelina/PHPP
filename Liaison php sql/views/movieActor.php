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

    if (is_array($moviesActor) && count($moviesActor) > 0) { ?>
        <?php foreach ($moviesActor as $movieActor) {?>
            <h2>Auteur : <?= $movieActor->first_name ?> <?= $movieActor->last_name ?></h2>
            <p>Nom du film : <?= $movieActor->title?></p>
            <p>Description : <?= $movieActor->description ?></p>
            <p>Date de sortie : <?= $movieActor->release_year ?></p>
            <p>Note du film : <?= $movieActor->rental_rate ?>/5</p>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
</body>
</html>
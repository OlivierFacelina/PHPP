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

    if (is_array($movies) && count($movies) > 0) { ?>
        <?php foreach ($movies as $movie) {?>
            <h2>Film <?= $movie->film_id ?></h2>
            <p>Titre du livre : <?= $movie->title ?></p>
            <p>Description du livre : <?= $movie->description ?></p>
            <p>Date de sortie : <?= $movie->release_year ?></p>
            <p>Durée du film : <?= $movie->rental_duration ?></p>
            <p>Note du film : <?= $movie->rental_rate ?>/5</p>
            <p>Informations particulières : <?= $movie->special_features ?></p>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun titre trouvé.</p>
    <?php }
    ?>
</body>
</html>
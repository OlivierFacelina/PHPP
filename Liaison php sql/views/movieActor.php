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
        <h1>Films de l'acteur</h1>
    </main>

    <?php
    if (is_array($moviesActor) && count($moviesActor) > 0) { ?>
        <?php foreach ($moviesActor as $movieActor) {?>
            <div class="movies-row">
                <h2>Auteur : <?= $movieActor->first_name ?> <?= $movieActor->last_name ?></h2>
                <p>Nom du film : <?= $movieActor->title?></p>
                <p>Description : <?= $movieActor->description ?></p>
                <p>Date de sortie : <?= $movieActor->release_year ?></p>
                <p>Note du film : <?= $movieActor->rental_rate ?>/5</p>
            </div>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
</body>
</html>
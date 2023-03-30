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
        <h1>Actors</h1>
    </main>
    <?php
if (is_array($actors) && count($actors) > 0) {
    $i = 0;
    foreach ($actors as $actor) {
        // Si l'index est un multiple de 3, on ouvre une nouvelle ligne
        if ($i % 3 == 0) { ?>
            <div class='row'>
        <?php }?>
        <div class="col-md-4">
            <h2>Acteur n°<?= $actor->actor_id ?></h2>
            <p>Prénom : <?= $actor->first_name ?></p>
            <p>Nom : <?= $actor->last_name ?></p>
            <p>Dernière modification : <?= $actor->last_update ?></p>
        </div>
        <?php
        // Si l'index est un multiple de 3 moins 1, on ferme la ligne
        if (($i + 1) % 3 == 0) { ?>
            </div>
        <?php }
        $i++;
    }
    // Si le nombre d'acteurs n'est pas un multiple de 3, on ferme la dernière ligne
    if (($i - 1) % 3 != 0) { ?>
        </div>
    <?php }
} else { ?>
    <p>Aucun acteur trouvé.</p>
<?php }
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>
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

    if (is_array($actors) && count($actors) > 0) { ?>
        <?php foreach ($actors as $actor) {?>
            <h2>Acteur n°<?= $actor->actor_id ?></h2>
            <p>Prénom : <?= $actor->first_name ?></p>
            <p>Nom : <?= $actor->last_name ?></p>
            <p>Dernière modification : <?= $actor->last_update ?></p>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
</body>
</html>
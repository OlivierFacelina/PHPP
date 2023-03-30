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

    if (is_array($datas) && count($datas) > 0) { ?>
        <?php foreach ($datas as $data) {?>
            <h2>Boutique : <?= $data->staff_id?></h2>  
            <p>Chiffre d'affaires : <?= $data->{"Chiffre d'affaires"}?>€</p>
            <p>Nombre total de film dans la boutique : <?= $data->{"Nombre total de film"}?></p>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
</body>
</html>
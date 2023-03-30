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

    if (is_array($categories) && count($categories) > 0) { ?>
        <?php foreach ($categories as $category) {?>
            <h2>Catégorie : <?= $category->name?></h2>  
            <p>Nombre de film dans cette catégorie : <?= $category->{'Nombre de film par catégorie'}?></p>
        <?php } ?>
    <?php } else { ?>
        <p>Aucun acteur trouvé.</p>
    <?php }
    ?>
</body>
</html>
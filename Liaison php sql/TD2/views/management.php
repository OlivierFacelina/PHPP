<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Les dépenses d'un utilisateur</h1>
    <form method="get">
        <input type="text">
        <?php foreach ($managements as $management) { ?>
            <p><?= $management->last_name . ' ' . $management->first_name?></p>
            <p>Le montant total des dépenses : <?= $management->exp_amount?>€</p>
        <?php } ?>
  </form>
</body>
</html>
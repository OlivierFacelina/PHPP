<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/updateExp.css">
  <title>Document</title>
</head>
<body>
<div class="create_user">
  <h1>Les dépenses d'un utilisateur</h1>
    <form method="post">
        <select name="user_id" id="select">
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } ?>
        </select><br>
        <p><label for="exp_amount">Montant des dépenses :</label></p>
        <p><input type="text" name="exp_amount" id="exp_amount"></p>
        <p><label for="exp_label">Type d'achat :</label></p>
        <p><input type="text" name="exp_label" id="exp_label"></p>
        <p><label for="exp_id" id="exp_id">Numéro de dépense :</label></p>
        <p><input type="text" name="exp_id" id="exp_id"></p>
        <p><input type="submit" name="submit" id="submit"></p>
    </form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/deleteExp.css">
  <title>Document</title>
</head>
<body>
<div class="create_user">
  <h1>Supprimer un utilisateur</h1>
    <form method="post">
        <select name="user_id">
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } ?>
        </select><br>
        <p><label for="exp_id" id="exp_id">Numéro de dépenses :</label></p>
        <p><input type="text" name="exp_id" id="exp_id"></p>
        <p><input type="submit" name="submit" id="submit"></p>
    </form>
</div>
</body>
</html>
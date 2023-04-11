<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/deleteInc.css">
  <title>Document</title>
</head>
<body>
<div class="create_user">
  <h1>Supprimer un utilisateur</h1>
    <form method="post">
        <select name="user_id" id="select">
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } ?>
        </select><br>
        <p><label for="inc_id" id="inc_id">Numéro de revenu :</label></p>
        <p><input type="text" name="inc_id" id="inc_id"></p>
        <p><input type="submit" name="submit" id="submit"></p>
    </form>
</div>
</body>
</html>
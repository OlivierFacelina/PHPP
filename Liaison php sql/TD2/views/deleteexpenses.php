<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Supprimer un utilisateur</h1>
    <form method="post">
        <select name="user_id">
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } ?>
        </select><br>
        <label for="exp_id" id="exp_id">Numéro de dépenses :</label>
        <input type="text" name="exp_id" id="exp_id"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
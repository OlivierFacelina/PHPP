<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Les revenus d'un utilisateur</h1>
    <form method="post">
        <select name="user_id">
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } ?>
        </select><br>
        <label for="amount">Montant du revenu :</label>
        <input type="text" name="upd_amount" id="amount"><br>
        <label for="upd_cat_id" id="upd_cat_id">Type de salaire :</label>
        <input type="text" name="upd_cat_id" id="cat_id"><br>
        <label for="inc_id" id="inc_id">Numéro de revenu :</label>
        <input type="text" name="inc_id" id="inc_id"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
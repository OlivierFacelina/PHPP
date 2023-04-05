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
        <select>
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } 
            if (is_array($incomes) && count($incomes) > 0) { 
                foreach ($incomes as $income) { ?>
                    <option value="<?= $user->user_id ?>"><?= $income->inc_amount ?></option>
                <?php } }?>
        </select>
        <input type="submit" name="submit">
    </form>
</body>
</html>
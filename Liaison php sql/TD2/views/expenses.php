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
    <form method="post">
        <select name="user_id">
        <option value="">Sélectionner vos users</option>
        <?php foreach ($users as $user) { ?>
            <option value="<?= $user->user_id ?>"><?= $user->first_name?><?= $user->last_name?></option>
            <?php } ?>
        </select><br>
        <label for="exp_amount">Montant du revenu :</label>
        <input type="text" name="exp_amount" id="exp_amount"><br>
        <label for="exp_label">Type d'achat :</label>
        <input type="text" name="exp_label" id="exp_label"><br>
        <input type="submit" name="submit">
  <!-- <?php foreach ($expenses as $expense) { ?>
    <p><?= $expense->first_name?></p>
    <p><?= $expense->last_name?></p>
    <p><?= $expense->exp_amount?></p>
  <?php } ?> -->
  </form>
</body>
</html>
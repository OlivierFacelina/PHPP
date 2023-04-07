<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Document</title>
</head>
<body>
  <div class="create_user">
    <h1>Création d'un utilisateur</h1>
    <form method="post">
      <label for="firstname">Prénom :</label>
      <input type="text" id="firstname" name="firstname"><br>
      <label for="lastname">Nom :</label>
      <input type="text" id="lastname" name="lastname"><br>
      <label for="birthdate">Date de naissance :</label>
      <input type="date" id="birthdate" name="birthdate"><br>
      <input type="submit" name="submit">
    </form>
    <?php if(!is_null($users)) {
      foreach ($users as $user) { ?>
      <p><?= $user->first_name?></p>
      <p><?= $user->last_name?></p>
      <p><?= $user->birth_date?></p>
      <a href="./views/updateincomes.php"><input type="submit" name="update" value="Modifier l'utilisateur"></a>
      <a href="./views/deleteincomes.php"><input type="submit" name="delete" value="Supprimer l'utilisateur"></a>
    <?php } }?>
    </div>
</body>
</html>
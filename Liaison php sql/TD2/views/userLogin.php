<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/userLogin.css">
  <title>Document</title>
</head>
<body>
  <div class="create_user">
    <h1>Création d'un utilisateur</h1>
    <form method="post">
      <p><label for="firstname">Prénom :</label></p>
      <p><input type="text" id="firstname" name="firstname"></p>
      <p><label for="lastname">Nom :</label></p>
      <p><input type="text" id="lastname" name="lastname"></p>
      <p><label for="birthdate">Date de naissance :</label></p>
      <p><input type="date" id="birthdate" name="birthdate"></p>
      <p><input type="submit" name="submit" id="submit"></p>
    </form>
    <div class="users_detail">
    <?php if(!is_null($users)) {
      foreach ($users as $user) { ?>
      <div class="lst_users">
        <p><?= $user->first_name?></p>
        <p><?= $user->last_name?></p>
        <p><?= $user->birth_date?></p>
        <a href="./views/updateincomes.php"><input type="submit" name="update" value="Modifier l'utilisateur"></a>
        <a href="./views/deleteincomes.php"><input type="submit" name="delete" value="Supprimer l'utilisateur"></a>
      </div>
    <?php } }?>
    </div>
      </div>
</body>
</html>
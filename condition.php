<?php
$password = 'Taspaslemotdepasse';
$message = 'Bravo !';
$majuscule = preg_match('`[A-Z]`',$password);
$minuscule = preg_match('`[a-z]`',$password);
$number = preg_match('`[0-9]`',$password);


if (strlen($password) < 8) {
    $message = 'Mot de passe est trop court, le mot de passe doit comporter au moins 8 caractères';
} 

if(strlen($password) > 8 && $majuscule && $minuscule && $number) {
  $message = "Le mot de passe est valide.";
} else {
  $message = "Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et être d'une longueur minimale de 8 caractères.";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Condition</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center">Condition - PHP</h1>
    
    <div class="alert"> <!-- ajoutez la classe bootstrap dynamiquement -->
      <p><?= $message?></p>
    </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
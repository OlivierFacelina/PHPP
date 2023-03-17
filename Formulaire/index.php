<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // var_dump($_POST);
  $lastname = test_input($_POST["lastname"]);
  $firstname = test_input($_POST["firstname"]);
  $adresse = test_input($_POST["adresse"]);
  $tel = test_input($_POST["tel"]);
  $email = test_input($_POST["email"]);
  $birthdate = test_input($_POST["birthdate"]);
  $place = test_input($_POST["place"]);
  $department = test_input($_POST["department"]);
  $country = test_input($_POST["country"]);
  $nationality = test_input($_POST["nationality"]);
  $classe = test_input($_POST["classe"]);
  $diplome = test_input($_POST["diplome"]);
  $message = test_input($_POST["message"]);
  // récupération des données du formulaire
  
  // validation des données
  $lastnameErr = $firstnameErr = $adressErr = $telErr = $emailErr = $birthErr = $placeErr = $departmentErr = $countryErr = $nationality = $classeErr = $diplomeErr = $messageErr = "";
  $valid = true;
  
  if (empty($lastname)) {
    $lastnameErr = "Nom requis";
    // $valid = false;
  } else {
    if (!preg_match("/^[a-zA-Z ]+$/",$lastname)) {
      $lastnameErr = "Seules les lettres et les espaces sont autorisés";
      $valid = false;
    }
  }

  if (empty($firstname)) {
    $firstnameErr = "Prénom requis";
    $valid = false;
  } else {
    if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
      $firstnameErr = "Seules les lettres et les espaces sont autorisés";
      $valid = false;
    }
  }

  if (empty($adresse)) {
    $adressErr = "Adresse requise";
    $valid = false;
  }
  
  if (empty($tel)) {
    $telErr = "Tel requis";
    $valid = false;
  }
  else {
    if (!preg_match('/[^0-9\-]/i',$tel)) {
      $telErr = "Seules les lettres et les espaces sont autorisés";
      $valid = false;
    }
  }

  if (empty($email)) {
    $emailErr = "Email requis";
    $valid = false;
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format d'email invalide";
      $valid = false;
    }
  }

  if (empty($birthdate)) {
    $birthErr = "Date de naissance requise";
    $valid = false;
  } else {
    if (!preg_match('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#',$birthdate)) {
      $birthErr = "Le format de la date n'est pas bon";
      $valid = false;
    }
  }

  if (empty($message)) {
    $messageErr = "Message requis";
    $valid = false;
  }

  if ($valid) {
    $confirmation = "Message envoyé avec succès";
  }
}

// fonction pour nettoyer les données du formulaire
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  
  <div id ="app">
    <h1>Formulaire</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
    <fieldset>
      <legend>Informations personnelles</legend>
      <label for="lastname">Nom:</label>
      <input type="text" name="lastname" id="lastname" value="<?php echo isset($lastname) ? $lastname : ''; ?>">
        <span class="error"><?php echo isset($lastnameErr) ? $lastnameErr : ''; ?></span>
        <br><br>
        
        <label for="firstname">Prénom:</label>
        <input type="text" name="firstname" id="firstname" value="<?php echo isset($firstname) ? $firstname : ''; ?>">
        <span class="error"><?php echo isset($firstnameErr) ? $firstnameErr : ''; ?></span>
        <br><br>
        
        <label for="adresse">Adresse complète:</label>
        <input type="text" name="adresse" id="adresse" value="<?php echo isset($adresse) ? $adresse : ''; ?>">
        <span class="error"><?php echo isset($adressErr) ? $adressErr : ''; ?></span>
        <br><br>
        
        <label for="tel">Numéro de téléphone:</label>
        <input type="text" name="tel" id="tel" value="<?php echo isset($tel) ? $tel : ''; ?>">
        <span class="error"><?php echo isset($telErr) ? $telErr : ''; ?></span>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>">
        <span class="error"><?php echo isset($emailErr) ? $emailErr : ''; ?></span>
        <br><br>
        
        <label for="birthdate">Date de naissance:</label>
        <input type="date" name="birthdate" id="birthdate" value="<?php echo isset($birthdate) ? $birthdate : ''; ?>">
        <span class="error"><?php echo isset($birthErr) ? $birthErr : ''; ?></span>
        <br><br>
        
        <label for="place">Lieu de naissance:</label>
        <input type="text" name="place" id="place" value="<?php echo isset($place) ? $place : ''; ?>">
        <span class="error"><?php echo isset($placeErr) ? $placeErr : ''; ?></span>
        <br><br>
        
        <label for="department">Département de naissance:</label>
        <input type="text" name="department" id="department" value="<?php echo isset($department) ? $department : ''; ?>">
        <span class="error"><?php echo isset($departmentErr) ? $departmentErr : ''; ?></span>
        <br><br>
        
        <label for="country">Pays de naissance:</label>
        <input type="text" name="country" id="country" value="<?php echo isset($country) ? $country : ''; ?>">
        <span class="error"><?php echo isset($countryErr) ? $countryErr : ''; ?></span>
        <br><br>
        
        <label for="nationality">Nationalité:</label>
        <input type="text" name="nationality" id="nationality" value="<?php echo isset($nationality) ? $nationality : ''; ?>">
        <span class="error"><?php echo isset($nationalityErr) ? $nationalityErr : ''; ?></span>
        <br><br>
        
      </fieldset>
      
      <fieldset>
        <legend>Formation </legend>
        <label for="classe">Dernière classe suivie:</label>
        <input type="text" name="classe" id="classe" value="<?php echo isset($classe) ? $classe : ''; ?>">
        <span class="error"><?php echo isset($classeErr) ? $classeErr : ''; ?></span>
        <br><br>
        
        <label for="diplome">Diplôme obtenu:</label>
        <input type="text" name="diplome" id="diplome" value="<?php echo isset($diplome) ? $diplome : ''; ?>">
        <span class="error"><?php echo isset($diplomeErr) ? $diplomeErr : ''; ?></span>
        <br><br>
      </fieldset>
      
      <fieldset>
        <legend>Personne(s) à prévenir en cas d'urgence </legend>
        <h2>Personne 1</h2>
        <div class="input-element">
          <label for="lastname">Nom:</label>
          <input type="text" name="lastname" id="lastname" value="<?php echo isset($lastname) ? $lastname : ''; ?>">
          <span class="error"><?php echo isset($lastnameErr) ? $lastnameErr : ''; ?></span>
          <br><br>
        </div>
        <div class="input-element">
          <label for="firstname">Prénom:</label>
          <input type="text" name="firstname" id="firstname" value="<?php echo isset($firstname) ? $firstname : ''; ?>">
          <br><br>
          </div>
          <div class="input-element">
            <label for="adresse">Adresse complète:</label>
            <input type="text" name="adresse" id="adresse" value="<?php echo isset($adresse) ? $adresse : ''; ?>">
            <span class="error"><?php echo isset($adressErr) ? $adressErr : ''; ?></span>
            <br><br>
          </div>
          <div class="input-element">
            <label for="tel">Numéro de téléphone:</label>
            <input type="text" name="tel" id="tel" value="<?php echo isset($tel) ? $tel : ''; ?>">
            <span class="error"><?php echo isset($telErr) ? $telErr : ''; ?></span>
            <br><br>
          </div>
          <div class="input-element">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>">
            <span class="error"><?php echo isset($emailErr) ? $emailErr : ''; ?></span>
            <br><br>
          </div>
          <button id="addPeople" type="button" name="submit_people">Ajouter une personne</button>
        </fieldset> 
        <fieldset>
          <legend>Autres informations utiles à communiquer (allergie, handicap, …)</legend>
          <textarea id="message" name="message" value="<?= isset($message) ? $message : ''; ?>"></textarea>
          <span class="error"><?php echo isset($messageErr) ? $messageErr : ''; ?></span>
        </fieldset> 
        <input type="submit" name="submit" value="Envoyer">
      </form>
    </div>
    <?php
    if (isset($confirmation)) {
      echo $confirmation;
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
<script src="./script.js"></script>
</body>
</html>
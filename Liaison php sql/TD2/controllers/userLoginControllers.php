<?php 
require './models/userLoginModels.php';
require './models/connexion.php';
$db = connexionBdd();
$users = null;
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = FILTER_INPUT(INPUT_POST,"firstname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $last_name = FILTER_INPUT(INPUT_POST,"lastname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $birth_date = FILTER_INPUT(INPUT_POST,"birthdate",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $createUsers = create_users($db, $first_name,$last_name,$birth_date);
  $users = get_users($db);
}
require './views/userLogin.php';
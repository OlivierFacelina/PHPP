<?php

// Page users 
require './models/userLoginModels.php';
require './models/connexion.php';
$db = connexionBdd();
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = FILTER_INPUT(INPUT_POST,"firstname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $last_name = FILTER_INPUT(INPUT_POST,"lastname",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $birth_date = FILTER_INPUT(INPUT_POST,"birthdate",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $createUsers = create_users($db, $first_name,$last_name,$birth_date);
  $users = get_users($db);
  $incomes = get_incomes($db);
}
require './views/userLogin.php';

// Page revenus
require './models/incomesModels.php';
require './views/incomes.php';

// Page dépenses
require './models/expensesModels.php';
$expenses = get_expenses($db);
require './views/expenses.php';

 
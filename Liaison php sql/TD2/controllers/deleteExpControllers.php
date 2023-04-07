<?php

require './models/deleteExpModels.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $exp_id = FILTER_INPUT(INPUT_POST,"exp_id",FILTER_SANITIZE_NUMBER_INT);
    $deleteExpenses = delete_expenses($db, $exp_id);
}
require './views/deleteexpenses.php';
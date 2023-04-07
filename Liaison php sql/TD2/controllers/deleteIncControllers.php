<?php

require './models/deleteIncModels.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $inc_id = FILTER_INPUT(INPUT_POST,"inc_id",FILTER_SANITIZE_NUMBER_INT);
    $deleteIncomes = delete_incomes($db, $inc_id);
}
require './views/deleteincomes.php';
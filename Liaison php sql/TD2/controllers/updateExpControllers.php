<?php 

require './models/updateExpenses.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $exp_amount = FILTER_INPUT(INPUT_POST,"exp_amount",FILTER_SANITIZE_NUMBER_FLOAT);
	$exp_label = FILTER_INPUT(INPUT_POST,"exp_label",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $exp_id = FILTER_INPUT(INPUT_POST,"exp_id",FILTER_SANITIZE_NUMBER_INT);
    $updateExpenses = update_expenses($db, $exp_amount, $exp_label, $exp_id);
}
require './views/updateexpenses.php';
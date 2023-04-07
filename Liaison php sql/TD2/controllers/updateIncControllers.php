<?php 

require './models/updateIncModels.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $inc_amount = FILTER_INPUT(INPUT_POST,"upd_amount",FILTER_SANITIZE_NUMBER_FLOAT);
	$inc_cat_id = FILTER_INPUT(INPUT_POST,"upd_cat_id",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $inc_id = FILTER_INPUT(INPUT_POST,"inc_id",FILTER_SANITIZE_NUMBER_INT);
    $updateIncomes = update_incomes($db, $inc_amount, $inc_cat_id, $inc_id);
}
require './views/updateincomes.php';
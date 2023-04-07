<?php

require './models/incomesModels.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$incomes = get_incomes($db);
	$inc_amount = FILTER_INPUT(INPUT_POST,"amount",FILTER_SANITIZE_NUMBER_FLOAT);
	$receipt_date = date("Y-m-d h:i:s");
	$user_id = FILTER_INPUT(INPUT_POST,"user_id",FILTER_SANITIZE_NUMBER_INT);
	$inc_cat_id = FILTER_INPUT(INPUT_POST,"cat_id",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$createIncomes = create_income($db, $inc_amount, $user_id, $receipt_date, $inc_cat_id);
	$users = get_users($db);
}
require './views/incomes.php';
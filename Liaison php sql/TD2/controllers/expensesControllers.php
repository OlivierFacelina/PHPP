<?php

require './models/expensesModels.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $expenses = get_expenses($db);
	$exp_date = date("Y-m-d h:i:s");
	$exp_amount = FILTER_INPUT(INPUT_POST,"exp_amount",FILTER_SANITIZE_NUMBER_FLOAT);
	$exp_label = FILTER_INPUT(INPUT_POST,"exp_label",FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$user_id = FILTER_INPUT(INPUT_POST,"user_id",FILTER_SANITIZE_NUMBER_INT);
	$createExpenses = create_expense($db, $exp_date, $exp_amount, $exp_label, $user_id);
}
require './views/expenses.php';
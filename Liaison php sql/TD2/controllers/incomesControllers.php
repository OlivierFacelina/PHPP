<?php

require './models/incomesModels.php';
require './models/userLoginModels.php';
require './models/connexion.php';
$users = get_users($db);
if($_SERVER["REQUEST_METHOD"] == "POST") {
    	$incomes = get_incomes($db);
}
require './views/incomes.php';
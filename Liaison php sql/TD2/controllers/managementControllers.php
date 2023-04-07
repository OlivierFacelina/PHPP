<?php 

require './models/managementModels.php';
require './models/connexion.php';
$managements = get_management($db);

require './views/management.php';
<?php 

require './models/financialModels.php';
$datas = get_data_financial();
require './views/financial.php';
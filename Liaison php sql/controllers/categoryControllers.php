<?php 

require './models/categoryModels.php';
$categories = get_category();
require './views/category.php';
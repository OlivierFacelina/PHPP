<?php 

require './models/movieModels.php';
$movies = get_movie();
require './views/movie.php';
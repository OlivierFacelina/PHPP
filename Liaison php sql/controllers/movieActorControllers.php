<?php

require './models/movieActorModels.php';
if(isset($_GET['actor_id'])) {
    $actor_id = $_GET['actor_id'];
    $moviesActor = get_movie_actor($actor_id);
}
else {
    echo "<h1>Aucun utilisateur sélectionné dans l'URL. Veuillez le sélectionner dans l'URL.";
    die;
}
require './views/movieActor.php';
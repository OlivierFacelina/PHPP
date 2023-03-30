<?php 

if(isset($_GET["page"])) {
    switch($_GET["page"]) {
        case "movie":
            require './controllers/movieControllers.php';
            break;
        case "actor":
            require './controllers/actorControllers.php';
            break;
        case "movieActor":
            require './controllers/movieActorControllers.php';
            break;
        case "store":
            require './controllers/storeControllers.php';
            break;
        case "category":
            require './controllers/categoryControllers.php';
            break;
        case "financial":
            require './controllers/financialControllers.php';
            break;
        default:
            require './controllers/404.php';
    }
}

?>




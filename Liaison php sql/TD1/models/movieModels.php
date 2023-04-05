<?php
require 'connexion.php';
function get_movie() {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT `title`, `description`, `release_year`, `length`, `rating`, `special_features`
    FROM `film`
    LIMIT 15;  
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();
    $list_movie = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_movie;
}




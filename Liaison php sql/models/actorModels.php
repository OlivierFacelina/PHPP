<?php
require 'connexion.php';
function get_actors() {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT `actor_id`, `first_name`, `last_name`, `last_update`
    FROM `actor`
    LIMIT 15
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();
    $list_actor = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_actor;
}

<?php
require 'connexion.php';
function get_movie_actor($actor_id) {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT DISTINCT `actor`.`actor_id`, `actor`.`first_name`, `actor`.`last_name`, `film`.`title`, `film`.`description`, `film`.`release_year`, `film`.`rental_rate`
    FROM `film`
    JOIN `film_actor` ON `film`.`film_id` = `film_actor`.`actor_id`
    JOIN `actor` ON `film_actor`.`actor_id` = `actor`.`actor_id`
    WHERE `film_actor`.`actor_id` = :actor_id
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt-> bindValue(':actor_id',$actor_id);
    $postStmt->execute();
    $list_movie_actor = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_movie_actor;
}

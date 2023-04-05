<?php
require 'connexion.php';
function get_category() {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT COUNT(`film_category`.`category_id`) AS 'Nombre de film par catégorie', `category`.`name`
    FROM `category`
    JOIN `film_category` ON `category`.`category_id` = `film_category`.`category_id`
    JOIN `film` ON `film_category`.`film_id` = `film`.`film_id`
    GROUP BY `film_category`.`category_id`
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();
    $list_category = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_category;
}

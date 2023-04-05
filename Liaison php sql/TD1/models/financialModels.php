<?php
require 'connexion.php';
function get_data_financial() {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT `payment`.`staff_id`,SUM(`payment`.`amount` * `film`.`length`) AS "Chiffre d'affaires", SUM(`inventory`.`inventory_id`) AS "Nombre total de film"
    FROM `payment`
    JOIN `rental` ON `payment`.`rental_id` = `rental`.`rental_id`
    JOIN `inventory` ON `rental`.`inventory_id` = `inventory`.`inventory_id`
    JOIN `film` ON `inventory`.`film_id` = `film`.`film_id`
    GROUP BY `payment`.`staff_id`
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();
    $list_data = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_data;
}

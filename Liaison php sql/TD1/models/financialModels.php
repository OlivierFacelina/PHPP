<?php
require 'connexion.php';
function get_data_financial() {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT SUM(`payment`.`amount`) AS 'CA", `store`.`store_id`
    FROM `payment`
    JOIN `rental` ON `payment`.`rental_id` = `rental`.`rental_id`
    JOIN `inventory` ON `rental`.`inventory_id` = `inventory`.`inventory_id`
    JOIN `store` ON `inventory`.`store_id` = `store`.`store_id`
    GROUP BY `store`.`store_id`
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();
    $list_data = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_data;
}

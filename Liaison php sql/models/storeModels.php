<?php
require 'connexion.php';
function get_store() {
    $db = connexionBdd();
    $sql = <<<EOD
    SELECT store.store_id, staff.last_name, address.address, city.city, staff.email
    FROM store
    JOIN staff ON store.store_id = staff.store_id
    JOIN address ON store.address_id = address.address_id
    JOIN city ON address.city_id = city.city_id;
    EOD;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();
    $list_store = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $list_store;
}

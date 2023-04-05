<?php 

require 'connexion.php';
function get_page_3() {
    try {
        $db = connexionBdd();
        $sql = <<<EOD
        SELECT * FROM `test`
        EOD;
        $stm = $db->prepare($sql);
        $stm->execute();
        $lst_get_page = $stm->fetchAll(PDO::FETCH_OBJ);
        return $lst_get_page;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}
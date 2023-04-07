<?php

function delete_expenses($db, $exp_id) {
    try {
        $sql = <<<EOD
        DELETE FROM `expenses`
        WHERE `exp_id` = :exp_id
        EOD;
        $stm = $db->prepare($sql);
        $stm->bindValue(':exp_id',$exp_id);
        $stm->execute();
        $delete_income = $stm->fetchAll(PDO::FETCH_OBJ);
        return $delete_income;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}
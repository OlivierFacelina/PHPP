<?php

function delete_incomes($db, $inc_id) {
    try {
        $sql = <<<EOD
        DELETE FROM `incomes`
        WHERE `inc_id` = :inc_id
        EOD;
        $stm = $db->prepare($sql);
        $stm->bindValue(':inc_id',$inc_id);
        $stm->execute();
        $delete_income = $stm->fetchAll(PDO::FETCH_OBJ);
        return $delete_income;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}
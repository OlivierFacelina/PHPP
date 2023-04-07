<?php 
function update_incomes($db, $inc_amount, $inc_cat_id, $inc_id) {
    try {
        $sql = <<<EOD
        UPDATE `incomes`
        SET `inc_amount` = :inc_amount, `inc_cat_id` = :inc_cat_id
        WHERE `inc_id` = :inc_id
        EOD;
        $stm = $db->prepare($sql);
        $stm->bindValue(':inc_amount',$inc_amount);
        $stm->bindValue(':inc_cat_id',$inc_cat_id);
        $stm->bindValue(':inc_id',$inc_id);
        $stm->execute();
        $update_incomes = $stm->fetchAll(PDO::FETCH_OBJ);
        return $update_incomes;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}


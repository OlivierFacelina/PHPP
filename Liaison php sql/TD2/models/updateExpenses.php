<?php

function update_expenses($db, $exp_amount, $exp_label, $exp_id) {
    try {
        $sql = <<<EOD
        UPDATE `expenses`
        SET `exp_amount` = :exp_amount, `exp_label` = :exp_label
        WHERE `exp_id` = :exp_id
        EOD;
        $stm = $db->prepare($sql);
        $stm->bindValue(':exp_amount',$exp_amount);
        $stm->bindValue(':exp_label',$exp_label);
        $stm->bindValue(':exp_id',$exp_id);
        $stm->execute();
        $update_expenses = $stm->fetchAll(PDO::FETCH_OBJ);
        return $update_expenses;
    }
    catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
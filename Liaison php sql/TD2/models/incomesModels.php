<?php 

function get_incomes($db) {
    try {
        $sql = <<<EOD
        SELECT `users`.`user_id`, `users`.`first_name`, `users`.`last_name`, `incomes`.`inc_amount`
        FROM `users`
        JOIN `incomes` ON `users`.`user_id` = `incomes`.`user_id`
        EOD;
        $stm = $db->prepare($sql);
        $stm->execute();
        $lst_incomes = $stm->fetchAll(PDO::FETCH_OBJ);
        return $lst_incomes;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}
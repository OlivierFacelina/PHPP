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
function create_income($db, $inc_amount, $user_id, $receipt_date, $inc_cat_id) {
  try {
      $sql = <<<EOD
      INSERT INTO `incomes` (inc_amount, user_id, inc_receipt_date, inc_cat_id) VALUES (:inc_amount,:user_id, :receipt_date, :inc_cat_id)
      EOD;
      $stm = $db->prepare($sql);
      $stm->bindValue(":inc_amount",$inc_amount);
      $stm->bindValue(":user_id",$user_id);
      $stm->bindValue(":receipt_date",$receipt_date);
      $stm->bindValue(":inc_cat_id",$inc_cat_id);
      $stm->execute();
      $create_incomes = $stm->fetchAll(PDO::FETCH_OBJ);
      return $create_incomes;
  }
  catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
  }
}
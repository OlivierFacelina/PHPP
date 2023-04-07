<?php 

function get_expenses($db) {
    try {
        $db = connexionBdd();
        $sql = <<<EOD
        SELECT `expenses`.`exp_amount`, `users`.`first_name`, `users`.`last_name` 
        FROM `expenses`
        JOIN `users` ON `expenses`.`user_id` = `users`.`user_id`
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
function create_expense($db, $exp_date, $exp_amount, $exp_label, $user_id) {
  try {
      $sql = <<<EOD
      INSERT INTO `expenses` (exp_date, exp_amount, exp_label, user_id) VALUES (:exp_date, :exp_amount, :exp_label, :user_id)
      EOD;
      $stm = $db->prepare($sql);
      $stm->bindValue(":exp_date",$exp_date);
      $stm->bindValue(":exp_amount",$exp_amount);
      $stm->bindValue(":exp_label",$exp_label);
      $stm->bindValue(":user_id",$user_id);
      $stm->execute();
      $create_incomes = $stm->fetchAll(PDO::FETCH_OBJ);
      return $create_incomes;
  }
  catch (PDOException $e) {
  die('Erreur : ' . $e->getMessage());
  }
}
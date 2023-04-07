<?php
function get_management($db) {
  try {
      $sql = <<<EOD
      SELECT * 
      FROM `expenses`
      JOIN `users` ON `expenses`.`user_id` = `users`.`user_id`
      EOD;
      $stm = $db->prepare($sql);
      $stm->execute();
      $lst_expenses = $stm->fetchAll(PDO::FETCH_OBJ);
      return $lst_expenses;
  }
  catch (PDOException $e) {
    die('Erreur :' . $e->getMessage());
  }
}
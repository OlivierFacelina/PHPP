<?php 

function create_users($db, $first_name, $last_name, $birth_date) {
    try {
        $sql = <<<EOD
        INSERT INTO `users` (first_name, last_name, birth_date) VALUES (:first_name,:last_name,:birth_date)
        EOD;
        $stm = $db->prepare($sql);
        $stm->bindValue(":first_name",$first_name);
        $stm->bindValue(":last_name",$last_name);
        $stm->bindValue(":birth_date",$birth_date);
        $stm->execute();
        $create_users = $stm->fetchAll(PDO::FETCH_OBJ);
        return $create_users;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}

function get_users($db) {
  try {
      $sql = <<<EOD
      SELECT * FROM users
      EOD;
      $stm = $db->prepare($sql);
      $stm->execute();
      $lst_users = $stm->fetchAll(PDO::FETCH_OBJ);
      return $lst_users;
  }
  catch (PDOException $e) {
    die('Erreur :' . $e->getMessage());
  }
}
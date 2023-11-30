<?php 

function get_all_students() {
    try {
        $db = db_connect();
        $sql = <<<EOD
        SELECT `students`.`student_id`, `students`.`INE`, `students`.`firstname`, `students`.`lastname`, `students`.`birthdate`, `students`.`phone`, `students`.`email`, `students`.`address`, `students`.`postal_code`, `students`.`city`, `students`.`grade`
        FROM `students`
        EOD;
        $stm = $db->prepare($sql);
        $stm->execute();
        $get_students = $stm->fetchAll(PDO::FETCH_OBJ);
        return $get_students;
    }
    catch (PDOException $e) {
		die('Erreur : ' . $e->getMessage());
    }
}

function get_one_student($student_id) {
  try {
      $db = db_connect();
      $sql = <<<EOD
      SELECT 
          `student_id`, `INE`, `firstname`, `lastname`, `phone`
      FROM 
          `students`
      WHERE `student_id` = :student_id
      EOD;
      $postStmt = $db->prepare($sql);
      $postStmt->bindValue(':student_id', $student_id);
      $postStmt->execute();
      $list_student_by_id = $postStmt->fetchAll(PDO::FETCH_OBJ);
      return $list_student_by_id;
  }
  catch (PDOException $e) {
      throw $e;
  }
}

function search_student($search) {
  try {
      $db = db_connect();
      $sql = <<<EOD
      SELECT `student_id`, `INE`, `firstname`, `lastname`, `phone`
      FROM `students`
      WHERE `firstname` LIKE :search OR `lastname` LIKE :search
      EOD;
      $postStmt = $db->prepare($sql);
      $postStmt->bindValue(':search', '%' . $search . '%');
      $postStmt->execute();
      $search_student = $postStmt->fetchAll(PDO::FETCH_OBJ);
      return $search_student;
  }
  catch (PDOException $e) {
      throw $e;
  }
}
function update_student(array $data){
  try {
      $db = db_connect();
      $sql = <<<EOD
      UPDATE `students`
      SET 
          `INE` = :INE,
          `firstname` = :firstname, 
          `lastname` = :lastname,
          `phone` = :phone
      WHERE `student_id` = :student_id
      EOD;
      $postStmt = $db->prepare($sql);
      return $postStmt->execute($data);
  }
  catch (PDOException $e) {
      throw $e;
  }
}

function create_student(array $data){
  try {
      $db = db_connect();
      $sql = <<<EOD
      INSERT INTO `students` (
          INE, 
          firstname, 
          lastname, 
          birthdate, 
          phone, 
          email, 
          address, 
          postal_code, 
          city, 
          grade) 
      VALUES (:INE, :firstname,:lastname,:birthdate,:phone,:email,:address,:postal_code,:city,:class)
      EOD;
      $postStmt = $db->prepare($sql);
      return $postStmt->execute($data);
  }
  catch (PDOException $e) {
      throw $e;
  }
}

function delete_student($student_id){
  try {
      $db = db_connect();
      $sql = <<<EOD
      DELETE FROM `students`
      WHERE `student_id` = :student_id
      EOD;
      $postStmt = $db->prepare($sql);
      $postStmt->bindValue(':student_id',$student_id);
      return $postStmt->execute();
  }
  catch (PDOException $e) {
      throw $e;
  }
}
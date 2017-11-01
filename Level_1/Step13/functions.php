<?php

function dd($val){
  echo '<pre>';
  die(var_dump($val));
  echo '</pre>';
}
function connectToDb(){
  try{
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'GitGudAdmin', 'GitGud@');
  } catch (PDOException $e){
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
}
function fetchAllTasks($pdo){
  $statement = $pdo->prepare('select * from todos');

  $statement->execute();

  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}

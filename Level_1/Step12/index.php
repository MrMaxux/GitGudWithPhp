<?php
require 'functions.php';
class Task {
  public $description;

  public $completed = false;

  public function __construct($description)
  {
    $this->description = $description;
  }

  public function complete()
  {
      $this->completed = true;
  }

  public function isComplete()
  {
    return $this->completed;
  }
}
$task = new Task('Go to the store');

$task->complete();

$tasks = [
  new Task('Go to the store'),
  new Task('Finish this screencasts'),
  new Task('Play something new'),
];
$tasks[0]->complete();

require 'index.view.php';

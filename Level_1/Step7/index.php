<?php

  $person = [
    'age' => 21,
    'hair' => 'white',
    'career' => 'dev_ops'
  ];

  $person['name'] = 'Max';

  unset($person['age']);
  echo '<pre>';
  var_dump($person);
  echo '</pre>';
  die();
  require 'index.view.php';

<?php

  require 'functions.php';

  $SimpleGuy = [
    'name' => "Max",
    'age' => '21',
  ];
  $restricted = is_Allowed($SimpleGuy);


  require 'index.view.php';

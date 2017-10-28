<?php

function dd($val){
  echo '<pre>';
  die(var_dump($val));
  echo '</pre>';
}

function is_Allowed($val){
  if ($val['age'] >= 21){
    return false;
  } else {
    return true;
  }
}

<?php

$link = $_POST['hyperLink'];

$re = '/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';

preg_match_all($re, $link, $matches);

// var_dump($matches);
$fullMatch = $matches[0];
$group1 = $matches[1];
$group2 = $matches[2];
$group3 = $matches[3];
$group4 = $matches[4];

if((sizeof($fullMatch) > 0) && (sizeof($group1) > 0) && (sizeof($group2) > 0) && (sizeof($group3) > 0)){
  echo 'valid';
} else{
  echo 'fail';
}

 ?>

<?php

session_start();
include('global.php');

function hash_password($email,$password){
  return md5('TXD'.$email.$password);
}

$username = $_POST['username'];
$password = hash_password($username, $_POST['password']);

//If username contains @ symbol
if(preg_match('/@/', $username)){
  $query = "SELECT * FROM users where user_email = '{$username}' AND user_password = '{$password}';";
  $rows = databaseQuery($query);

  if(sizeof($rows) === 0){
    //No users found
    echo 'fail';
  } else{
    //User found
    echo 'success';
  }
} else{
  $query = "SELECT * FROM users where user_username = '{$username}' AND user_password = '{$password}';";
  $rows = databaseQuery($query);

  if(sizeof($rows) === 0){
    //No users found
    echo 'fail';
  } else{
    //User found
    echo 'success';
  }
}
?>

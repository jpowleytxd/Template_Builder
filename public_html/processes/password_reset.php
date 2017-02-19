<?php

session_start();
include('global.php');

function hash_password($email, $password){
  return md5('TXD' . $email . $password);
}

function passwordReset($email){
  ini_set("SMTP","cs1.txdlimited.co.uk");
	ini_set("smtp_port","25");
	ini_set("sendmail_from","jorden.powley@txdlimited.co.uk");

  // generate the new password
  //$newPassword = 'TXD'.substr(strtotime("now"),-5);
  //$hashedPassword = hash_password($email, $newPassword);

  // Send a password reset email to the user:
  // $message_1 = 'Password Reset Success.';
  // $message_2 = '';
  // $message_3 = '';
  // $message_4 = '';
  // $message_5 = '';
  //
  // $data = '{
  //   "request": {
  //     "username": "txduser",
  //     "password": "txdpassword",
  //     "method": "triggeredComm"
  //   },
  //   "details": {
  //     "commType": "Email",
  //     "key": "4D7122FB-5056-A620-BEABCB7FC187F754",
  //     "recipients": [{
  //       "recipient": "' . $email . '",
  //       "fname": "' . $result->firstname . '",
  //       "lname": "' . $result->lastname . '",
  //       "dyn1": "' . $message_1 . '",
  //       "dyn2": "' . $message_2 . '",
  //       "dyn3": "' . $message_3 . '",
  //       "dyn4": "' . $message_4 . '",
  //       "dyn5": "' . $message_5 . '"
  //       }]
  //     }
  //   }';
  //
  // $request = 'request=' . urlencode($data);
  //
  // $curl = curl_init();
  // curl_setopt_array($curl, array(
  //     CURLOPT_URL => "https://campaigns-plus.izone-app.com/api-v1/index.cfm",
  //     CURLOPT_RETURNTRANSFER => true,
  //     CURLOPT_ENCODING => "",
  //     CURLOPT_SSL_VERIFYPEER => false,
  //     CURLOPT_MAXREDIRS => 10,
  //     CURLOPT_TIMEOUT => 30,
  //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  //     CURLOPT_CUSTOMREQUEST => "POST",
  //     CURLOPT_POST => 1,
  //     CURLOPT_POSTFIELDS => $request,
  // ));
  //
  // $response = curl_exec($curl);
  // $error = curl_error($curl);
  // $info = curl_getinfo($curl);
  // curl_close($curl);
  //
  // if($error){
  //   echo 'fail';
  // } else {
  //   $query = "UPDATE users SET `user_password` = '{$hashedPassword}' WHERE `user_email` = '{$email}';";
  //   $rows = databaseQuery($query);
  //
  //   echo 'success';
  // }

  echo 'success';
}

$username = $_POST['username'];

//If username contains @ symbol
if(preg_match('/@/', $username)){
  $query = "SELECT * FROM users where user_email = '{$username}';";
  $rows = databaseQuery($query);

  if(sizeof($rows) === 0){
    //No users found
    echo 'fail';
  } else{
    //User found
    passwordReset($username);
  }
} else{
  $query = "SELECT user_email FROM users where user_username = '{$username}';";
  $rows = databaseQuery($query);

  if(sizeof($rows) === 0){
    //No users found
    echo 'fail';
  } else{
    //User found
    passwordReset($rows[0][0]);
  }
}

 ?>

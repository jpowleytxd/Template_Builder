<?php

if(isset($_SESSION['username'])){
  unset($_SESSION['username']);
}

$page = $_SERVER['REQUEST_URI'];
$page = preg_replace('/.*\/(.*).php/', '$1', $page);
if($page === '/'){
  $page = 'login';
}
$page = $page . '-page';

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0 user-scalable=no">
  <meta charset="UTF-8">

  <title>Template Builder</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="js/global.js"></script>
  <script src="js/login.js"></script>
</head>
<body id="<?php print_r($page);?>">

<section class="login-fullpage">
  <div class="login-outer">
    <div class="login-logo">
      <img src="http://placehold.it/200x50" alt="Template Builder">
    </div>
    <div class="login-inner">
      <form class="login-form" name="login-form" id="login-form">
        <div class="login-field">
          <label>Username or email address:</label>
          <input type="text" id="username" data-validate="username" required>
        </div>
        <div class="login-field">
          <label>Password:</label>
          <input type="password" id="password" data-validate="password" required>
        </div>
        <button type="submit" class="login-button">Login</button>
      </form>
    </div>
    <div class="forgot-password-container">
      <a href="#" class="forgotten-password">
        Forgot your Password?
      </a>
    </div>
  </div>
  <div class="password-popup-outer">
    <div class="password-popup-inner">
      <div class="password-popup-close">X</div>
      <span class="password-heading">Forgotten Your Password</span>
      <p>Enter your username into the box below. Your password will be sent to the email address registered on the system.</p>
      <form class="password-form" name="password-form" id="password-form">
        <div class="password-field">
          <input type="text" id="reset-password" data-validate="reset-password" required>
        </div>
        <button type="submit" class="password-button">RESET PASSWORD</button>
      </form>
      <p>For security and tracking purposes your IP
        <span><?php echo $_SERVER['REMOTE_ADDR']; ?></span>
         will be logged against some activities.</p>
    </div>
  </div>
</section>

<section id="feedback-bar">
  <div class="feedback-text">

  </div>
</section>

</body>

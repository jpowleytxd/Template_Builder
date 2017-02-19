<?php
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

  <title>Dashboard</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="../js/global.js"></script>
  <script src="../js/dashboard.js"></script>
</head>
<body id="<?php print_r($page);?>">

<?php include('../partials/_header.php') ?>

<section class="dashboard-fullpage">
  <?php include('../partials/_dash_nav.php') ?>
</section>

<?php include('../partials/_footer.php') ?>

</body>

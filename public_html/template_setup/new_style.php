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

  <title>New Style</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
  <script src="../js/global.js"></script>
  <script src="../js/template_setup.js"></script>
</head>
<body id="<?php print_r($page);?>">

<?php include('../partials/_header.php') ?>

<section class="new-style-fullpage">
  <?php include('../partials/_template_setup_nav.php') ?>
  <div class="initial-setup-outer">
    <div class="initial-setup-inner">
      <div class="setup-title">Quick Preview</div>
      <form id="setup-form" method="POST">
        <div class="form-col">
          <?php include('/input_sections/_theme_settings_input.php') ?>
          <?php include('/input_sections/_main_text_settings_input.php') ?>
          <?php include('/input_sections/_footer_text_settings_input.php') ?>
          <?php include('/input_sections/_social_input.php') ?>
        </div>
        <div class="form-col" id="preview-area">
          <?php include('/input_sections/_preview.php') ?>
        </div>
        <div class="form-col">
          <?php include('/input_sections/_navigation_links_input.php') ?>
          <?php include('/input_sections/_image_settings_input.php') ?>
          <?php include('/input_sections/_voucher_settings_input.php') ?>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- <?php include('../partials/_footer.php') ?> -->

</body>

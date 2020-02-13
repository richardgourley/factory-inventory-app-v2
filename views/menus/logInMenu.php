<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
  	<title>Factory Inventory App</title>
    <link rel="stylesheet" href="<?php echo SITE_URL . '/assets/styles.css' ?>">
  </head>
  <body>
    <h1 class="title">Factory Inventory App</h1>
    <div class="grid-container">
    <div class="menu"> 
    <ul>
      <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
      <br>
      <li><a href="<?php echo SITE_URL . '/user/logIn'; ?>">Log In</a></li>
    </ul>
    </div>
    <div class="view-display">
    <?php require_once( $view ); ?>
    </div>
  </body>
</html>







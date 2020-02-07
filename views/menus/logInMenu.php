<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
  	<title>Factory Inventory App</title>
  	<link rel="stylesheet" href="">
  </head>
  <body>
    <h1>Factory Inventory App</h1>
    <ul>
      <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
      <br>
      <li><a href="<?php echo SITE_URL . '/user/logIn'; ?>">Log In</a></li>
    </ul>
    <?php require_once( $view ); ?>
  </body>
</html>







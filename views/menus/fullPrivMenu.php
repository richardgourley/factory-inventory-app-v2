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
      <p>PRODUCTS:</p>
      <li><a href="<?php echo SITE_URL . '/product/index'; ?>">View all products</a></li>
      <li><a href="<?php echo SITE_URL . '/product/add'; ?>">Add a product</a></li>
      <li><a href="<?php echo SITE_URL . '/product/edit'; ?>">Edit a product</a></li>
      <li><a href="<?php echo SITE_URL . '/product/delete'; ?>">Delete a product</a></li>
      <p>USERS:</p>
      <li><a href="<?php echo SITE_URL . '/user/index'; ?>">View all users</a></li>
      <li><a href="<?php echo SITE_URL . '/user/add'; ?>">Add a user</a></li>
      <li><a href="<?php echo SITE_URL . '/user/edit'; ?>">Edit a user</a></li>
      <li><a href="<?php echo SITE_URL . '/user/delete'; ?>">Delete a user</a></li>
      <br>
      <li><a href="<?php echo SITE_URL . '/user/logOut'; ?>">Log Out</a></li>
    </ul>
    </div>
    <div class="view-display">
    <?php require_once( $view ); ?>
    </div>
    </div>
  </body>
</html>







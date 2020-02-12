<h1>Users</h1>

<?php foreach( $viewmodel as $user ): ?>
<div>
  <h3><?php echo 'Username: ' . htmlentities( $user['username'], ENT_QUOTES ); ?></h3>
  <p><?php echo 'Priveliges Level: ' . htmlentities( $user['priveliges_id'], ENT_QUOTES ); ?></p>
</div>
<?php endforeach; ?>











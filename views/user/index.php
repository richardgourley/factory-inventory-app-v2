<h1>Users</h1>

<?php foreach( $viewmodel as $user ): ?>
<div>
  <h3><?php echo 'Username: ' . $user['username']; ?></h3>
  <p><?php echo 'Priveliges Level: ' . $user['priveliges_id']; ?></p>
</div>
<?php endforeach; ?>











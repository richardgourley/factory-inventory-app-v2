<h1>Edit a user</h1>

<?php if( gettype( $viewmodel) == 'string' ): ?>
  <h3 class="message"><?php echo $viewmodel ?></h3>
<?php return; ?>
<?php endif; ?>

<?php foreach( $viewmodel as $user ): ?>
<div>
  <form method="post" action="<?php htmlentities( SITEPATH . '/models/user.php' ); ?>">
      <table class="form-table">
        <tbody>
            <input type="hidden" name="id" placeholder="ID" 
            value="<?php echo $user['id']; ?>">
          <tr>
            <th>
              Username:
            </th>
            <td>
              <input type="text" name="username" placeholder="Username" 
              value="<?php echo htmlentities( $user['username'], ENT_QUOTES ); ?>">
            </td>
          </tr>
          <tr>
            <th>
              Priveliges Level:
            </th>
            <td>
              <input type="text" name="priveliges_id" placeholder="Priveliges Level"
              value="<?php echo htmlentities( $user['priveliges_id'], ENT_QUOTES ); ?>">
            </td>
          </tr> 
          <tr>
            <td>
              <input type="submit" name="submit" value="Edit User">
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>
<?php endforeach; ?>












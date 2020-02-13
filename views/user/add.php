<h1>Add a User</h1>

<?php if( gettype( $viewmodel) == 'string' ): ?>
  <h3 class="message"><?php echo $viewmodel ?></h3>
<?php return; ?>
<?php endif; ?>

<div>
  <h3>Add a user</h3>
  <form method="post" action="<?php htmlentities( SITEPATH . '/models/user.php' ); ?>">
      <table class="form-table">
        <tbody>
          <tr>
            <th>
              Username:
            </th>
            <td>
              <input type="text" name="username" placeholder="Username">
            </td>
          </tr>
          <tr>
          <tr>
            <th>
              Password:
            </th>
            <td>
              <input type="password" name="password" placeholder="Password">
            </td>
          </tr>
          <tr>
            <th>
              Priveliges Level:
            </th>
            <td>
              <input type="text" name="priveliges_id" placeholder="Priveliges Level">
              <small>Enter 1 for full access. Enter 2 to only view products.</small>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" name="submit" value="Add User">
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>











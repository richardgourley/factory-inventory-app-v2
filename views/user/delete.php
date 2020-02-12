<h1>Delete User</h1>

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
              <p><?php echo htmlentities( $user['username'], ENT_QUOTES ); ?></p>
            </td>
          </tr>
          <tr>
            <th>
              Priveliges Level:
            </th>
            <td>
              <p><?php echo htmlentities( $user['priveliges_id'], ENT_QUOTES ); ?></p>
            </td>
          </tr> 
          <tr>
            <td>
              <input type="submit" name="submit" value="Delete User">
              <p>----------------------</p>
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>
<?php endforeach; ?>













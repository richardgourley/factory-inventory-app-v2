<h1>Edit a product</h1>

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
              value="<?php echo $user['username']; ?>">
            </td>
          </tr>
          <tr>
            <th>
              Priveliges Level:
            </th>
            <td>
              <input type="text" name="priveliges_id" placeholder="Priveliges Level"
              value="<?php echo $user['priveliges_id']; ?>">
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












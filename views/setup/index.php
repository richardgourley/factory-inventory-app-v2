<?php echo $viewmodel; ?>

<div>
  <h3>Create an account to begin using the app</h3>
  <form method="post" action="<?php htmlentities( SITEPATH . '/models/setup.php' ); ?>">
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
            <td>
              <input type="submit" name="submit" value="Create New User">
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>

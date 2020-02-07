<?php echo $viewmodel ?>

<div>
  <h3>Log In</h3>
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
            <td>
              <input type="submit" name="submit" value="Log In">
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>












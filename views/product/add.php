<?php echo $viewmodel; ?>

<div>
  <h3>Add a product</h3>
  <form method="post" action="<?php htmlentities( SITEPATH . '/models/product.php' ); ?>">
      <table class="form-table">
        <tbody>
          <tr>
            <th>
              Product Number:
            </th>
            <td>
              <input type="text" name="product_number" placeholder="Product Number">
            </td>
          </tr>
          <tr>
            <th>
              Product Name:
            </th>
            <td>
              <input type="text" name="product_name" placeholder="Product Name">
            </td>
          </tr>
          <tr>
            <th>
              Description:
            </th>
            <td>
              <input type="text" name="description" placeholder="Description">
            </td>
          </tr> 
          <tr>
            <th>
              Cost Price:
            </th>
            <td>
              <input type="text" name="cost_price" placeholder="Cost Price">
            </td>
          </tr> 
          <tr>
            <th>
              Quantity In Stock:
            </th>
            <td>
              <input type="text" name="quantity_in_stock" placeholder="Quantity in Stock">
            </td>
          </tr>  
          <tr>
            <td>
              <input type="submit" name="submit" value="Add Product">
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>










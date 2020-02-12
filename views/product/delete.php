<h1>Delete Product</h1>

<?php if( count( $viewmodel ) == 0 ): ?>
<h3>There are currently no products to delete</h3>
<?php endif; ?>
<?php return; ?>

<?php foreach( $viewmodel as $product ): ?>
<div>
  <form method="post" action="<?php htmlentities( SITEPATH . '/models/product.php' ); ?>">
      <table class="form-table">
        <tbody>
            <input type="hidden" name="id" placeholder="ID" 
            value="<?php echo $product['id']; ?>">
          <tr>
            <th>
              Product Number:
            </th>
            <td>
              <p><?php echo $product['product_number']; ?></p>
            </td>
          </tr>
          <tr>
            <th>
              Product Name:
            </th>
            <td>
              <p><?php echo $product['product_name']; ?></p>
            </td>
          </tr>
          <tr>
            <th>
              Description:
            </th>
            <td>
              <p><?php echo $product['description']; ?></p>
            </td>
          </tr> 
          <tr>
            <th>
              Cost Price:
            </th>
            <td>
              <p><?php echo $product['cost_price']; ?></p>
            </td>
          </tr> 
          <tr>
            <th>
              Quantity In Stock:
            </th>
            <td>
              <p><?php echo $product['quantity_in_stock']; ?></p>
            </td>
          </tr>  
          <tr>
            <td>
              <input type="submit" name="submit" value="Delete Product">
              <p>----------------------</p>
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>
<?php endforeach; ?>


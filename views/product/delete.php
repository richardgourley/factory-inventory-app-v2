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
            <input type="hidden" name="id" 
            value="<?php echo $product['id']; ?>">
          <tr>
            <th>
              Product Number:
            </th>
            <td>
              <p><?php echo htmlentities( $product['product_number'], ENT_QUOTES ); ?></p>
            </td>
          </tr>
          <tr>
            <th>
              Product Name:
            </th>
            <td>
              <p><?php echo htmlentities( $product['product_name'], ENT_QUOTES ); ?></p>
            </td>
          </tr>
          <tr>
            <th>
              Description:
            </th>
            <td>
              <p><?php echo htmlentities( $product['description'], ENT_QUOTES ); ?></p>
            </td>
          </tr> 
          <tr>
            <th>
              Cost Price:
            </th>
            <td>
              <p><?php echo htmlentities( $product['cost_price'], ENT_QUOTES ); ?></p>
            </td>
          </tr> 
          <tr>
            <th>
              Quantity In Stock:
            </th>
            <td>
              <p><?php echo htmlentities( $product['quantity_in_stock'], ENT_QUOTES ); ?></p>
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


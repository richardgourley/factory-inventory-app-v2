<h1>Edit a product</h1>

<?php if( count( $viewmodel ) == 0 ): ?>
<h3>There are currently no products to edit</h3>
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
              <input type="text" name="product_number" placeholder="Product Number" 
              value="<?php echo htmlentities( $product['product_number'], ENT_QUOTES ); ?>">
            </td>
          </tr>
          <tr>
            <th>
              Product Name:
            </th>
            <td>
              <input type="text" name="product_name" placeholder="Product Name"
              value="<?php echo $product['product_name']; ?>">
            </td>
          </tr>
          <tr>
            <th>
              Description:
            </th>
            <td>
              <input type="text" name="description" placeholder="Description"
              value="<?php echo $product['description']; ?>">
            </td>
          </tr> 
          <tr>
            <th>
              Cost Price:
            </th>
            <td>
              <input type="text" name="cost_price" placeholder="Cost Price"
              value="<?php echo $product['cost_price']; ?>">
            </td>
          </tr> 
          <tr>
            <th>
              Quantity In Stock:
            </th>
            <td>
              <input type="text" name="quantity_in_stock" placeholder="Quantity in Stock"
              value="<?php echo $product['quantity_in_stock']; ?>">
            </td>
          </tr>  
          <tr>
            <td>
              <input type="submit" name="submit" value="Edit Product">
            </td>
          </tr> 
        </tbody>
      </table>
  </form>
</div>
<?php endforeach; ?>

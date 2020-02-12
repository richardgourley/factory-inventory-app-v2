<h1>Products</h1>

<?php if( count( $viewmodel ) == 0 ): ?>
<h3>There are currently no products to view</h3>
<?php endif; ?>
<?php return; ?>

<?php foreach( $viewmodel as $product ): ?>
<div>
  <h3><?php echo $product['product_name']; ?></h3>
  <p><?php echo 'Description: ' . $product['description']; ?></p>
  <p><?php echo 'Product Number: ' . $product['product_number']; ?></p>
  <p><?php echo 'Cost Price: ' . $product['cost_price']; ?></p>
  <p><?php echo 'Quantity in stock: ' . $product['quantity_in_stock']; ?></p>
</div>
<?php endforeach; ?>

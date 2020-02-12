<h1>Products</h1>

<?php if( count( $viewmodel ) == 0 ): ?>
<h3>There are currently no products to view</h3>
<?php endif; ?>
<?php return; ?>

<?php foreach( $viewmodel as $product ): ?>
<div>
  <h3><?php echo htmlentities( $product['product_name'], ENT_QUOTES ); ?></h3>
  <p><?php echo 'Description: ' . htmlentities( $product['description'], ENT_QUOTES ); ?></p>
  <p><?php echo 'Product Number: ' . htmlentities( $product['product_number'], ENT_QUOTES ); ?></p>
  <p><?php echo 'Cost Price: ' . htmlentities( $product['cost_price'], ENT_QUOTES ); ?></p>
  <p><?php echo 'Quantity in stock: ' . htmlentities( $product['quantity_in_stock'], ENT_QUOTES ); ?></p>
</div>
<?php endforeach; ?>

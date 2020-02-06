<?php echo $viewmodel; ?>
<?php
if( isset( $_SESSION['post_message'] ) ){
	echo $_SESSION['post_message'];
	$_SESSION['post_message'] = '';
}
?>

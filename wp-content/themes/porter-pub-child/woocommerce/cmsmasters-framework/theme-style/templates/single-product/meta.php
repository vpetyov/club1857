<?php
/**
 * @cmsmasters_package 	Porter Pub
 * @cmsmasters_version 	1.0.0
 */

global $post, $product;

$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );

?>
<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

	<?php if ($sku = $product->get_sku()) { ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'porter-pub' ); ?>
			<span class="sku"><?php echo porter_pub_return_content($sku);?></span>
		</span>

	<?php }?>
	<?php endif; ?>

	<?php
	// if (get_the_terms($product->get_id(), 'product_cat')) {
	// 	echo '<span class="posted_in">' . 
	// 		esc_html(_n('Category:', 'Categories:', $cat_count, 'porter-pub')) . ' ' . 
	// 		porter_pub_get_the_category_list($product->get_id(), 'product_cat', ', ') . 
	// 	'</span>';
	// }
	// ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>

<?php
/**
 * hide purchase button behind a toggle button
 *
 * @package Convention Magic
 */
?>

<a class="product-link convention-magic-show-button" href="#"><i class="fa fa-plus-circle convention-magic-price-button-icon"></i></a>
<div class="convention-magic-price-button-container">
	<span class="convention-magic-price-button">
		<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID() ) ); ?>
	</span>
</div>

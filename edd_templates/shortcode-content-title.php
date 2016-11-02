<?php if ( convention_magician_fes_is_activated() || apply_filters( 'convention_magician_show_downloads_byline', false ) ) { ?>
	<div class="edd_download_byline">
		<span class="edd_byline_author_avatar"><?php echo get_avatar( get_the_author_meta( 'ID', $post->post_author ), 25, null ); ?></span>
		<span class="edd_byline_by"><?php _e( 'by', 'convention-magician' ) . ' '; ?></span>
		<span class="edd_byline_author">
			<?php if ( convention_magician_fes_is_activated() ) {
				$vendor_url = convention_magician_edd_fes_author_url( get_the_author_meta( 'ID', $post->post_author ) );
				?>
				<a class="edd_byline_author_url" href="<?php echo $vendor_url; ?>">
					<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?>
				</a>
			<?php } else { ?>
				<span class="edd_byline_author">
					<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?>
				</span>
			<?php } ?>
		</span>
	</div>
<?php } ?>
<h3 itemprop="name" class="edd_download_title">
	<a title="<?php the_title_attribute(); ?>" itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h3>
<?php
	if ( 1 == get_theme_mod( 'convention_magician_downloads_taxonomies' ) ) {
		get_template_part( 'edd_templates/shortcode', 'content-taxonomies' );
	}
?>

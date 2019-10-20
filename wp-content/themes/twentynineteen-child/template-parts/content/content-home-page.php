<?php
/**
 * Template part for displaying page content in front-page.php
 */

?>

<div id="<?php the_ID(); ?>" class="card my-1 mx-1" style="min-width:350px; max-width:450px;">
  <img class="card-img-top" src="<?php echo !empty(get_the_post_thumbnail_url(get_the_id(), 'full')) ? esc_url(get_the_post_thumbnail_url(get_the_id(), 'full')) : get_stylesheet_directory_uri() . '/images/dog_placeholder.png'; ?>"
	alt="<?php echo (!empty(get_the_post_thumbnail_url(get_the_id(), 'full')) && !empty(get_post_meta(get_post_thumbnail_id(get_the_id()), '_wp_attachment_image_alt', true))) ? esc_attr(get_post_meta(get_post_thumbnail_id(get_the_id()), '_wp_attachment_image_alt', true)) : esc_attr(get_the_title()); ?>">
  <div class="card-body">
    <h4 class="card-title"><?php the_title() ?></h4>
		<?php if (!empty(implode(',', get_post_meta(get_the_id(), 'favorite_food')))) : ?>
      <p class="card-text"><i class="fas fa-bone"></i> <?php echo esc_html(implode(',', get_post_meta(get_the_id(), 'favorite_food'))); ?></p>
    <?php endif; ?>
		<?php if (!empty(implode(',', get_post_meta(get_the_id(), 'food_allergies')))) : ?>
			<p class="card-text"><i class="fas fa-exclamation-triangle"></i> <?php echo esc_html(implode(',', get_post_meta(get_the_id(), 'food_allergies'))); ?></p>
		<?php endif; ?>
		<?php if (!empty(implode(',', get_post_meta(get_the_id(), 'favorite_toy')))) : ?>
  		<p class="card-text"><i class="fas fa-basketball-ball"></i> <?php echo esc_html(implode(',', get_post_meta(get_the_id(), 'favorite_toy'))); ?></p>
    <?php endif; ?>
  </div>
	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer text-center">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</div>

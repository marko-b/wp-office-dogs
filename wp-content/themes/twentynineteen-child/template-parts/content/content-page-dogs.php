<?php
/**
 * Template part for displaying page content in page-dogs.php
 */

?>

<div id="<?php the_ID(); ?>" class="card my-1 mx-1 doggo" style="<?php echo $dog_post_number == 0 ? 'width:100% !important' : 'min-width:350px; max-width:500px;'; ?>;"
  data-allergies="<?php echo (!empty(get_post_meta(get_the_id(), 'food_allergies', true)) ? 'yes' : 'no'); ?>"
  data-breed="<?php echo (!empty(implode(', ', wp_list_pluck(get_the_terms(get_the_id(), 'mb_dog_breed' ), 'name'))) ? esc_attr(implode(', ', wp_list_pluck(get_the_terms(get_the_id(), 'mb_dog_breed' ), 'name'))) : ''); ?>"
  >
<?php if ($dog_post_number == 0) : ?>
  <div class="d-flex">
    <div class="d-flex justify-content-center align-items-center w-50">
      <img class="img-responsive" src="<?php echo !empty(get_the_post_thumbnail_url(get_the_id(), 'full')) ? esc_url(get_the_post_thumbnail_url(get_the_id(), 'full')) : get_stylesheet_directory_uri() . '/images/dog_placeholder.png'; ?>"
      alt="<?php echo (!empty(get_the_post_thumbnail_url(get_the_id(), 'full')) && !empty(get_post_meta(get_post_thumbnail_id(get_the_id()), '_wp_attachment_image_alt', true))) ? esc_attr(get_post_meta(get_post_thumbnail_id(get_the_id()), '_wp_attachment_image_alt', true)) : esc_attr(get_the_title()); ?>">
    </div>
<?php else : ?>
  <img class="card-img-top" src="<?php echo !empty(get_the_post_thumbnail_url(get_the_id(), 'full')) ? esc_url(get_the_post_thumbnail_url(get_the_id(), 'full')) : get_stylesheet_directory_uri() . '/images/dog_placeholder.png'; ?>"
  alt="<?php echo (!empty(get_the_post_thumbnail_url(get_the_id(), 'full')) && !empty(get_post_meta(get_post_thumbnail_id(get_the_id()), '_wp_attachment_image_alt', true))) ? esc_attr(get_post_meta(get_post_thumbnail_id(get_the_id()), '_wp_attachment_image_alt', true)) : esc_attr(get_the_title()); ?>">
<?php endif; ?>
    <div class="card-body">
      <h4 class="card-title"><?php the_title(); ?></h4>
      <p class="card-text"><i class="fas fa-birthday-cake"></i> <?php echo esc_html(format_birthdate(get_the_id(), 'full_date')); ?></p>
      <p class="card-text"><i class="fas fa-user"></i></i> <?php echo esc_html(get_post_meta(get_the_id(), 'owner_name', true)); ?></p>
      <?php if (!empty(get_post_meta(get_the_id(), 'favorite_food', true))) : ?>
        <p class="card-text"><i class="fas fa-bone"></i> <?php echo esc_html(get_post_meta(get_the_id(), 'favorite_food', true)); ?></p>
      <?php endif; ?>
  		<?php if (!empty(get_post_meta(get_the_id(), 'food_allergies', true))) : ?>
  			<p class="card-text"><i class="fas fa-exclamation-triangle"></i> <?php echo esc_html(get_post_meta(get_the_id(), 'food_allergies', true)); ?></p>
  		<?php endif; ?>
      <?php if (!empty(get_post_meta(get_the_id(), 'favorite_toy', true))) : ?>
    		<p class="card-text"><i class="fas fa-basketball-ball"></i> <?php echo esc_html(get_post_meta(get_the_id(), 'favorite_toy', true)); ?></p>
      <?php endif; ?>
      <?php if (!empty(implode(', ', wp_list_pluck(get_the_terms(get_the_id(), 'mb_dog_breed' ), 'name')))) : ?>
        <p class="card-text"><i class="fas fa-dog"></i> <?php echo esc_html(implode(', ', wp_list_pluck(get_the_terms(get_the_id(), 'mb_dog_breed' ), 'name'))); ?></p>
      <?php endif; ?>
    </div>
  	<?php if (get_edit_post_link()) : ?>
  		<footer class="entry-footer text-center p-2">
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
<?php if ($dog_post_number == 0) : ?>
   </div>
<?php endif; ?>
</div>

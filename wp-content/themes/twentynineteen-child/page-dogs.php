<?php
/**
 * The template for all dogs page
 * Template name: All dogs page
 * Template post type: page, mb_dog
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-6 my-2">
						<div id="dog-options" class="btn-group btn-group-toggle" data-toggle="buttons">
							<label id="all-dogs" class="btn btn-secondary active">
								<input type="radio" name="allergy-options" id="allergy-options-no" value="no" autocomplete="off" checked> All dogs
							</label>
							<label id="allergies-dogs" class="btn btn-secondary">
								<input type="radio" name="allergy-options" id="allergy-options-yes" value="yes" autocomplete="off"> Dogs with allergies
							</label>
						</div>
					</div>
					<div class="col-6 my-2">
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
						    <label class="input-group-text" for="dog-breed">Breed</label>
						  </div>
						  <select class="custom-select" id="dog-breed">
						    <option value="all" selected>- All breeds -</option>
								<?php foreach (get_all_breeds() as $dog_breed) : ?>
						    	<option value="<?php echo esc_attr(strtolower($dog_breed)); ?>"><?php echo esc_html(ucfirst($dog_breed)); ?></option>
						    <?php endforeach; ?>
						  </select>
						</div>
					</div>
				</div>
	      <div class="row">
	        <div class="col-12 d-flex justify-content-between flex-wrap">

		    			<?php

		            $dogs = new WP_Query(
		                      array(
		                        'post_type' => array('mb_dog'),
		                        'post_status' => 'publish',
		                        'posts_per_page' => -1
		                      )
		                    );

		            if ($dogs->have_posts()) {

									// reorder dogs by birthdate
									sort_dogs_by_birthdate($dogs);

									$dog_post_number = 0;

		              while ($dogs->have_posts()) {
		                $dogs->the_post();

										set_query_var('dog_post_number', $dog_post_number);

										get_template_part('template-parts/content/content', 'page-dogs');

										$dog_post_number++;
		              }

		              wp_reset_postdata();

		            } else {
		              esc_html_e('No dogs in the office... :(');
		            }

		    			?>

					</div>
        </div>
      </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

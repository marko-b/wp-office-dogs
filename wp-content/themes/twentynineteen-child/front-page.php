<?php
/**
 * The template for front page
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12">
  					<div class="card-deck justify-content-between">

        			<?php

                $dogs = new WP_Query(
                          array(
                            'post_type' => array('mb_dog'),
                            'post_status' => 'publish',
                            'posts_per_page' => -1
                          )
                        );

                if ($dogs->have_posts()) {

                  while ($dogs->have_posts()) {
                    $dogs->the_post();

                    if (!dog_is_celebrating(get_the_id())) continue;

                    get_template_part('template-parts/content/content', 'home-page');
                  }

                  wp_reset_postdata();

                } else {
                  esc_html_e('No dogs in the office... :(');
                }

        			?>

            </div>
          </div>
        </div>
      </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();

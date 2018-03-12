<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section class='events-details'>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="primary" class="content-area">
		<?php
		// Start the loop.
                    while ( have_posts() ) : the_post();
                        the_content();
                            // If comments are open or we have at least one comment, load up the comment template.
                    // End the loop.
                    endwhile;
		?>
                </div><!-- .content-area -->
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

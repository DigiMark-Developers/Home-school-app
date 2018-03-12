<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section class='events-details'>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                    <?php
                    // Start the loop.
                        while ( have_posts() ) : the_post();
                                the_content();
                        endwhile;
                    ?>
                    </main><!-- .site-main -->
                </div><!-- .content-area -->
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <h3>Sidebar1 Heading</h3>
                    <ul>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                    </ul>
                        <h3>Sidebar1 Heading1</h3>
                    <ul>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                        <li><a href="">Lorem Ipsum</a></li>
                    </ul>
                </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

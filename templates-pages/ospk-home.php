<?php
/**
 * Template Name: OSPK - Home
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="jumbotron">
                <h1><?php the_title();?></h1>
                <h2><?php echo get_bloginfo ( 'description' );  ?></h2>
        </div><!--/.hero-unit -->

    <?php endwhile; endif; ?>

        <div class="row ospkwidgets">
                <div class="col-md-6">
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("ospk-left");
                    } ?>
                </div>
                <div class="col-md-6">
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("ospk-right");
                    } ?>
                </div>
        </div><!--/.row -->

        <div class="row content frontpage-content">
            <?php the_content(); ?>
        </div>
</div><!--/.container -->

<?php get_footer(); ?>
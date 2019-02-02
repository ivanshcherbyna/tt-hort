<?php
/*
*Template Name: Home page
 */
?>
<?php

global $mytheme;

?>

<?php get_header(); ?>

<!-- main content goes here -->
<main role="main" class="main front-page" >
    <div class="background-shadow">
    <!-- section -->
    <section>

        <div class="slider-section">
            <?php // echo do_shortcode('[slick-slider category="3" design="design-1" arrows=»true» show_content=»true»]');?>
        </div>
        
        <div class="news-feed container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>



            </article>
            <!-- /article -->


            <?php endwhile;?>
            <?php endif;?>
            <div class="news section">
                <article>
                <h2 style="text-align: center"><a href="/novini-klubu/"><?php echo qtranxf_esc_html('[:en]News[:ua]Новини[:ru]Новости[:]'); ?></h2></a>
                    <?php echo do_action('get_news',6); ?>
                </article>
            </div>
        </div>


    </section>

    </div>
    <!-- /section -->
</main>
<?php get_footer(); ?>

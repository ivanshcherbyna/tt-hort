<?php
/*
*Template Name: Услуги
 */
?>
<?php global $mytheme;?>
<?php get_header(); ?>

<!-- main content goes here -->
<main role="main">
    <!-- section -->
    <section>
        <div class="container">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                </article>
                <!-- /article -->

            <?php endwhile; ?>


            <?php endif; ?>

            <div class="container">
                <div class="row">
                    <?php echo do_action('get_services');?>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->
</main>
<?php do_action('fancy_on'); ?>
<?php get_footer(); ?>

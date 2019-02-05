<?php get_header(); ?>

<main role="main">
    <!-- section -->
    <section>
        <div class="container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <a href="" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('large'); // Fullsize image for the single post ?>
                        </a>
                    <?php endif; ?>
                    <!-- /post thumbnail -->

                    <!-- post title -->
                    <h1>
                        <a href="" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <!-- /post title -->

                    <?php the_content(); // Dynamic Content ?>


                </article>
                <!-- /article -->

            <?php endwhile; ?>

            <?php else: ?>

                <!-- article -->
                <article>

                    <h1><?php _e( 'Извините, ничего нет.', THEME_OPT ); ?></h1>

                </article>
                <!-- /article -->

            <?php endif; ?>
        </div>
    </section>
    <!-- /section -->
</main>

<?php get_footer(); ?>

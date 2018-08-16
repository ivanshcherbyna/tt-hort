<?php
/*
*Template Name: Gallery page
 */
?>

<?php get_header(); ?>
<?php global $mytheme; ?>
<!-- main content goes here -->
<main role="main">
    <!-- section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="gallery justify-content-md-center">
                    <?php
                    $images = explode(',',$mytheme['gallery-id']);
                    foreach ($images as $item){
                        $current_image =wp_get_attachment_image( $item, array(500,500));
                        echo '<div class="image_gallery">';
                        echo $current_image;
                        echo  '</div>';
                    }

                    ?>
                </div>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php the_content(); ?>

                    </article>
                    <!-- /article -->

                <?php endwhile; ?>


                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- /section -->
</main>
<?php get_footer(); ?>

<?php
/*
*Template Name: News page
 */
?>
<?php global $mytheme;
function get_news()
{
    $args = array(
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'news',
        'post_status' => 'publish',
        'post_type' => 'post'
    );

    $posts = get_posts($args);

    foreach ($posts as $post) {
        setup_postdata($post);
        $str = strpos($post->post_content, "\n");
        $subtitle = strpos($post->post_content,0,$str);
        echo '<div class="current-post">
                <div class="date-post">'.$post->post_date.'</div>
                <a class="link-post" href="'.$post->guid.'">
                <div class="head-post">'.$post->post_title.'</div>
                </a>
                <div class="chunk-post">'.$subtitle.'</div>
              </div>
              <br>
        ';
        // формат вывода
    }
}
wp_reset_postdata(); // сброс
?>
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
                    <?php get_news();?>
                </div>
            </div>
        </div>
    </section>
    <!-- /section -->
</main>
<?php get_footer(); ?>

<?php
/*
*Template Name: Home page
 */
?>
<?php
function get_feed_news()
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
        $date=substr($post->post_date,0,10);
        $image=get_the_post_thumbnail_url($post->ID,array(100,100));
          echo '<div class="current-post-feed col-sm-6">
                <a class="link-post-feed" href="'.$post->guid.'">
                <img class="thumb-post" src="'.$image.'">
                
                <div class="head-post-feed">'.$post->post_title.'</div>
                </a>
              
              </div>
              
        ';
        // формат вывода
    }
}
wp_reset_postdata(); // сброс
global $mytheme;

?>

<?php get_header(); ?>

<!-- main content goes here -->
<main role="main" class="main front-page" >
    <div class="background-shadow">
    <!-- section -->
    <section>

        <div class="slider-section">

        </div>
        <div class="news-feed container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

                <!--			--><?php //comments_template( '', true ); // Remove if you don't want comments ?>

            </article>
            <!-- /article -->

            <?php endwhile;?>
            <?php endif;?>
        </div>


    </section>
    </div>
    <!-- /section -->
</main>
<?php get_footer(); ?>

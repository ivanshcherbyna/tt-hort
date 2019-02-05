<?php
/*
 * Template Name: Contact form
 */
get_header();
global $mytheme;
?>
<main role="main" class="main contact-page" >
<div class="background-shadow">
<div class="container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

       <div class="contact-content">
           <div class=""><?php the_content(); // Dynamic Content ?></div>
       </div>
    <?php endwhile; ?>
    <?php endif; ?>
    <div class="contact-section">
        
        <iframe src="<?php echo esc_url($mytheme['iframe-maps-src']);?>" width="600" height="450" frameborder="0" style="border:0;margin: 20px;" allowfullscreen></iframe>
<!--        <div class="contact-heading">--><?php //echo $mytheme['contact-head-text'];?><!--</div>-->
<!--        <div class="contact-subheading">--><?php //echo $mytheme['contact-subhead-text'];?><!--</div>-->
        <div class="inputs-wrap">
            <?php
            echo do_shortcode('[contact-form-7 id="58" title="Contact-form"]');
            ?>
        </div>
    </div>

</div>
</div>
</main>
<?php

get_footer();
?>

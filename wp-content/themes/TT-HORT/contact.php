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

       <div class="contact-content row">
           <div class="col"><?php the_content(); // Dynamic Content ?></div>
       </div>
    <?php endwhile; ?>
    <?php endif; ?>
<div class="contact-section row">
    <div class="col-sm-6 col-xs-12 text-center">
        <div class="footer-column-heading"><?php _e('[:en]Address[:ru]Адрес[:ua]Адреса[:]',THEME_OPT) ?></div>
        <ul>
            <li><?php echo $mytheme['adress-street-text']; ?></li>
            <li><?php echo $mytheme['adress-city-text']; ?></li>
            <li>
                <a href="tel:<?php echo $mytheme['telephone-text'];?>">tel: <?php echo $mytheme['telephone-text'];?></a>
            </li>
        </ul>
        <iframe src="<?php echo esc_url($mytheme['iframe-maps-src']);?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
<!--        <div class="contact-heading">--><?php //echo $mytheme['contact-head-text'];?><!--</div>-->
<!--        <div class="contact-subheading">--><?php //echo $mytheme['contact-subhead-text'];?><!--</div>-->
    </div>
    <div class="col-sm-6 col-xs-12">
        <div class="inputs-wrap">
            <?php
            echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]');
            ?>
        </div>
    </div>
</div>

</div>
</div>
</main>
<?php

get_footer();
?>

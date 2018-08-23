<?php global $mytheme;
//$copytext=redux_post_meta(THEME_OPT,$post->ID,'copy-text');?>
<!-- footer -->

<footer class="footer" role="contentinfo" >
    <div class="container-fluid first" style="background-color: <?php echo $mytheme['footer-first-background-img']['background-color'];?>">
        <div class="row">
            <div class="col-sm-2 footer-column">
            </div>
            <div class="col-sm-3 col-xs-6 footer-column">
                <div class="footer-column-heading"><?php _e('[:en]Address[:ru]Адрес[:ua]Адреса[:]',THEME_OPT) ?></div>
                <ul>

                    <li><?php echo $mytheme['adress-street-text']; ?></li>
                    <li><?php echo $mytheme['adress-city-text']; ?></li>
                    <li>
                        <a href="tel:<?php echo $mytheme['telephone-text'];?>">tel: <?php echo $mytheme['telephone-text'];?></a>
                    </li>
                    <li>
                        <a href="<?php echo $mytheme['footer-url-find-us']; ?>"><?php _e('[:en]Find Us[:ru]Мы на карте[:ua]Знайти нас[:]',THEME_OPT) ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6 footer-column">
                <div class="footer-column-heading"><?php _e('[:en]Useful links[:ru]Полезные ссылки[:ua]Корисні посилання[:]',THEME_OPT) ?></div>
                <ul>
                    <li><a href="<?php echo esc_url($mytheme['facebook']);?>"><i class="fa fa-facebook"></i> <?php echo $mytheme['facebook-title'];?></a> </li>
                    <li><a href="<?php echo esc_url($mytheme['instagram']);?>"> <i class="fa fa-instagram"></i><?php echo $mytheme['instagram-title'];?></a></li>
                    <li><a href="<?php echo esc_url($mytheme['youtube']);?>"><i class="fa fa-youtube"></i><?php echo $mytheme['youtube-title'];?></a></li>
                    <li><a href="<?php echo esc_url($mytheme['fntzo']);?>"><img src="<?php echo $mytheme['fntzo-img']['url'];?>" width="50px"> <?php echo $mytheme['fntzo-title'];?></a></li>
                    <li><a href="<?php echo esc_url($mytheme['fntu']);?>"><img src="<?php echo $mytheme['fntu-img']['url'];?>" width="50px"><?php echo $mytheme['fntu-title'];?></a></li>
                    <li><a href="mailto:<?php echo $mytheme['mail'];?>" ><i class="fa fa-envelope-o"></i>e-mail</a></li>
                </ul>
            </div>



            <div class="col-sm-5 col-xs-6 footer-column">
                <ul>
                    <li>
                        <?php echo $mytheme['copy-text'];?>
                    </li>
                    <li>
                        <br>
                    </li>
                    <li>
                        <div class="">
                            <div class="develop">
                                Develop by <a href="mailto:shcherbyna.ivan@gmail.com" title="Send mail">Shcherbyna Ivan©</a>
                            </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</footer>
<!-- /footer footer-bg -->
</div>
<!-- /wrapper -->

<?php wp_footer(); ?>
</body>

</html>

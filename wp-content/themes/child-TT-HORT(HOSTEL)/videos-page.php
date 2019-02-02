
<?php
/*
*Template Name: Видео
 */
?>

<?php get_header(); ?>
<?php global $mytheme; 
$videos_arr=!empty($mytheme['video-yutube-url'])? $mytheme['video-yutube-url']:array(''=>'');
?>
<div class="container">
<section class="video-section ">


    <?php $i=0;
    foreach ($videos_arr as $video):
        $i++;?>
        <div class="video-item" data-attribute="<?= $i ?>">
            <div class="video-item-img">
                <iframe class="video-item-img-content" src="https://youtube.com/embed/<?php echo $video; ?>" height="315" width="560" allowfullscreen="" frameborder="0" alt="#"></iframe>
            </div>

        </div>
    <?php endforeach; ?>

</section>
</div>
<?php get_footer(); ?>

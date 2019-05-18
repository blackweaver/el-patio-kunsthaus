<?php
    $background_media_image_id = 0;
?>
<div id="module0" class="module module-id-<?php echo $background_media_image_id;  ?> module-scrollingpage-ad module-scrollingpage-ad-big" data-theme="dark-media">
    <?php
        global $background_media_image;
        $background_media_image = 'static/img/exhibitions/big_0.png';
        include('_inc-background-image-block-style.php');
        unset($background_media_image_id);
        unset($background_media_image);
    ?>
    <div class="hgroup text-center limiter">
        <p class="date">Noch bis 30.6.2019</p>
        <div>
            <h2 class="title"><a href="#">Fly me to the moon</a></h2>
        </div>    
        <div>
            <a href="#" class="button button-wired">Ticket kaufen</a>
        </div>
    </div>
    <?php include('_inc-next-section-button.php');  ?>

</div>


<?php
    $background_media_image_id = 2;
?>
<div id="module-2"  class="module module-id-<?php echo $background_media_image_id;  ?> background-image-cover module-scrollingpage-ad module-scrollingpage-ad-big background-video-cover play-in-view" data-theme="dark-media">
    <?php
        global $background_media_image;
        $background_media_image = 'static/img/exhibitions/big_2.png';
        include('_inc-background-image-block-style.php');
        unset($background_media_image_id);
        unset($background_media_image);
    ?>
    <div class="hgroup text-center limiter">
        <p class="date">Immer einen Besuch wert</p>
        <div>
            <h2 class="title"><a href="#">Die Sammlung</a></h2>
        </div>    
        <div>
            <a href="#" class="button button-wired">Mehr erfahren</a>
        </div>
    </div>
    <?php include('_inc-next-section-button.php');  ?>    
    <?php
        $vimeo_video_id = 310155204;
        include('_inc-bg-video-playinview.php');
    ?>
</div>


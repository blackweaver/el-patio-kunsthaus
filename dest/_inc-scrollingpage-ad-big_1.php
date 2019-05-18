<?php
    $background_media_image_id = 1;
?>
<div id="module1"  class="module module-id-<?php echo $background_media_image_id; ?> module-scrollingpage-ad module-scrollingpage-ad-big" data-theme="light">
    <?php
        global $background_media_image;
        $background_media_image = 'static/img/exhibitions/big_1.png';
        include('_inc-background-image-block-style.php');
        unset($background_media_image_id);
        unset($background_media_image);
    ?>
    <noscript><img src="<?php echo $background_media_image ?>" alt=""></noscript>    
    <div class="hgroup text-center limiter">
        <p class="date">Nur noch wenige Tage</p>
        <div>
            <h2 class="title"><a href="#">Winter & Weihnachten</a></h2>
        </div>    
        <div>
            <a href="#" class="button button-wired">Ticket kaufen</a>
        </div>
    </div>
    <?php include('_inc-next-section-button.php');  ?>
</div>


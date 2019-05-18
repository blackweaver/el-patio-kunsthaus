<div class="card filter-item <?php echo $category ?>">
    <a href="<?php echo $link; ?>" class="card-content card-active-area">
        <?php if($image != '') { ?>
            <figure class="card-thumbnail">
                <img src="<?php echo $image; ?>" alt="">
            </figure>
        <?php } ?>
        <div class="card-text">
            <time class="date"><?php echo $date ?></time>
            <h2 class="card-title"><?php echo $title ?></h2>
            <h3 class="card-headline"><?php echo $text; ?></h3>
            <span class="card-link text-link"><?php echo $cta_label; ?></span>
            <?php include('static/img/exhibitions/icon-arrow-card.svg') ?>
        </div>
    </a>
</div>
<div class="card">
    <a href="#" class="card-content card-active-area">
        <?php if($image != '') { ?>
            <figure class="card-thumbnail aspect-ratio-6-7">
                <img class="thumb" src="<?php echo $image; ?>" alt="">
            </figure>
        <?php } ?>
        <div class="card-text <?php if($image == '') echo 'is-padding-left'; ?>">
            <?php if(count($info) > 0) { ?>
                <?php echo $text; ?>
                <ul>
                    <?php foreach ($info as $valor) { ?>
                        <li><?php echo $valor ?></li>
                    <?php } ?>
                </ul>
            <?php } else { ?>
                <h3 class="card-headline"><?php echo $text; ?></h3>
            <?php } ?>
            <?php if($price != '') { ?>
                <p class="card-price">CHF <span><?php echo $price; ?></span></p>
            <?php } ?>
        </div>
    </a>
</div>
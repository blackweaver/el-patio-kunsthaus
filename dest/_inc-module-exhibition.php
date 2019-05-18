<div class="module module-exhibition <?php echo ($exhibition_size == 'is-big')? 'is-big': 'is-small' ?> <?php echo $css_module; ?>">
    <?php if($block_title != '') { ?><h3 class="module-title"><?php echo $block_title ?></h3><?php } ?>
    <div class="grid <?php if($image_align == 'right') echo 'is-reverse' ?>">
         <div class="hgroup">
            <time class="date"><?php echo $date ?></time>
            <div>
                <h2 class="title"><a href="#"><?php echo $title ?></a></h2>
            </div>    
            <p class="description"><?php echo $description ?></p>
            <?php foreach ($text_buttons as $key => $button) { ?>
                <div class="button-wired-gray"><a href="<?php echo $button["link"] ?>" class="button"><?php echo $button["text"] ?></a></div>
            <?php } ?>
        </div>
        <div class="thumbnail">
            <figure>
                <picture class="<?php echo $aspect_ratio; ?>">
                    <img src="<?php echo $image ?>" alt="">
                </picture>
                <!-- <figcaption><?php echo $image_description ?></figcaption> -->
            </figure>
        </div>
        
    </div>
</div>


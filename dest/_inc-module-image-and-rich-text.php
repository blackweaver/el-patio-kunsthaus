<div class="module module-image-and-rich-text <?php if ($background == 'grey') echo 'theme-lighter-petrol-blue"' ?>">
    <div class="limiter">        
        <div class="module-content <?php if ($alignment == 'right') echo 'is-reverse' ?> <?php echo ($image_width == '1/3')?  'image-one-third': 'image-one-half' ?>">        
            <figure class="module-image">
                <img alt="" src="<?php echo $image_block ?>">
                <figcaption>Laboris Lorem nulla do ad aliqua nostrud ex velit consectetur fugiat duis sint velit.</figcaption>
            </figure>
            <div class="module-text">
                <h4><?php echo $headline ?></h4>
                <p><?php echo $description ?></p>

                <?php if (count($text_buttons) > 0) { ?>
                    <div class="pack-buttons">
                        <?php foreach ($text_buttons as $key => $button) { ?>
                            <div class="button-petrol"><a href="<?php echo $button["link"] ?>" class="button"><?php echo $button["text"] ?></a></div>
                        <?php } ?>
                    </div>
                <?php } ?>
                
                <?php if (count($text_links) > 0) { ?>
                    <div class="pack-links">
                        <?php foreach ($text_links as $key => $links) { ?>
                            <a href="<?php echo $links["link"] ?>"><?php echo $links["text"] ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
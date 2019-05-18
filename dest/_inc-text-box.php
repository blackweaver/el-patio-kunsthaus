<div class="module module-text-teaser limiter <?php if($alignment == "left") echo "is-reverse" ?>">
    <h2 class="module-title h2-med"><?php echo $headline; ?></h2>
    <div class="module-content">
        <div class="highlighted-box">
            <div class="highlighted-box-text">
            <?php foreach ($text_box as $box) { ?>
                <h4><?php echo $box["title"] ?></h4>
                <p><?php echo $box["content"] ?></p>
                <?php if ($box["links"]) { ?>
                    <?php foreach ($box["links"] as $key => $link) { ?>
                        <a href="<?php echo $link["link"] ?>"><?php echo $link["text"] ?></a>
                        <?php if($key < count($box["links"]) -1) { ?><br><?php } ?>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            </div>
        </div>
        <div class="simple-text">
            <?php echo $text; ?>
        </div>
    </div>
</div>
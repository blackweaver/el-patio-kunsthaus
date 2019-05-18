<div class="module module-two-columns-one-third">
    <h3><?php echo $title ?></h3>
    <div class="module-content columns">
        <div class="column">
            <h4><?php echo $column_one["title"] ?></h4>
            <?php echo $column_one["content"] ?>
                <?php foreach ($text_links as $key => $link) { ?>
                    <a href="<?php echo $link["link"] ?>"><?php echo $link["text"] ?></a>
                <?php } ?>
        </div>
        <div class="column">
        <h4><?php echo $column_two["title"] ?></h4>
            <?php echo $column_two["content"] ?>
        </div>
    </div>
</div>

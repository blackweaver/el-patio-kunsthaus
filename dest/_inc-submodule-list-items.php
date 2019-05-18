<div class="submodule submodule-list-items filter-box">
    <?php foreach ($items as $key => $value) { ?>
        <div class="item filter-item <?php echo $value["category"] ?>">
            <a href="<?php echo $value["link"]; ?>" class="item-contents item-active-area">
                <div class="item-text">
                    <time class="date"><?php echo $value["date"] ?></time>
                    <h3 class="item-headline"><?php echo $value["text"]; ?></h3>
                </div>
                <div class="item-text item-pdf-link">PDF</div>
            </a>
        </div>
    <?php } ?>
    <?php if($more) { ?>
        <div class="item-bottom-link"><?php include('static/img/icons/icon-cross.svg') ?><a href="#">Mehr anzeigen</a><br></div>
    <?php } ?>
    </div>
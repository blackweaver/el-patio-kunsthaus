<p><?php echo $title ?></p>
<div class="content-sponsors">
<?php foreach ($images as $key => $img) { ?>
    <a href="<?php echo $url ?>"> 
        <figure>
            <img src="<?php echo $img["image"] ?>" alt="<?php echo $img["text"] ?>">
        </figure>
    </a>
<?php } ?>
</div>

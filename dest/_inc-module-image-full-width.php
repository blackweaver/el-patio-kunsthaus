<div class="module module-image-full-width <?php echo $no_limiter ? '' : 'limiter' ?> <?php echo $css; ?>">
    <figure>
        <picture>
            <source media="(min-width: 760px)" srcset="<?php echo $image_landscape ? $image_landscape : '/static/img/image-full-width_16x9.jpg' ?>">
            <img class="lazyload" src="<?php echo $image_square ? $image_square : '/static/img/image-full-width_1x1.jpg' ?>">
        </picture> 
        <figcaption>Voluptate sint sit laboris deserunt sunt id sunt qui occaecat culpa eiusmod.</figcaption>
    </figure>
</div>
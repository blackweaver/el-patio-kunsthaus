<?php if($title) { ?><h4><?php echo $title ?></h4><?php } else { ?><div class="spacer"></div><?php } ?>
<ul class="dropdown-options">
    <?php foreach ($items as $key => $value) { ?>
        <li><a class="dropdown-option <?php if($key === '*') { echo 'active'; } ?>" href="#" data-filter="<?php echo $key ?>"><?php echo $value ?></a></li>
    <?php } ?>
</ul>
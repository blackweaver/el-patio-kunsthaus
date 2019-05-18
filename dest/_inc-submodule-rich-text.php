<!-- SCSS src/styles/sass/modules/_submodule submodule-rich-text.scss -->
<div class="submodule submodule-rich-text">    
    <!-- Sub item -->
    <?php if(!empty($title)) { ?>
        <h4><?php echo $title ?></h4>
    <?php } else { ?>
        <h4>Consectetur voluptate laboris ipsum laboris magna et</h4>
    <?php } ?>

    <?php if(!empty($text)) { ?>
        <?php echo $text ?>
    <?php } else { ?>
        <p>Consequat eiusmod voluptate qui excepteur duis ad reprehenderit eiusmod. Eiusmod sit sint adipisicing eiusmod adipisicing anim. Ullamco ex occaecat proident laboris non eiusmod excepteur proident ad velit. Minim excepteur ullamco veniam Lorem. Esse exercitation exercitation duis cupidatat elit. Eiusmod ea et elit ex. Sit velit eu cillum incididunt ullamco minim sit sit occaecat do commodo duis elit. <a href="#">presse@kunsthaus.ch</a></p>
    <?php } ?>

    <?php if(count($link) > 0) { ?>
        <?php echo $text ?>
        <a href="<?php echo $link["url"] ?>"><?php echo $link["text"] ?></a>
    <?php } else { ?>
        <a href="#">This is a link</a>
    <?php } ?>
    
</div>

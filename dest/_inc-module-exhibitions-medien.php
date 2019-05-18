<div class="module module-whats-new limiter">
<?php if($title) { ?><h2 class="module-title"><?php echo $title ?></h2><?php } ?>
    <div class="cards-grid filter-box">
        <?php
            $title = 'Guillaume Bruère';
            $link = '#';
            $size = 'medium';
            $date = '10.5. – 4.8.';
            $image = 'static/img/exhibitions/exhibition_preview_0.png'; 
            $text = 'Ein obsessiver Zeichner'; 
            $cta_label = 'Mehr zur Ausstellung'; 
            $category = "workshop";
            include('_inc-exhibition-card.php') 
            ?>
        <?php
            $title = 'Matisse – metamorphosen';
            $link = '#';
            $size = 'small';
            $date = '7.6. – 22.9.';
            $image = 'static/img/exhibitions/exhibition_preview_0.png'; 
            $text = 'Kunst zwischen  Resignation und Aufbruch'; 
            $cta_label = 'Mehr zur Ausstellung'; 
            $category = "fuhrung";
            include('_inc-exhibition-card.php') 
            ?>
        <?php 
            $title = 'Guillaume Bruère';
            $link = '#';
            $size = 'big';
            $date = '30.8. – 8.12.';
            $image = 'static/img/exhibitions/exhibition_preview_0.png'; 
            $text = 'Meilenstein in der Skulptur der Moderne';
            $cta_label = 'Mehr zur Ausstellung'; 
            $category = "fuhrung";
            include('_inc-exhibition-card.php');
            ?>            
        <?php 
            $title = 'Guillaume Bruère';
            $link = '#';
            $size = 'big';
            $date = '30.8. – 8.12.';
            $image = 'static/img/exhibitions/exhibition_preview_0.png'; 
            $text = 'Meilenstein in der Skulptur der Moderne';
            $cta_label = 'Mehr zur Ausstellung'; 
            $category = "Lesung";
            include('_inc-exhibition-card.php');
            ?>            
    </div>
</div>
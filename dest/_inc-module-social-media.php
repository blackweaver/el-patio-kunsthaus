<div class="module module-social-media limiter">
    <h2 class="module-title">News aus dem Kunsthaus</h2>
    <div class="cards-grid">
        <?php
            $social = 'facebook'; 
            $image = 'static/img/news-social-links/news_0.png'; 
            $text = 'Anna Nero - Mezzosopran und Judit Polgar - Klavier crashing this wonderful directors‘ speech with music by Kokoschkas composer-friends'; 
            include('_inc-card-social-media.php') 
        ?>
        <?php 
            $social = 'instagram'; 
            $image = 'static/img/news-social-links/news_1.png'; 
            $text = '#oskarkokoschka #art #kunst #retrospective #guerillaclassics'; 
            include('_inc-card-social-media.php');
        ?>
        <?php 
            $social = 'youtube'; 
            $image = 'static/img/news-social-links/news_2.png'; 
            $text = 'Pipilotti Rist is internationally renowned as one of the pioneers of video art. Under the title Your Saliva is my Diving Suit in the Ocean of Pain, the Kunsthaus presents an overview of her work.'; 
            include('_inc-card-social-media.php');
        ?>
    </div>
</div>
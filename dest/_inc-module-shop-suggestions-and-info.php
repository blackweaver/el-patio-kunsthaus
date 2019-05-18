<div class="module module-shop-suggestions theme-lighter-petrol-blue">
    <div class="limiter">
        <h2 class="module-title">Passend dazu im shop</h2>
        <div class="cards-grid">
            <?php
                $price = '25.00'; 
                $image = 'static/img/exhibitions/shop_0.png'; 
                $text = 'Plakat Gefeiert & verspottet, 90x130 cm';
                $info = [];
                include('_inc-card-shop-suggestions.php') 
            ?>
            <?php 
                $price = '55.00'; 
                $image = 'static/img/exhibitions/shop_1.png'; 
                $text = 'Katalog Gefeiert und verspottet 370 Seiten';
                $info = [];
                include('_inc-card-shop-suggestions.php');
            ?>
            <?php 
                $price = ''; 
                $image = '';
                $text = 'Unser Shop hält ein Angebot von über 15.000 Artikeln für Sie bereit. Besuchen Sie uns und Stöbern Sie vor Ort nach dem passenden Geschenk'; 
                $info = [
                    'Öffnungszeiten regulär',
                    'Mo geschlossen',
                    'Di und Fr bis So 10 - 18 Uhr',
                    'Mi und Do 10 - 20 Uhr'
                ];
                include('_inc-card-shop-suggestions.php');
            ?>
        </div>
    </div>
</div>
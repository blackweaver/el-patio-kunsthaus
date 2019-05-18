<div class="module module-teaser limiter">
    <h2 class="module-title">wir empfehlen</h2>
    <div class="cards-grid">
        <?php
            $image = 'static/img/recommended/recommended_0.png'; 
            $text = 'Erfahren Sie in unserer Führung, wie Kokoschka zu seinen Bildideen kam.'; 
            $cta_label = 'ZUR veranstaltung'; 
            include('_inc-card.php') 
        ?>
        <?php 
            $image = 'static/img/recommended/recommended_1.png'; 
            $text = 'Entdecken Sie mit Ihrem Kind und dem Familienführer «Kunstspürnase» unsere Sammlung.'; 
            $cta_label = 'ZUM angebot'; 
            include('_inc-card.php');
        ?>
        <?php 
            $image = 'static/img/recommended/recommended_2.png'; 
            $text = 'Für Menschen mit starker Sehbehinderung bietet das Kunsthaus spezielle Führungen an'; 
            $cta_label = 'ZUM angebot'; 
            include('_inc-card.php');
        ?>            
    </div>
</div>
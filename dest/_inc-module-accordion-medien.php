<!-- SCSS src/styles/sass/modules/_accordion.scss -->

<div class="module module-accordion limiter">
    <h2 class="module-title">good to know</h2>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>Ihr Besuch</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php 
                $title = 'Ihr Besuch im Kunsthaus';
                $text = '<p>Im Rahmen einer redaktionellen Berichterstattung über das Kunsthaus Zürich erhalten Sie gegen Vorlage Ihres gültigen Presseausweises an der Eintrittskasse freien Zugang zum Museum, einen Audioguide sowie aktuelle Presseinformationen. 
                </p>';
                $link = [
                    "text" => 'Kontakt',
                    "url" => 'http://wwww.google.com'
                ];
                include('_inc-submodule-rich-text.php'); 
            ?>
        </div>
    </div>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>Film und Fotoerlaubnis</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php 
                $title = 'Ihr Besuch im Kunsthaus';
                $text = '<p>Im Rahmen einer redaktionellen Berichterstattung über das Kunsthaus Zürich erhalten Sie gegen Vorlage Ihres gültigen Presseausweises an der Eintrittskasse freien Zugang zum Museum, einen Audioguide sowie aktuelle Presseinformationen. 
                </p>';
                $link = [
                    "text" => 'Kontakt',
                    "url" => 'http://wwww.google.com'
                ];
                include('_inc-submodule-rich-text.php'); 
            ?>
        </div>
    </div>

</div>
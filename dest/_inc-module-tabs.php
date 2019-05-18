<!-- SCSS src/styles/sass/modules/_tabs.scss -->

<div class="module module-tabs">
    <ul class="tabs-menu limiter">
        <li class="active"><a href="#">Museum</a></li>
        <li><a href="#">Biblothek</a></li>
        <li><a href="#">Grafische sammlung</a></li>
    </ul>

    <div class="tabs-content-container theme-lighter-petrol-blue">

        <!-- Tab 1 Content -->
        <div class="limiter tab-content active">
        <?php 
            $title = "Öffnungszeiten";
            $column_one = [
                "title" => "Reguläre Öffnungszeiten",
                "content" => "<p>Mo geschlossen<br>
                Di / Fr / Sa / So 10–18 Uhr<br>
                Mi / Do 10–20</p>"
            ];
            
            $column_two = [
                "title" => "Sonderöffnungszeiten",
                "content" => "<p>Mi 1. Mai 2019 10–18 Uhr (Tag der Arbeit)
                Do 30. Mai 2019 10–18 Uhr (Auffahrt)
                Mo 10. Juli 2019 10–18 Uhr (Pfingsten)
                Do 1. August 2019 10–18 Uhr (Nationalfeiertag)
                Mi 25. Dezember 2019 geschlossen (1. Weihnachtsfeiertag)
                Mi 1. Januar 2020 10–18 Uhr (Neujahr)
                Do 2. Januar 2020 10–18 Uhr (Berchtoldstag)</p>"
            ];
            $text_links = [
                [
                    "text" => "LINK 1",
                    "link" => "http://www.google.com"
                ],
                [
                    "text" => "LINK 2",
                    "link" => "http://www.google.com"
                ]
            ];
            include('_inc-module-two-columns-one-third.php'); 
            ?>
        </div>
        
        <!-- Tab 2 Content -->
        <div class="limiter tab-content">
        <?php
            $image_block = 'static/img/museum/museum-image-module.png';
            $headline = 'Malwerkstatt Villa Kun(s)terbunt';
            $alignment = 'left'; // Right
            $background = 'grey'; // White
            $image_width = '1/3'; // 1/2
            $description = 'Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental: in fact, it va esser Occidental.';
            $text_links = [
                [
                    "text" => "PDF",
                    "link" => "http://www.google.com"
                    ],
                    [
                    "text" => "Bilddatenbank",
                    "link" => "http://www.google.com"
                    ],
            ];
            $text_buttons = [];
            include('_inc-module-image-and-rich-text.php');
        ?>
        </div>
        
        <!-- Tab 3 Content -->
        <div class="limiter tab-content">
        <?php 
            $title = "Öffnungszeiten 2";
            $column_one = [
                "title" => "Reguläre Öffnungszeiten",
                "content" => "<p>Mo geschlossen<br>
                Di / Fr / Sa / So 10–18 Uhr<br>
                Mi / Do 10–20</p>"
            ];
            
            $column_two = [
                "title" => "Sonderöffnungszeiten",
                "content" => "<p>Mi 1. Mai 2019 10–18 Uhr (Tag der Arbeit)
                Do 30. Mai 2019 10–18 Uhr (Auffahrt)
                Mo 10. Juli 2019 10–18 Uhr (Pfingsten)
                Do 1. August 2019 10–18 Uhr (Nationalfeiertag)
                Mi 25. Dezember 2019 geschlossen (1. Weihnachtsfeiertag)
                Mi 1. Januar 2020 10–18 Uhr (Neujahr)
                Do 2. Januar 2020 10–18 Uhr (Berchtoldstag)</p>"
            ];
            $text_links = [
                [
                    "text" => "LINK 1",
                    "link" => "http://www.google.com"
                ],
                [
                    "text" => "LINK 2",
                    "link" => "http://www.google.com"
                ]
            ];
            include('_inc-module-two-columns-one-third.php'); 
            ?>
        </div>

    </div>

</div>
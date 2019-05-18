<?php include('_inc-head.php') ?>
<body class="is-not-home template-exhibition-page">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header is-details">
                    <div class="limiter-extended">
                        <div class="breadcrumbs">
                            <a href="#">Besuch planen</a><a href="#">Ausstellungen</a><a href="#">Gefeiert und verspottet</a>   
                        </div>
                        <?php
                            $block_title = '';
                            $date = 'Bis 30.6.2019';
                            $title = 'Gefeiert und verspottet';
                            $description = 'Französische Malerei 1820 - 1880';

                            $css_module = '';
                            $image = 'static/img/exhibitions/header_0.png';
                            $image_description = 'Bildlegende mit Künstler, Titel und Eigentümer, ggf. Datum und Copyright';
                            $image_align = 'left';

                            $text_buttons = [
                                [
                                    "text" => "Ticket bestellen",
                                    "link" => "http://www.google.com"
                                ]
                            ];
                            include('_inc-module-exhibition.php');
                        ?>
                    </div>
            </header>
            
            <!-- Page Content -->
            <main class="page-content">         
                <div class="page">                    
                    <?php
                        $title = '';
                        $text = 'Unsere Ausstellung ist ein Streifzug durch die Geschichte künstlerischer Auseinandersetzung mit dem Mond von der Romantik bis in die Gegenwart. In zehn Kapiteln werden Themen wie Mondtopografie, Mondnacht und -schatten, Mondkrankheiten, Zero G und Medieninszenierung ins Visier genommen.';
                        include('_inc-module-lead-text.php') 
                    ?>
                    <?php
                        $headline = 'Über die Ausstellung';
                        $alignment = 'right';
                        $text = '<p>Unsere Ausstellung ist ein Streifzug durch die Geschichte künstlerischer Auseinandersetzung mit dem Mond von der Romantik bis in die Gegenwart. In zehn Kapiteln werden Themen wie Mondtopografie, Mondnacht und -schatten, Mondkrankheiten, Zero G und Medieninszenierung ins Visier genommen.</p>
                        <p>Mit rund 200 Werken von Darren Almond, Paweł Althamer, René Burri, Johan Christian Dahl, Dubossarsky & Vinogradov, Sylvie Fleury, Liam Gillick, Hannah Höch, Kiki Kogelnik, David Lamelas, Zilla Leutenegger, René Magritte, Jyoti Mistry, John Russell, Andrei Sokolov, Andy Warhol, Nives Widauer</p>
                        <p>In Zusammenarbeit mit dem Deutschen Zentrum für Luft- und Raumfahrt e. V. Die Ausstellung wird anschliessend im Museum der Moderne Salzburg gezeigt.</p>
                        <p>Kuratorin: Cathérine Hug.</p>';
                        $text_box = [
                            [
                                "title" => "Eintritt", 
                                "content" => "((in dieser Spalte können verschiedene Teaser untergebracht werden, etwa Hinweis auf den noch relativ neuen Legi-Abend, auf Kombiticket und RailAway-Kombi)) "
                            ],
                            [
                                "title" => "Audioguide zur Ausstellung", 
                                "content" => "((Wo man ihn erhält und was er kostet, Links zum Download falls Appstore mgl. Hinweis dass Mitglieder ihn umsonst an der Kasse erhalten))"
                                ]
                            ]; 
                        include('_inc-text-box.php') 
                    ?>
                    <?php include('_inc-module-quote-slider.php') ?>
                    <?php include('_inc-module-exhibition-details-text-headline.php') ?>
                    <?php include('_inc-module-image-slider-small.php') ?>
                    <?php include('_inc-module-agenda.php') ?>
                    <?php
                        $headline = 'Über die Ausstellung';
                        $alignment = 'left';
                        $text = '<p>Unsere Ausstellung ist ein Streifzug durch die Geschichte künstlerischer Auseinandersetzung mit dem Mond von der Romantik bis in die Gegenwart. In zehn Kapiteln werden Themen wie Mondtopografie, Mondnacht und -schatten, Mondkrankheiten, Zero G und Medieninszenierung ins Visier genommen.</p>
                        <p>Mit rund 200 Werken von Darren Almond, Paweł Althamer, René Burri, Johan Christian Dahl, Dubossarsky & Vinogradov, Sylvie Fleury, Liam Gillick, Hannah Höch, Kiki Kogelnik, David Lamelas, Zilla Leutenegger, René Magritte, Jyoti Mistry, John Russell, Andrei Sokolov, Andy Warhol, Nives Widauer</p>
                        <p>In Zusammenarbeit mit dem Deutschen Zentrum für Luft- und Raumfahrt e. V. Die Ausstellung wird anschliessend im Museum der Moderne Salzburg gezeigt.</p>
                        <p>Kuratorin: Cathérine Hug.</p>';
                        $text_box = [
                            [
                                "title" => "Eintritt", 
                                "content" => "((in dieser Spalte können verschiedene Teaser untergebracht werden, etwa Hinweis auf den noch relativ neuen Legi-Abend, auf Kombiticket und RailAway-Kombi)) "
                            ],
                            [
                                "title" => "Audioguide zur Ausstellung", 
                                "content" => "((Wo man ihn erhält und was er kostet, Links zum Download falls Appstore mgl. Hinweis dass Mitglieder ihn umsonst an der Kasse erhalten))"
                                ]
                            ]; 
                            include('_inc-text-box.php') 
                        ?>
                    <?php include('_inc-module-shop-suggestions-and-info.php') ?>
                    <?php include('_inc-module-sponsors.php') ?>
                    <?php include('_inc-module-related-teaser.php') ?>
                </div>
            </main>

            <!-- Page Content -->
            <!-- <footer class="page-footer"></footer> -->    
        </article>
       
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
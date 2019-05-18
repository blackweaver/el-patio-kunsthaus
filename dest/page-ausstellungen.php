<?php include('_inc-head.php') ?>
<body class="is-not-home template-exhibition-index-page">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page h-event">
            <!-- Page Header -->
            <header class="page-header"> 
                    <h1 class="h1 limiter">AUSSTELLUNGEN </h1>
                    <div class="limiter-extended">
                        <h3 class="limiter">Aktuell</h3>
                        <?php
                            $block_title = '';
                            $date = 'Bis 30.6.2019';
                            $title = 'Gefeiert und verspottet';
                            $description = 'Französische Malerei 1820 - 1880';
                            $exhibition_size = 'is-big';
                            // $aspect_ratio = 'desktop-aspect-ratio-1-1';
                            // $aspect_ratio = 'desktop-aspect-ratio-4-3';
                            $image = 'static/img/exhibitions/header_0.png';
                            $image_description = 'Bildlegende mit Künstler, Titel und Eigentümer, ggf. Datum und Copyright';
                            $image_align = '';
                            
                            $text_buttons = [
                                [
                                    "text" => "Mehr zur Ausstellung",
                                    "link" => "http://www.google.com"
                                    ]
                                ];
                                include('_inc-module-exhibition.php');
                        ?>
                        <?php
                            $block_title = '';
                            $date = 'Bis 30.6.2019';
                            $title = 'Gefeiert und verspottet';
                            $description = 'Französische Malerei 1820 - 1880';
                            $exhibition_size = 'is-big';
                            // $aspect_ratio = 'desktop-aspect-ratio-1-1';
                            // $aspect_ratio = 'desktop-aspect-ratio-4-3';
                            $image = 'static/img/exhibitions/portrait_1.png';
                            $image_description = 'Bildlegende mit Künstler, Titel und Eigentümer, ggf. Datum und Copyright';
                            $image_align = '';

                            $text_buttons = [
                                [
                                    "text" => "Mehr zur Ausstellung",
                                    "link" => "http://www.google.com"
                                    ]
                            ];
                            include('_inc-module-exhibition.php');
                        ?>
                        <?php
                            $block_title = '';
                            $date = 'Bis 30.6.2019';
                            $title = 'Gefeiert und verspottet';
                            $description = 'Französische Malerei 1820 - 1880';
                            $exhibition_size = 'is-big';
                            // $aspect_ratio = 'desktop-aspect-ratio-1-1';
                            // $aspect_ratio = 'desktop-aspect-ratio-4-3';
                            $image = 'static/img/exhibitions/landscape_2.png';
                            $image_description = 'Bildlegende mit Künstler, Titel und Eigentümer, ggf. Datum und Copyright';
                            $image_align = '';
                            
                            $text_buttons = [
                                [
                                    "text" => "Mehr zur Ausstellung",
                                    "link" => "http://www.google.com"
                                    ]
                                ];
                                include('_inc-module-exhibition.php');
                        ?>
                        <?php
                            $block_title = 'In der Sammlung';
                            $date = 'Bis 30.6.2019';
                            $title = 'installationen III';
                            $description = 'Das Kunsthaus zeigt selten oder nie ausgestellte grossformatigen Installationen von Phyllida Barlow, Mark Boyle, Dennis Oppenheim.';
                        
                            $exhibition_size = '';
                            // $aspect_ratio = 'desktop-aspect-ratio-1-1';
                            // $aspect_ratio = 'desktop-aspect-ratio-4-3';
                            $image = 'static/img/exhibitions/portrait_2.png';
                            $image_description = 'Bildlegende mit Künstler, Titel und Eigentümer, ggf. Datum und Copyright';
                            $image_align = '';

                            $text_buttons = [
                                [
                                    "text" => "Mehr zur Ausstellung",
                                    "link" => "http://www.google.com"
                                    ]
                            ];
                            include('_inc-module-exhibition.php');
                        ?>
                        <?php
                            $block_title = '';
                            $date = 'Bis 30.6.2019';
                            $title = 'installationen III';
                            $description = 'Das Kunsthaus zeigt selten oder nie ausgestellte grossformatigen Installationen von Phyllida Barlow, Mark Boyle, Dennis Oppenheim.';
                        
                            $exhibition_size = '';
                            // $aspect_ratio = 'desktop-aspect-ratio-1-1';
                            // $aspect_ratio = 'desktop-aspect-ratio-4-3';
                            $image = 'static/img/exhibitions/portrait_3.png';
                            $image_description = 'Bildlegende mit Künstler, Titel und Eigentümer, ggf. Datum und Copyright';
                            $image_align = '';

                            $text_buttons = [
                                [
                                    "text" => "Mehr zur Ausstellung",
                                    "link" => "http://www.google.com"
                                    ]
                            ];
                            include('_inc-module-exhibition.php');
                        ?>
                    </div>
            </header>
            
            <!-- Page Content -->
            <main class="page-content">         
                <div class="page-content-wrapper theme-lighter-petrol-blue">
                    <?php include('_inc-section-two-module-image-and-rich-text.php') ?>
                </div>
                <?php include('_inc-module-exhibitions-next.php') ?>
                <?php include('_inc-module-exhibition-archive.php') ?>
                <?php include('_inc-module-related-teaser.php') ?>
            </main>

            <!-- Page Content -->
            <!-- <footer class="page-footer"></footer> -->    
        </article>
       
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
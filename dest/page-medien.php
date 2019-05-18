<?php include('_inc-head.php') ?>
<body class="is-not-home medien-page">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header">
                <h1 class="h1 limiter">Medien</h1>
                <?php include('_inc-menu-medien.php') ?>
            </header>
            
            <!-- Page Content -->
            <main class="page-content">         
                <div class="theme-lighter-petrol-blue">
                    <?php
                        $text = 'Herzlich Willkommen im Pressebereich. Hier finden Sie die aktuellsten Informationen für Ihre Berichterstattung. Medienmitteilungen und Bildmaterial zu Ausstellungen, Sammlung und Projekten des Kunsthauses können Sie bequem online herunterladen. Für zusätzliche Auskünfte oder Interviewanfragen, wenden Sie sich gerne persönlich an uns.';
                        include('_inc-module-lead-text.php') 
                    ?>
                    <?php 
                        $title = "vorschau";
                        include('_inc-module-exhibitions-medien.php'); 
                    ?>
                </div>
                <?php 
                    $title = "Weitere Fragen oder Auskünfte? ";
                    $common = true;
                    include('_inc-module-two-columns.php'); 
                ?> 
                <?php include('_inc-section-two-module-image-and-rich-text.php'); ?>
                <?php include('_inc-module-media-distributor-form.php'); ?>
                <?php 
                    $title = "Termine Medienkonferenzen";
                    include('_inc-module-two-columns-medien.php');
                ?> 
                <?php include('_inc-module-accordion-medien.php') ?>
                <?php include('_inc-module-related-teaser.php') ?>
            </main>

            <!-- Page Content -->
        </article>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
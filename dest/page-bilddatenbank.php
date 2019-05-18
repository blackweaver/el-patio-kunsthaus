<?php include('_inc-head.php') ?>
<body class="is-not-home medien-page bilddatenbank reset-bottom-pading">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header limiter">
                <h1 class="h1">Medien</h1>
                <?php include('_inc-menu-medien.php') ?>
            </header>
            
            <!-- Page Content -->
            <main class="page-content theme-lighter-petrol-blue">         
                <?php
                    $title = 'Copyright';
                    $text = 'Achtung der Text ist kopiert von Fondation Beyeler, bitte umtexten. Das Bildmaterial darf nur zu Pressezwecken im Rahmen der aktuellen Berichterstattung verwendet werden. Die Reproduktion ist nur im Zusammenhang mit der laufenden Ausstellung und während deren Dauer erlaubt. Jede weitergehende Verwendung – in analoger und in digitaler Form – bedarf einer Genehmigung durch die Rechtsinhaber. Ausgenommen davon ist der rein private Gebrauch. 

                    Bitte verwenden Sie die Bildlegenden und die dazugehörenden Copyrights. Mit freundlicher Bitte um Zusendung eines Belegexemplars.
                    Die Fondation Beyeler lehnt jede Verantwortung für anfallende Gebühren an ProLitteris, VG-Bildkunst, ADAGP, DACS, ARS, Cosmopress und vergleichbare internationale Institutionen, die bei Verwendung von Bild- und Filmmaterial entstehen, ab. Loggen Sie sich bitte ein um Bilder herunterzuladen.';
                    include('_inc-module-lead-text.php') 
                ?>
                <div class="module limiter">
                    <div class="filters limiter">
                        <div class="filter-content">
                            <span class="filter-title">medienbilder</span>
                            <span class="filter-selected modal-filter" data-modal="modal-image-databank" data-target="angebotDropdown">
                                <span class="filter-selected-title">Alle</span>
                                <i class="filter-title-underline-arrow"></i>
                            </span>
                            <?php 
                                $type = 'modal-image-databank';
                                $title = '';
                                include("_inc-module-general-modal.php");
                            ?>
                        </div>
                    </div>
                <?php 
                    $title = '';
                    include('_inc-module-exhibitions-medien.php');
                    ?>
                </div>
            </main>

            <!-- Page Content -->  
        </article>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
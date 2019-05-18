<?php include('_inc-head.php') ?>
<body class="is-not-home">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">
        <!-- Page -->
        <section class="page page-angebot">
            <!-- Page Header -->
            <header class="page-header">
                <div class="limiter">
                    <h1 class="page-title">Angebot</h1>

                    
                    <span class="header-filter filter-trigger" data-modal="modal-angebot" data-target="angebotDropdown">
                        <img src="static/img/filter-icon.svg" title="Filters" />
                    </span>
                    <div class="filters">
                        <div class="filter-content">
                            <span class="filter-title">UNSERE ANGEBOTE FÜR</span>
                            <span class="filter-selected modal-filter" data-modal="modal-angebot" data-target="angebotDropdown">
                                <span class="filter-selected-title">Alle</span>
                                <i class="filter-title-underline-arrow"></i>
                            </span>
                            <?php 
                                $type = 'modal-angebot';
                                $title = '';
                                include("_inc-module-general-modal.php");
                            ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /Page Header -->

            <!-- Page Content -->
            <main class="page-content">
                <div class="limiter">
                    <div id="grid" class="angebot-grid grid-default">
                        <?php
                            for ($i=0; $i < 40; $i++) {
                                if ($i==0) {
                                    $aspect_ratio = 'offer-is-featured';
                                } else {
                                    $aspect_ratio = '';
                                }
                                $categories = array(
                                    "workshop",
                                    "fuhrung",
                                    "lesung",
                                    "veranstaltung",
                                    "gesprach"
                                );
                                $categoryClass = $categories[array_rand($categories)];
                                $category = 'Führung / für erwachsene';
                                $image = 'static/img/news-social-links/news_2.png';
                                $text = $i . 'Öffentliche Führungen';
                                include('_inc-card-offer.php');
                            }
                        ?>
                    </div>
                </div>
            </main>
            <!-- /Page Content -->
        </section>

        <!-- Aside Content-->
        <aside class="limiter">
            <?php include('_inc-module-teaser.php') ?>
        </aside>
        <!-- /Aside Content -->
        <!-- /Page -->
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>

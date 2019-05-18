<?php include('_inc-head.php') ?>
<body class="is-not-home medien-page medienmitteilungen">
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
            <main class="page-content">         
                <div class="theme-lighter-petrol-blue">
                    <div class="module limiter">
                    <?php 
                        $items = [
                            "*" => "Alle",
                            "kunsthaus" => "Kunsthaus",
                            "fuhrung" => "Führung",
                            "lesung" => "Lesung",
                            "veranstaltung" => "Veranstaltung",
                            "gesprach" => "Gespräch"
                        ];
                        include('_inc-module-filters-medien.php')
                    ?>
                    <?php 
                        $more = true;
                        $items = [
                            [
                                "date" => "18.12.2018",
                                "text" => "Kunsthaus Zürich zeigt «Fly me to the Moon. 50 Jahre Mondlandung»! H4",
                                "link" => "http://www.google.com",
                                "category" => "kunsthaus"
                            ],
                            [
                                "date" => "18.12.2018",
                                "text" => "Kunsthaus Zürich zeigt «Fly me to the Moon. 50 Jahre Mondlandung»! H4",
                                "link" => "http://www.google.com",
                                "category" => "fuhrung"
                            ],
                            [
                                "date" => "18.12.2018",
                                "text" => "Kunsthaus Zürich zeigt «Fly me to the Moon. 50 Jahre Mondlandung»! H4",
                                "link" => "http://www.google.com",
                                "category" => "lesung"
                            ],
                            [
                                "date" => "18.12.2018",
                                "text" => "Kunsthaus Zürich zeigt «Fly me to the Moon. 50 Jahre Mondlandung»! H4",
                                "link" => "http://www.google.com",
                                "category" => "veranstaltung"
                            ],
                            [
                                "date" => "18.12.2018",
                                "text" => "Kunsthaus Zürich zeigt «Fly me to the Moon. 50 Jahre Mondlandung»! H4",
                                "link" => "http://www.google.com",
                                "category" => "gesprach"
                            ],
                            [
                                "date" => "18.12.2018",
                                "text" => "Kunsthaus Zürich zeigt «Fly me to the Moon. 50 Jahre Mondlandung»! H4",
                                "link" => "http://www.google.com",
                                "category" => "veranstaltung"
                            ]
                        ];
                        include('_inc-submodule-list-items.php') 
                    ?>
                    </div>
                </div>
                <?php include('_inc-module-accordion-archive.php') ?>
            </main>

            <!-- Page Content -->  
        </article>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
<?php include('_inc-head.php') ?>
<body class="is-not-home uber-page">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header limiter">
                <h1 class="h1">Über uns</h1>
                <h2 class="h2-med p-name">Eine dynamische Institution seit 1787</h2>

                <div class="module module-lead-text">
                    <div class="module-content">
                        <p class="lead-text">Seit 1787 wird das erste kombinierte Sammlungs- und Ausstellungsinstitut der Schweiz von einem heute mehr als 19'000 Mitglieder zählenden Kunstverein getragen - der Zürcher Kunstgesellschaft. ((Teil1 aus Organisation als Leadtext nehmen)</p>
                    </div>
                </div>

                <?php 
                    $css = 'page-thumbnail';
                    $image_landscape = '/static/img/museum/museum-image_16x9.jpg';
                    $image_square = '/static/img/museum/museum-image_1x1.jpg';
                    include('_inc-module-image-full-width.php')
                ?>   
            </header>
            
            <!-- Page Content -->
            <main class="page-content">         
                <div class="page">
                    <? include('_inc-section-two-module-image-and-rich-text.php') ?>
                </div>
            </main>

            <!-- Page Content -->
            <!-- <footer class="page-footer"></footer> -->    
        </article>
       
        <!-- Aside Content-->
        <aside class="limiter">
            <?php include('_inc-module-teaser.php') ?>            
        </aside>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
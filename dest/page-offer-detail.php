<?php include('_inc-head.php') ?>
<body class="is-not-home offer-page">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content limiter" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header">
                <div class="breadcrumbs">
                    <a href="#">Angebote</a><a href="#">Offer Title</a>
                </div>
                <h1 class="h1-med">Kinderclub 3Plus</h1>
           
                <?php 
                    $css = 'page-thumbnail';
                    $image_landscape = '/static/img/event/event-thumbnail_16x9.jpg';
                    $image_square = '/static/img/event/event-thumbnail_1x1.jpg';
                    include('_inc-module-image-full-width.php')
                ?>                
            </header>
            
            <!-- Page Content -->
            <main class="page-content">         
                <div class="page">
                    <?php include('_inc-module-highlighted-box.php') ?>
                </div>
            </main>

            <!-- Page Content -->
            <!-- <footer class="page-footer"></footer> -->    
        </article>

        <!-- Sponsors -->
        <?php include('_inc-module-sponsors.php') ?>
       
        <!-- Aside Content-->
        <aside>
            <?php include('_inc-module-teaser.php') ?>            
        </aside>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
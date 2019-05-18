<?php include('_inc-head.php') ?>
<body class="is-not-home page-search">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header limiter">
            <?php include('_inc-module-search-form.php') ?> 
            </header>
            
            <!-- Page Content -->
            <main class="page-content limiter">         
                <?php include('_inc-module-search.php') ?>   
            </main>
            <?php include('_inc-module-pagination.php') ?>

            <!-- Page Content -->
        </article>
       
        <!-- Aside Content-->

    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
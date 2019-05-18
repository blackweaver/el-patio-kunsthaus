<?php include('_inc-head.php') ?>
<body class="is-not-home kitchen-sink">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">
        
        <!-- Page -->
        <section class="page">    
            <!-- Page Header -->
            <header class="page-header limiter">
                <h1 class="page-title">Kitchen Sink</h1>
            </header>            

            <!-- Page Content -->
            <main class="page-content">

                <article>
                    <h2 class="limiter module">Module / Related Exhibition</h2>
                    <?php include('_inc-module-related-exhibition.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Buttons links</h2>
                    <div class="limiter">
                        <a href="#" class="button button-wired">Home button</a>
                        <br>
                        <div class="button-petrol"><button class="button">Petrol button</button></div>
                        <br>
                        <div class="button-golden"><button class="button">Golden button</button></div>
                        <br>
                        <div class="button-wired-gray"><button class="button">Exhibition button</button></div>
                    </div>
                </article>
                
                <article>
                    <h2 class="limiter module">Module / lightboxes</h2>
                    <div class="limiter">
                        <a href="#" data-modal="modal-sharing">OPEN SHARING LIGHTBOX</a>
                        <?php 
                            $type = 'modal-sharing';
                            include("_inc-module-general-modal.php");
                        ?>
                        <br>
                        <a href="#" data-modal="modal-filter-one">OPEN FILTER LIGHTBOX (ONE)</a>
                        <?php 
                            $type = 'modal-filter-one';
                            include("_inc-module-general-modal.php");
                        ?>
                        <br>
                        <a href="#" data-modal="modal-filter-two">OPEN FILTER LIGHTBOX (TWO)</a>
                        <?php 
                            $type = 'modal-filter-two';
                            include("_inc-module-general-modal.php");
                        ?>    
                    </div>       
                </article>

                <article>
                    <h2 class="limiter module">Module / Media Distributor Form</h2>
                    <?php include('_inc-module-media-distributor-form.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Tab Module</h2>
                    <?php include('_inc-module-tabs.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Icons Grid</h2>
                    <?php include('_inc-module-icon-grid.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Shop Suggestions & Info</h2>
                    <?php include('_inc-module-shop-suggestions-and-info.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Two Columns</h2>
                    <?php include('_inc-module-two-columns.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Two Columns (expandable enabled)</h2>
                    <?php 
                        $is_expandable=true;
                        include('_inc-module-two-columns.php'); ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Three Columns</h2>
                    <?php include('_inc-module-three-columns.php') ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Image Full Width</h2>
                    <?php include('_inc-module-image-full-width.php') ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Video Embed</h2>
                    <?php include('_inc-module-video-embed.php') ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Google Map Embed </h2>
                    <?php include('_inc-module-google-map-embed.php'); ?>
                </article>

                <article>
                    <h2 class="limiter module">Module / Quote Slider</h2>
                    <?php include('_inc-module-quote-slider.php') ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Accordion</h2>
                    <?php include('_inc-module-accordion.php') ?>            
                </article>                

                <article>
                    <h2 class="limiter module">Module / Image Slider Big</h2>
                    <?php include('_inc-module-image-slider-big.php') ?>            
                </article>
                
                <article>
                    <h2 class="limiter module">Module / Image Slider Small</h2>
                    <?php 
                        $show_title = true;
                        include('_inc-module-image-slider-small.php');
                        ?>            
                </article>
                
                <article>
                    <h2 class="limiter module">Module / Image Slider Small (dark backgorund)</h2>
                    <?php
                        $show_title = false;
                        $theme='theme-dark';
                        include('_inc-module-image-slider-small.php');
                    ?>            
                </article>

                <article>
                    <h2 class="limiter module">Module / Agenda Excerpt</h2>
                    <?php include('_inc-module-agenda.php'); ?>
                </article>
                
                <article>
                    <h2 class="limiter module">Module / Social Media</h2>
                    <?php include('_inc-module-social-media.php'); ?>
                </article>
                
                <article>
                    <h2 class="limiter module">Module / Recommended</h2>
                    <?php include('_inc-module-teaser.php'); ?>
                </article>
                     
                <article>
                    <h2 class="limiter module">Module / Sponsors</h2>
                    <?php include('_inc-module-sponsors.php'); ?>
                </article>
                     
                <article>
                    <h2 class="limiter module">Module / Text and Teaser</h2>
                    <?php include('_inc-module-highlighted-box.php'); ?>
                </article>
                     
                <article>
                    <h2 class="limiter module">Module / Image and Rich Text (3 x stack)</h2>
                    <?php 
                        $qty = 3;
                        include('_inc-section-two-module-image-and-rich-text.php'); 
                    ?>
                    <h2 class="limiter module">Module / Image and Rich Text</h3>
                    <?php 
                        $qty = 1;
                        include('_inc-section-two-module-image-and-rich-text.php'); 
                    ?>
                </article>
                     
                <article>
                    <h2 class="limiter module">Module / Next Exhibitions </h2>
                    <?php include('_inc-module-exhibitions-next.php'); ?>
                </article>
                     
            </main>            

        </section>       
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>

<!-- 
    Event Micro Format    
    http://microformats.org/wiki/h-event
-->

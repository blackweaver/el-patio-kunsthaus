<!-- SCSS src/styles/sass/modules/_accordion.scss -->

<div class="module module-accordion limiter">
    <h2 class="module-title">Nice Accordion Title</h2>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>Best Tickets</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php include('_inc-submodule-prices.php'); ?>
        </div>
    </div>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>Great Text</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php include('_inc-submodule-rich-text.php'); ?>
        </div>
    </div>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>Nice Image & Text</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php include('_inc-submodule-image-title-and-text.php'); ?>
        </div>
    </div>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>2018</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php include('_inc-submodule-exhibition-archive.php'); ?>
        </div>
    </div>
    
    <!-- Item -->
    <div class="accordion-item">
        <h3 class="accordion-item-title"><span>2017</span><?php include('static/img/exhibitions/icon-arrow-archive.svg') ?></h3>
        <div class="accordion-item-content">
            <?php include('_inc-submodule-exhibition-archive.php'); ?>
        </div>
    </div>

</div>
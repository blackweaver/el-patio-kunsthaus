<?php include('_inc-head.php') ?>
<body class="is-not-home event-page">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page h-event">
            <!-- Page Header -->
            <header class="page-header limiter">
                <div class="breadcrumbs">
                    <a href="#">Agenda Test</a><a href="#">Event Title</a>   
                </div>
                <h1 class="page-title h1-med">Event Title</h1>
                
                <?php 
                    $css = 'page-thumbnail';
                    $no_limiter = 'true';
                    $image_landscape = '/static/img/event/event-thumbnail_16x9.jpg';
                    $image_square = '/static/img/event/event-thumbnail_1x1.jpg';
                    include('_inc-module-image-full-width.php')
                ?>                
            </header>
            
            <!-- Page Content -->
            <main class="page-content">         
                <div id="event86" class="page h-event event-container">
                    <div class="limiter">
                        <div>
                            <time class="event-moment-info p-date" datetime="">
                                <span class="event-day">DO</span>
                                <span class="event-date">9.12.</span>
                                <span class="event-start-and-duration event-duration"><span class="start-time dt-start">14:30</span><span class="time-divider">/</span><span class="dt-duration">1h</span></span>
                            </time>

                            <div class="event-description">
                                <span class="event-notice">nur noch wenige Plätze</span>
                                <div class="event-type-mobile p-category">Führung</div>
                                <h2 class="event-title p-name">Malwerkstatt Villa Kun(s)terbunt</h2>
                                <div class="event-short-description-container">
                                        <span class="event-short-description p-sumamry">Für Kinder im Alter von 3 bis 6 Jahren in Begleitung.</span>
                                </div>
                            </div>
                            <div class="event-type p-category">WORKSHOP</div>
                        </div>
                        <div class="event-long-description-container">
                            <div class="module module-image-and-rich-text">
                                <div class="module-content image-one-third is-reverse">        
                                    <figure class="module-image">
                                        <img alt="" src="static/img/event/event-image.png">
                                    </figure>
                                    <div class="module-text">
                                        <p>Im Kunsthaus gibt es für kleine Leute viel zu sehen: Erstens die Museumsmaus Pieps, dann Blumen und Berge,
                                            Gletscher und Meere, Menschen und Tiere, Dörfer und Städte, Kutschen und Schiffe. Und nicht zuletzt: bunte
                                            Formen aller Art und mehr Farben als der Regenbogen hat. Jeden Freitagmorgen erforschst du ein anderes
                                            Kunstwerk mit allen Sinnen, danach malst oder gestaltest du im riesigen Atelier mit unterschiedlichen
                                            Farben, Materialien und Werkzeugen. Manchmal sogar mit den Händen und Füssen!</p>
                                        <p>Bitte Znüni mitbringen und Arbeitskleider anziehen – es wird bunt.</p>
                                        <p>Im Kunsthaus gibt es für kleine Leute viel zu sehen: Erstens die Museumsmaus Pieps, dann Blumen und Berge,
                                            Gletscher und Meere, Menschen und Tiere, Dörfer und Städte, Kutschen und Schiffe. Und nicht zuletzt: bunte
                                            Formen aller Art und mehr Farben als der Regenbogen hat. Jeden Freitagmorgen erforschst du ein anderes
                                            Kunstwerk mit allen Sinnen, danach malst oder gestaltest du im riesigen Atelier mit unterschiedlichen
                                            Farben, Materialien und Werkzeugen. Manchmal sogar mit den Händen und Füssen!</p>
                                        <ul>
                                            <li>Treffpunkt: Kunsthaus, Kunstvermittlung EG</li>
                                            <li>Für Kinder von 3 bis 6 in Begleitung</li>
                                            <li>Kinder lernen spielerisch malen</li>
                                            <li>Immer Freitags 10 –11.30 Uhr</li>
                                            <li>CHF 18.– pro Morgen</li>
                                        </ul>                                        
                                    </div>
                                </div>
                                <div class="event-links">
                                    <div class="pack-buttons">
                                        <div class="button-petrol"><a href="page-event-registration.php" class="button">Anmelden</a></div>
                                        <a title="Add to Calendar" class="text-link addeventatc" data-styling="none">
                                            TERMIN MERKEN
                                            <span class="addeventatc_icon"></span>
                                            <span class="start">06/18/2015 09:00 AM</span>
                                            <span class="end">06/18/2015 11:00 AM</span>
                                            <span class="timezone">Europe/Paris</span>
                                            <span class="title">Summary of the event</span>
                                            <span class="description">Description of the event</span>
                                            <span class="location">Location of the event</span>
                                            <span class="organizer">Organizer</span>
                                            <span class="organizer_email">Organizer e-mail</span>
                                        </a>                                        
                                        <!-- <a href="#" class="text-link calendar-book-event">TERMIN MERKEN</a> -->
                                        <a href="#" class="text-link modal-sharing">TEILEN</a>
                                        <?php 
                                            $type = 'sharing';
                                            include("_inc-module-general-modal.php");
                                        ?>
                                    </div>

                                    <div class="event-dates-container"><span>Weitere Veranstaltungen dieser Reihe:</span>
                                        <ul>
                                            <li><a href="#">Mi. 23.01</a><span>&nbsp;/&nbsp;</span></li>
                                            <li><a href="#">Mi. 23.01</a><span>&nbsp;/&nbsp;</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Page Content -->
            <!-- <footer class="page-footer"></footer> -->    
        </article>
       
        <!-- Aside Content-->
        <aside>
            <?php include('_inc-module-teaser.php') ?>            
        </aside>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
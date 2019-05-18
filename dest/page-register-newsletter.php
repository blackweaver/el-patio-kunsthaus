<?php include('_inc-head.php') ?>
<body class="is-not-home formulare">
    <?php include('_inc-header.php') ?>
    <main id="main-content" class="site-content" role="main">

        <!-- Page -->
        <article class="page">
            <!-- Page Header -->
            <header class="page-header limiter">
                <div class="breadcrumbs">
                    <a href="#">Medien</a><a href="page-medien.php">Agenda</a><a href="#">Anmeldung Medienverteiler</a>
                </div>
                <h1 class="page-title h1-med">Anmeldung Medienverteiler</h1>            
            </header>
            
            <!-- Page Content -->
            <main class="page-content">
                <?php
                    $title = '';
                    $text = 'Unsere Ausstellung ist ein Streifzug durch die Geschichte künstlerischer Auseinandersetzung mit dem Mond von der Romantik bis in die Gegenwart. In zehn Kapiteln werden Themen wie Mondtopografie, Mondnacht und -schatten, Mondkrankheiten, Zero G und Medieninszenierung ins Visier genommen.';
                    include('_inc-module-lead-text.php') 
                ?>
                <div class="page">
                    <div class="limiter">
                        <form class="form register" method="post" action="">
                            <fieldset>
                                <legend class="h3 first">Kontakt</legend>
                                <div class="grid-form">
                                    <div class="field required">
                                        <label>Anrede</label>
                                        <select name="header" class="custom-select" required>
                                            <option value="1" selected>Mr.</option>
                                            <option value="2">Ms.</option>
                                        </select>
                                        <p class="error-message"></p>
                                    </div>
                                </div>
 
                                <div class="grid-form">
                                    <div class="field required">
                                        <label>Vorname</label>
                                        <input type="text" name="first-name-1" placeholder="Regula I" required>
                                        <p class="error-message"></p>
                                    </div>
                                    <div class="field required">
                                        <label>Name</label>
                                        <input type="text" name="last-name-1" placeholder="Hugentobler |" required>
                                        <p class="error-message"></p>
                                    </div>
                                </div>
                                <div class="grid-form">
                                    <div class="field required">
                                        <label>E-mail</label>
                                        <input type="email" placeholder="E-Mail" required>
                                        <p class="error-message"></p>
                                    </div>
                                </div>

                            </fieldset>

                            <fieldset>
                                <div class="grid-form">
                                    <div>
                                    <legend class="h3">Medium *</legend>
                                        <div class="field boxes-checkboxs multiple-list required is-valid">
                                            <div class="multiple-list-title" ><span>Medium *</span></div>
                                            <ul class="multiple-list-content">
                                                <li><input type="checkbox" name="medium[]" value="zeitung">Zeitung</option>
                                                <li><input type="checkbox" name="medium[]" value="magazin">Magazin</li>
                                                <li><input type="checkbox" name="medium[]" value="online-medium">Online-Medium</li>
                                                <li><input type="checkbox" name="medium[]" value="blog">Blog</li>
                                                <li><input type="checkbox" name="medium[]" value="tv">TV</li>
                                                <li><input type="checkbox" name="medium[]" value="radio">Radio</li>
                                                <li><input type="checkbox" name="medium[]" value="freischaffend">Freischaffend</li>
                                                <li><input type="checkbox" name="medium[]" value="agentur">Agentur</li>
                                            </ul>
                                            <p class="error-message">This field is required.</p>
                                        </div>

                                        <div class="field required">
                                            <label>Vorname</label>
                                            <input type="text" name="first-name-2" placeholder="Regula I" required>
                                            <p class="error-message"></p>
                                        </div>
                                    
                                        <div class="field required">
                                            <label>Name</label>
                                            <input type="text" name="last-name-2" placeholder="Hugentobler |" required>
                                            <p class="error-message"></p>
                                        </div>
                                    </div>
                                    <div>
                                        <legend class="h3 margin-top">Erscheinungsweise *</legend>
                                        <div class="field boxes-checkboxs multiple-list required is-valid">
                                            <div class="multiple-list-title"><span>Erscheinungsweise *</span></div>
                                            <ul class="multiple-list-content">
                                                <li><input type="checkbox" name="published[]" value="taglich">Täglich</option>
                                                <li><input type="checkbox" name="published[]" value="wochentlich">Wöchentlich</li>
                                                <li><input type="checkbox" name="published[]" value="monatlich">monatlich</li>
                                                <li><input type="checkbox" name="published[]" value="quartalsweise">Quartalsweise</li>
                                                <li><input type="checkbox" name="published[]" value="halbjahrlich">Halbjährlich</li>
                                                <li><input type="checkbox" name="published[]" value="radio">Radio</li>
                                                <li><input type="checkbox" name="published[]" value="freischaffend">Freischaffend</li>
                                                <li><input type="checkbox" name="published[]" value="agentur">Agentur</li>
                                            </ul>
                                            <p class="error-message">This field is required.</p>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend class="h3">Sprache *</legend>
                                <div class="field boxes-checkboxs simple-list required is-valid">
                                    <ul>
                                        <li><input type="checkbox" name="language[]" value="deutsch">Deutsch</option>
                                        <li><input type="checkbox" name="language[]" value="englisch">Englisch</li>
                                        <li><input type="checkbox" name="language[]" value="französisch">Französisch</li>
                                        <li><input type="checkbox" name="language[]" value="italienisch">Italienisch</li>
                                    </ul>
                                    <p class="error-message">This field is required.</p>
                                </div>
                            </fieldset>

                            <fieldset class="textarea">
                                <legend class="h3">Anmerkungen</legend>
                                <div class="field">
                                    <textarea name="notes" id="" cols="50" rows="10" placeholder="Hier können Sie ihre Anmerkungen eingeben"></textarea>
                                    <br>
                                    <small>140 characters</small>
                                </div>
                            </fieldset>

                            <fieldset>
                                <p>Mit dem Verschicken dieses Formulars akzeptiere ich die <a href="#">Datenschutzbestimmungen</a> des Kunsthauses Zürich * = Pflichtfelder</p>
                            </fieldset>

                            <fieldset class="form-captcha">
                               <em>Captcha here (create with a google account)</em>
                            </fieldset>
<<<<<<< HEAD
<<<<<<< HEAD
                            <div class="button-petrol"><button class="button" type="submit" value="validate">Senden</button></div>
=======
                            <button class="button button-petrol button-send" type="submit" value="validate">Senden</button>
>>>>>>> 6f2e8a51b1746f2c4f3d325a864de41dea682040
=======
                            <div class="button-petrol"><button class="button button-send" type="submit" value="validate">Senden</button></div>
>>>>>>> 2e938ae3... Adjust Buttons globally (button petrol)

                        </form>
                    </div>
                </div>
                </div>
            </main>
        </article>
    </main>
    <?php include('_inc-footer.php') ?>
    <?php include('_inc-js.php') ?>
</body>
</html>
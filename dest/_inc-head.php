<!doctype html>
<html class="no-js" lang="de-CH">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kunsthaus</title>
    
    <!-- Pre render to have some handy classes available, this has to go inline in html -->
    <script src="static/js/pre-render.js"></script>
    <script type="text/javascript">
      window.debug=true;
    </script>

    <script>
        window.kunsthaus = {};
        window.kunsthaus.currentLang = '';
  
        // Conf Agenda
        window.kunsthaus.agenda = {};
        // window.kunsthaus.agenda.loadAll = true;

        // Conf API
        // window.kunsthaus.apiBase = 'https://kunsthaus-relaunch-8251-stage.eu.aldryn.io/';
        window.kunsthaus.apiBase = 'https://kunsthaus-relaunch-8251.eu.aldryn.io/';
        window.kunsthaus.apiLocale = window.kunsthaus.currentLang ? window.kunsthaus.currentLang + '/' : '';
        window.kunsthaus.apiPath = 'api/v2/';
        window.kunsthaus.apiURL = window.kunsthaus.apiBase + window.kunsthaus.apiLocale + window.kunsthaus.apiPath;
        function gettext(param) {
          return param;
        }
    </script>

    <!-- Avoid page blocking -->
    <link rel="stylesheet" type="text/css" href="static/css/main.css" />
    <noscript>
        <link rel="preload" type="text/css" href="static/css/main.css" onload="this.onload=null;this.rel='stylesheet'" />
        <?php //include('_inc-head-csspreaload.php') ?>
    </noscript>
  </head>
  
  
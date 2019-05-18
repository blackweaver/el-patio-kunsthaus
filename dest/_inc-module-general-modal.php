<div class="module-general-modal" id="<?php echo $type ?>">
    <div class="modal-close"><?php include('static/img/icon-close-x.svg') ?></div>
    <?php
    if($type === 'modal-sharing') {
        $title = 'Mit Freunden teilen';
        include('_inc-sharing.php');
    } else if($type === 'modal-filter-one') {
        $title = 'Veranstaltungen';
        $items = [
            "*" => "Alle",
            "Workshop" => "workshop",
            "fuhrung" => "Führung",
            "lesung" => "Lesung",
            "veranstaltung" => "Veranstaltung",
            "gesprach" => "Gespräch"
        ];
        include('_inc-filter.php');
    } else if($type === 'modal-angebot') {
        $title = '';
        $items = [
            "*" => "Alle",
            "Workshop" => "workshop",
            "fuhrung" => "Führung",
            "lesung" => "Lesung",
            "veranstaltung" => "Veranstaltung",
            "gesprach" => "Gespräch"
        ];
        include('_inc-filter.php');
    } else if($type === 'modal-image-databank') {
        $title = '';
        $items = [
            "*" => "Alle",
            "Workshop" => "workshop",
            "fuhrung" => "Führung",
            "lesung" => "Lesung",
            "veranstaltung" => "Veranstaltung",
            "gesprach" => "Gespräch"
        ];
        include('_inc-filter.php');
    } else if($type === 'modal-filter-two') {
        $title = 'Veranstaltungen'; 
        $items = [
            "*" => "Alle",
            "Workshop" => "workshop",
            "fuhrung" => "Führung",
            "lesung" => "Lesung",
            "veranstaltung" => "Veranstaltung",
            "gesprach" => "Gespräch"
        ];
        include('_inc-filter.php');
        $title = 'Für'; 
        $items = [
            "*" => "Alle",
            "Workshop" => "workshop",
            "fuhrung" => "Führung",
            "lesung" => "Lesung",
            "veranstaltung" => "Veranstaltung",
            "gesprach" => "Gespräch"
        ];
        include('_inc-filter.php');
    }
    ?>
</div>
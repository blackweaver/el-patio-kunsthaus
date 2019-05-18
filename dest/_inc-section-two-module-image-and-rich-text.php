<?php
    for ($i=0; $i < $qty ; $i++) { 
        $image_block = 'static/img/museum/museum-image-module.png';
        $headline = 'Malwerkstatt Villa Kun(s)terbunt';
        $alignment = 'left'; // Right
        // $background = 'grey'; // White
        $image_width = '1/3'; // 1/2
        $description = 'Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues. Li nov lingua franca va esser plu simplic e regulari quam li existent Europan lingues. It va esser tam simplic quam Occidental: in fact, it va esser Occidental.';
        $text_links = [
            [
                "text" => "PDF",
                "link" => "http://www.google.com"
                ],
                [
                "text" => "Bilddatenbank",
                "link" => "http://www.google.com"
                ],
        ];
        $text_buttons = [
            [
                "text" => "PDF",
                "link" => "http://www.google.com"
                ]
        ];
        include('_inc-module-image-and-rich-text.php');
    }
?>

<div class="module module-two-columns limiter <?php echo $is_expandable ? 'is-expandable' : ''; ?>">
    <h3 class="module-<?php echo ($common)? 'title-common' : 'title' ?>"><?php echo (!empty($title))? $title : 'Kosten' ?></h3>
    <div class="module-content columns expandable-content">
        <div class="column">
            <p>Donnerstag, 10. Januar 2019, 11 Uhr</p>
            <h4>Programmvorschau 2019</h4>
            <p>Donnerstag, 10. Januar 2019, 11 Uhr</p>
            <h4>Fly me to the moon</h4>
            <p>Donnerstag, 10. Januar 2019, 11 Uhr</p>
            <h4>Guillaume Bruère</h4>
            <p><?php include('static/img/icons/icon-stripe.svg') ?><a href="#">Weniger anzeigen</a><br></p>
        </div>
        <div class="column">
            <p>Donnerstag, 10. Januar 2019, 11 Uhr</p>
            <h4>Programmvorschau 2019</h4>
            <p>Donnerstag, 10. Januar 2019, 11 Uhr</p>
            <h4>Fly me to the moon</h4>
        </div>
    </div>
    <?php if ($is_expandable){ ?>
    <div class="expand-collapse-content">
        <svg id="plus-minus" width="26px" height="26px" viewBox="0 0 26 26" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                <g id="Icons/+mehranzeigen" transform="translate(1.000000, 1.000000)" fill-rule="nonzero" stroke="#274A58" stroke-width="2">
                    <g>
                    <path d="M12,2.30926389e-14 L12,24" id="horizontal-line" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) "></path>
                    <path d="M12,24 L12,0" id="vertical-line"></path>
                    </g>
                </g>
            </g>
        </svg>
        <button class="content-toggle text-link" data-label-expand="Mehr anzeigen" data-label-collapse="Weniger anzeigen">Mehr anzeigen</button>
    </div>
    <?php } ?>
</div>

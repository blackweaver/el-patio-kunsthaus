<div class="module module-two-columns limiter <?php echo $is_expandable ? 'is-expandable' : ''; ?>">
    <h3 class="module-<?php echo ($common)? 'title-common' : 'title' ?>"><?php echo (!empty($title))? $title : 'Kosten' ?></h3>
    <div class="module-content columns expandable-content">
        <div class="column">
            <h4>Björn Quellenberg</h4>
            <p>Leiter Presse & Kommunikation, Pressesprecher Interviews, Geschäftsverlauf, Erweiterung, Sammlung, Forschung</p>
            <p><a href="">björn.quellenberg@kunsthaus.ch</a><br><a href="">+41 (0)44 253 84 11</a></p>
            <h4>Björn Quellenberg</h4>
            <p>Leiter Presse & Kommunikation, Pressesprecher Interviews, Geschäftsverlauf, Erweiterung, Sammlung, Forschung</p>
            <p><a href="">björn.quellenberg@kunsthaus.ch</a><br><a href="">+41 (0)44 253 84 11</a></p>
        </div>
        <div class="column">
            <h4>Björn Quellenberg</h4>
            <p>Leiter Presse & Kommunikation, Pressesprecher Interviews, Geschäftsverlauf, Erweiterung, Sammlung, Forschung</p>
            <p><a href="">björn.quellenberg@kunsthaus.ch</a><br><a href="">+41 (0)44 253 84 11</a></p>
            <h4>Björn Quellenberg</h4>
            <p>Leiter Presse & Kommunikation, Pressesprecher Interviews, Geschäftsverlauf, Erweiterung, Sammlung, Forschung</p>
            <p><a href="">björn.quellenberg@kunsthaus.ch</a><br><a href="">+41 (0)44 253 84 11</a></p>
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

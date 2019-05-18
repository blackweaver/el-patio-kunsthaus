<!-- SCSS base - src/styles/sass/modules/_image-slider.scss -->
<!-- SCSS - src/styles/sass/modules/_image-slider-big.scss -->

<div class="module module-image-slider module-image-slider-big <?php echo $theme ? $theme : 'theme-lighter-petrol-blue'; ?>">

    <h2 class="module-title limiter">Ein Museum mit vielen facetten</h2>

    <div class="slider-wrapper">
        <div class="slider-controls">
            <div class="slider-control-left">
                <svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Icons/Navi/Pfeil_default" fill-rule="nonzero">
                            <g>
                                <rect id="svg-arrow-rectangle" fill="#4A4A4A" x="0" y="0" width="60" height="60"></rect>
                                <g id="svg-arrow" transform="translate(15.000000, 20.000000)" stroke="#C6C6C6" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                    <g id="Icons/submit–&gt;" transform="translate(15.500000, 10.500000) rotate(-90.000000) translate(-15.500000, -10.500000) translate(5.000000, -5.000000)">
                                        <path d="M9.5,0.5 L9.5,27.5" id="Line"></path>
                                        <polyline id="Line-2" points="20.1128496 20 9.59973734 30.5131122 -2.37993611e-29 20"></polyline>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="slider-control-right">
                <svg width="60px" height="60px" viewBox="0 0 60 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Icons/Navi/Pfeil_default" fill-rule="nonzero">
                            <g>
                                <rect id="svg-arrow-rectangle" fill="#4A4A4A" x="0" y="0" width="60" height="60"></rect>
                                <g id="svg-arrow" transform="translate(15.000000, 20.000000)" stroke="#C6C6C6" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                    <g id="Icons/submit–&gt;" transform="translate(15.500000, 10.500000) rotate(-90.000000) translate(-15.500000, -10.500000) translate(5.000000, -5.000000)">
                                        <path d="M9.5,0.5 L9.5,27.5" id="Line"></path>
                                        <polyline id="Line-2" points="20.1128496 20 9.59973734 30.5131122 -2.37993611e-29 20"></polyline>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </div>
        <div class="module-content slider">
            <?php
                $slide_path="/static/img/slider/slider-big.jpg";
                $slide_title="Zeitgenössische Kunst";
                include('_inc-image-slide-big.php');
            ?>
            <?php
                $slide_path="/static/img/slider/slider-big.jpg";
                $slide_title="Zeitgenössische Kunst 1";
                include('_inc-image-slide-big.php');
            ?>
            <?php
                $slide_path="/static/img/slider/slider-big.jpg";
                $slide_title="Zeitgenössische Kunst 2";
                include('_inc-image-slide-big.php');
            ?>
            <?php
                $slide_path="/static/img/slider/slider-big.jpg";
                $slide_title="Zeitgenössische Kunst 3";
                include('_inc-image-slide-big.php');
            ?>
            <?php
                $slide_path="/static/img/slider/slider-big.jpg";
                $slide_title="Zeitgenössische Kunst 4";
                include('_inc-image-slide-big.php');
            ?>
        </div>
    </div>
</div>
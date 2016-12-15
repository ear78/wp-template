<?php
    /* Main Header Template*/

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- MAIN STYLE SHEET FOR WP -->
    <link rel="stylesheet" href="./style.css">
    <?php wp_head(); ?>
  </head>

  <body>
    <main class="main-wrapper">

        <!-- MOBILE MENU 700PX LESS THAN -->
        <header class="mobile-menu">
            <div>
                <svg class="hamburger" width="100%" height="100%" viewBox="0 0 44 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                    <g transform="matrix(1,0,0,1,-1399,-251)">
                        <g id="Menu--wide-" transform="matrix(1,1.2326e-32,1.2326e-32,1,-322,-759)">
                            <g transform="matrix(1,0,0,1,151.3,-321)">
                                <rect x="1569.7" y="1351" width="44" height="3" style="fill:white;"/>
                            </g>
                            <g transform="matrix(1,0,0,1,151.3,-320)">
                                <rect x="1569.7" y="1340" width="44" height="3" style="fill:white;"/>
                            </g>
                            <g transform="matrix(1,0,0,1,151.3,-319)">
                                <rect x="1569.7" y="1329" width="44" height="3" style="fill:white;"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="logo-container">
                <svg class="logo" width="100%" height="100%" viewBox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                    <g transform="matrix(1,0,0,1,-535.241,-14.2407)">
                        <g transform="matrix(1,0,0,2.0834,0,0)">
                            <g transform="matrix(0.700913,0,0,0.336427,452.393,5.59956)">
                                <g transform="matrix(1.42671,-0,-0,1.42671,118.199,3.67321)">
                                    <use xlink:href="#_Image1" x="0" y="0" width="43.519px" height="43.519px" transform="matrix(0.989058,0,0,0.989058,0,0)"/>
                                </g>
                            </g>
                        </g>
                    </g>
                    <defs>
                        <image id="_Image1" width="44px" height="44px" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
                <h1>Future</h1>
            </div>
        </header>

        <!-- DESKTOP MENU 700PX GREATER -->
        <header class="inner-wrap">
            <div>
                <a class="sign-in" href=""><p>Sign Up</p></a>
            </div>
            <div class="logo-container">
                <svg class="logo" width="100%" height="100%" viewBox="0 0 44 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                    <g transform="matrix(1,0,0,1,-535.241,-14.2407)">
                        <g transform="matrix(1,0,0,2.0834,0,0)">
                            <g transform="matrix(0.700913,0,0,0.336427,452.393,5.59956)">
                                <g transform="matrix(1.42671,-0,-0,1.42671,118.199,3.67321)">
                                    <use xlink:href="#_Image1" x="0" y="0" width="43.519px" height="43.519px" transform="matrix(0.989058,0,0,0.989058,0,0)"/>
                                </g>
                            </g>
                        </g>
                    </g>
                    <defs>
                        <image id="_Image1" width="44px" height="44px" xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
                <h1>Future</h1>
            </div>

            <!-- MAIN NAVIGATION MENU -->
                <?php
                    wp_nav_menu($args = array(
                        'menu_class' => 'main-navigation',
                        'theme_location' => 'primary'
                    ));
                    ?>

                <svg class="tree-icon" width="100%" height="100%" viewBox="0 0 17 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                    <g transform="matrix(1,0,0,1,-1178.5,-29.5)">
                        <g transform="matrix(1,0,0,2.0834,0,0)">
                            <g id="tree-logo">
                                <g transform="matrix(0.695652,0,0,0.333902,355.348,4.38247)">
                                    <path d="M1193,30L1202,48L1184,48L1193,30Z" style="fill:none;stroke:rgb(13,202,242);stroke-width:1.44px;"/>
                                </g>
                                <g transform="matrix(0.588629,0,0,0.282533,478.05,9.82765)">
                                    <path d="M1211.5,28L1218,41L1205,41L1211.5,28Z" style="fill:none;stroke:white;stroke-width:1.7px;"/>
                                </g>
                                <g transform="matrix(0.695652,0,0,0.333902,351.87,7.72149)">
                                    <path d="M1206.47,41L1206.47,45" style="fill:none;stroke:white;stroke-width:1.44px;"/>
                                </g>
                                <g transform="matrix(0.695652,0,0,0.333902,355.348,4.38247)">
                                    <path d="M1193,48L1193,53" style="fill:none;stroke:rgb(13,202,242);stroke-width:1.44px;"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
        </header>

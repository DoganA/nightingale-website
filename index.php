<?php
    $name = 'Nightingale';
    $title = 'The tune of life, the tune of yours';
    $description = 'Nightingale is a community support project for the powerful media player Songbird. It is developed by a proud community and we are equally proud to bring you the most extensible and feature-rich media experience. Freaturing smart playlists, equalizer, Last.fm integration, customizeable look and hundreds of add-ons. Nightingale has it all.';
    
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <!-- meta info -->
        <meta charset="utf-8">
        <title><?php echo $name.' - '.$title;?></title>
        <meta name="description" content="<?php echo $description; ?>">
        
        <!-- styles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
        <!--[if lt IE 9]>
            <meta http-equiv="X-UA-Compatible" content="chrome=1"> 
            <link rel="stylesheet" href="css/legacy-ie.css">
            <script src="javascript/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="ngalemainheadwrapper" class="wrapper">
            <header class="container">
                <nav role="navigation">
                    <ul>
                        <li class="current"><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Add-ons</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Wiki</a></li>
                        <li><a href="#">Developers</a></li>
                    </ul>
                </nav>
                <figure id="headerlogo" role="banner">
                    <div id="tabshadow" class="tab"></div>
                    <div id="birdtab" class="tab"></div>
                    <img src="images/nightingale_official_text_outline.png" alt="Nightingale - The tune of life, the tune of yours">
                </figure>
            </header>
        </div>
        <div class="wrapper" id="wrapper">
            <article id="main" class="container" role="main">
                <div id="contentleft">
                    <div id="screenshots">
                        <img id="screenshotone" src="http://lorempixel.com/500/300">
                        <img id="screenshottwo" src="http://lorempixel.com/501/301">
                        <button id="downloadbutton"><img src="images/dreambian.png" alt="Dreambian Icon"><div>Download Nightingale<br><small>128-bit | Dreambian .lol</small></div></button>
                        <a href="#" id="moredownloadslink">Other platforms and architectures</a>
                    </div>
                    <div id="description">
                        <?php echo $description; ?>
                    </div>
                </div>
                <aside>
                    <figure class="feature">
                        <img src="http://lorempixel.com/400/400">
                        <figcaption>Lorem ipsum</figcaption>
                    </figure>
                    <figure class="feature">
                        <img src="http://lorempixel.com/404/404">
                        <figcaption>Lorem ipsum</figcaption>
                    </figure>
                    <figure class="feature">
                        <img src="http://lorempixel.com/401/401">
                        <figcaption>Lorem ipsum</figcaption>
                    </figure>
                </aside>
            </article>
        </div>
        <div class="wrapper" id="ngalemainfooterwrapper">
            <footer class="container">
                <section id="footerinfo" role="contentinfo">
                    <img id="footergale" alt="white outlined nightingale project logo" src="images/footergale.png">
                    <p>Nightingale is free!<br>
                       It is an Open Source projcet release under the terms of the GNU General Public License vX (GPL cX).<br>
                       For more deails, please read the <a href="">license information</a>.
                    </p>
                </section>
                <nav class="footerlinks">
                    <b>Support</b>
                    <ul>
                        <li><a href="http://forum.getnightingale.com" title="Nightingale Forum">Community Forum</a></li>
                        <li><a href="http://blog.getnightingale.com" title="Development Blog">Official Blog</a></li>
                        <li><a href="http://addons.getnightingale.com" title="Addons for Nightingale">Addons</a></li>
                        <li><a href="http://wiki.getnightingale.com" title="Nightingale Wiki">Wiki</a></li>
                        <li><a href="http://forum.getnightingale.com/forum-13.html" title="Help" id="forumhelplink">Help Forum</a></li>
                    </ul>
                </nav>
                <nav class="footerlinks">
                    <b>Contribute</b>
                    <ul>
                        <li><a href="http://wiki.getnightingale.com" title="Documentation and Wiki">Developers Center</a></li>
                        <li><a href="http://wiki.getnightingale.com/doku.php?id=ngale-locales" title="Translate Nightingale">Translate Nightingale</a></li>
                        <li><a href="https://github.com/nightingale-media-player" title="GitHub">Source Code</a></li>
                        <li><a href="http://bugs.getnightingale.com" title="Bugzilla">Report a Bug</a></li>
                        <li><a href="http://getnightingale.com/donate" title="donate to Nightingale">Donate</a></li>
                    </ul>
                </nav>
                <nav class="footerlinks">
                    <b>Ressources</b>
                    <ul>
                        <li><a href="http://wiki.getnightingale.com" title="Documentation and Wiki">Download Nightingale</a></li>
                        <li><a href="http://wiki.getnightingale.com/doku.php?id=ngale-locales" title="Translate Nightingale">Features</a></li>
                        <li><a href="https://github.com/nightingale-media-player" title="GitHub">Nightlies</a></li>
                    </ul>
                </nav>
            </footer>
        </div>
    </body>
</html>
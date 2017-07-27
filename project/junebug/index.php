<?php $pathprefix = "../../"; ?>
<!DOCTYPE html>
<html>

    <head>

        <?php require_once $pathprefix."layout/head.php"; ?>
        <title>v0lture Solutions Repository</title>

    </head>

    <body>
        <?php require_once $pathprefix."layout/nav.php"; ?>

        <!-- app nav -->
        <nav class="nav-extended grey darken-3 z-depth-2">
            <div class="nav-wrapper grey darken-3">
                <a href="#" class="brand-logo"><small>Beetl</small></a>
            </div>
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="#about">Overview</a></li>
                    <li class="tab"><a href="#pr">Public Releases</a></li>
                    <li class="tab"><a href="#er">Enterprise Releases</a></li>
                </ul>
            </div>
        </nav>

        <div id="about" class="col s12">
            <div class="container">
                <h4>Overview</h4>
                <p>This is the overview of this project's support by v0lture and the support for various environments.</p><br />
                
                <h5><i class="material-icons left vblue-text">code</i> Development</h5>
                <p class="thin"><i class="material-icons left green-text">check</i> This project is still actively being developed.</p>
                <p class="thin"><i class="material-icons left">devices_other</i> This project is available for <b>web</b>.</p>

                <br /><h5><i class="material-icons left vblue-text">language</i> Public</h5>
                <p class="thin"><i class="material-icons left green-text">check</i> This project has 1 public release.</p>
                <p class="thin"><i class="material-icons left red-text">error_outline</i> This project is not eligible for support public  releases.<br /><small>Support public releases are versions of the project that are given longer support terms compared to normal public releases, ideal for long term users without frequent updating.</small></p>

                <br /><h5><i class="material-icons left vblue-text">business</i> Enterprise</h5>
                <p class="thin"><i class="material-icons left red-text">error_outline</i> This project is not eligible for enterprise support.</p>

                <br /><br />
                <h5>About</h5>
                <p>Beetl is v0lture's internal bug tracker.</p>
            </div>
        </div>

        <div id="pr" class="col s12">
            <div class="container">
                <h4>Public Releases</h4><br />
                <h5><i class="material-icons left vblue-text">fiber_new</i> v0.0.2.5</h5>
                <p>Released 2017-05-06.<br />This version is publically available at <a href="//bugs.v0lture.com" class="vblue-text">bugs.v0lture.com</a>.<br /><br />Grab the source code from the <a href="//github.com/v0lture/project-junebug" class="vblue-text">GitHub Repository</a>.</p><br />

                <h4>Support Public Releases</h4><br />
                <h5><i class="material-icons left red-text">error_outline</i> Not eligible for support public releases.</h5>
                <p>This project is meant to be an internal tool, therefore we keep it supported it with our systems only.</p>
            </div>
        </div>

        <div id="er" class="col s12">
            <div class="container">
                <h5><i class="material-icons left red-text">error_outline</i> Not eligible for enterprise releases.</h5>
                <p>This project is meant to be used as an internal tool so it will not be eligible for enterprise support.<br />Have any questions, comments or concerns about enterprise support with this project? <a href="mailto:contact@v0lture.com" class="vblue-text">Get in touch with us</a> and we can help you out.</p>
            </div>
        </div>

        <?php require_once $pathprefix."layout/js.php"; ?>
    </body>

</html>
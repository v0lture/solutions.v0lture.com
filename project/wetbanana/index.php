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
                <a href="#" class="brand-logo"><small>Foundation</small></a>
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
                <p class="thin"><i class="material-icons left">devices_other</i> This project is available for <b>desktop</b>.</p>

                <br /><h5><i class="material-icons left vblue-text">language</i> Public</h5>
                <p class="thin"><i class="material-icons left red-text">close</i> This project does not have any public releases.</p>
                <p class="thin"><i class="material-icons left red-text">close</i> This project does not have any support public releases.<br /><small>Support public releases are versions of the project that are given longer support terms compared to normal public releases, ideal for long term users without frequent updating.</small></p>

                <br /><h5><i class="material-icons left vblue-text">business</i> Enterprise</h5>
                <p class="thin"><i class="material-icons left red-text">error_outline</i> This project is not eligible for enterprise support.</p>

                <br /><br />
                <h5>About</h5>
                <p>Foundation is a web design tool that allows you to design web applications using Material Design.</p>
            </div>
        </div>

        <div id="pr" class="col s12">
            <div class="container">
                <h5><i class="material-icons left vblue-text">build</i> There are no public releases, but we are working on it!</h5>
                <p>Hang tight for the time being, but rest assured, we are working on getting the first public release ready for use.<br /><!-- Want to watch or contribute to our progress? Check out the <a href="//github.com/v0lture/project-mike" class="vblue-text">GitHub repository</a>.--></p>
            </div>
        </div>

        <div id="er" class="col s12">
            <div class="container">
                <h5><i class="material-icons left red-text">error_outline</i> Not eligible for enterprise releases.</h5>
                <p><b>Does your enterprise need enterprise release support for this project regardless?</b><br /><a href="mailto:contact@v0lture.com" class="vblue-text">Email us</a> and we can discuss the availability of promoting this project to enterprise.</p>
            </div>
        </div>

        <?php require_once $pathprefix."layout/js.php"; ?>
    </body>

</html>
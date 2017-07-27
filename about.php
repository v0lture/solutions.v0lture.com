<?php $pathprefix = ""; ?>
<!DOCTYPE html>
<html>

    <head>

        <?php require_once "layout/head.php"; ?>
        <title>v0lture Solutions Repository</title>

    </head>

    <body>
        <?php require_once "layout/nav.php"; ?>

        <div class="container">
            <h4 class="thin">What is the <span class="altfont">Repository</span>?</h4>
            <p>
                This is where you can find every project we have worked on and what they are about.<br />
                You can also view the release schedule of every project.
            </p>
            <br />
            <h4 class="thin">What are release schedules?</h4>
            <p>
                Release schedules are the timeframes of each version of an project is eligible for support from us.<br />
                After this period ends, the version will not be eligible for support from us directly. At this point, we would recommend updating to a newer version of the project to get the latest updates and security/bug fixes.
            </p>
        </div>

        <?php require_once "layout/js.php"; ?>
    </body>

</html>
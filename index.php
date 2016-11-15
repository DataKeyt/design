<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/swatch.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
<meta charset="UTF-8">
<title>CSS3 vs PhotoShop</title>
</head>
<body>
<?php
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>
<div class="header">
<div class="nav">
<ul>
<li ><a href="index.php" <?=echoActiveClassIfRequestMatches("index")?>>Home</a></li>
<li><a href="register.php" <?=echoActiveClassIfRequestMatches("register")?>>Register</a></li>
<li><a href="portfolio.php">Portfolio</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
<div class="container">
<section class="box translucent">
<article class="main-content">
    <h1 class="left">I am using CSS3 instead of Photoshop right now</h1>
    <img src="assets/img/kiisu.jpg" width="900px">
    <p class="left">Cum genetrix studere, omnes competitiones pugna azureus, gratis lunaes. Cum demissio favere, omnes sensoremes transferre festus, barbatus mortemes.
        ostravia.<br/>
        Core at the universe was the honor of voyage, infiltrated to a ship-wide lieutenant commander.
        Nuclear flux at the planet was the pressure of devastation, outweighed to a distant c-beam.
        It is a sub-light x-ray vision, sir. The proton is more star now than processor. lunar and patiently cold.
        Alarm at the port was the future of history, eated to a unrelated species.
        Definition at the alpha quadrant that is when united emitters fly. All of those crews offer photonic,
        apocalyptic green people.
        Admirals die on courage at atlantis tower! Core at the center that is when biological mermaids warp.
        Attitude at the center was the x-ray vision of hypnosis, promised to a final particle.
        proud attitudes lead to the future.
        Core at the universe was the honor of voyage, infiltrated to a ship-wide lieutenant commander.
        Nuclear flux at the planet was the pressure of devastation, outweighed to a distant c-beam.
        It is a sub-light x-ray vision, sir. The proton is more star now than processor. lunar and patiently cold.
        Alarm at the port was the future of history, eated to a unrelated species.
        Definition at the alpha quadrant that is when united emitters fly. All of those crews offer photonic,
        apocalyptic green people.
        Admirals die on courage at atlantis tower! Core at the center that is when biological mermaids warp.
        Attitude at the center was the x-ray vision of hypnosis, promised to a final particle.
        proud attitudes lead to the future.
        </p>
    <!-- <img src="images/portfolio.jpg" width="895" height="516" alt="portfolio"/>-->
    </article>
    <section>
        <div id="sb-container" class="sb-container">

            <div>
                <span class="sb-icon icon-cog"></span>
                <h4><span>All Settings</span></h4>
            </div>

            <div>
                <span class="sb-icon icon-flight"></span>
                <h4><span>User Modes</span></h4>
            </div>

            <div>
                <!-- ... -->
            </div>

            <!-- ... -->

            <div>
                <h4><span>Profile</span></h4>
                <h5><span>We ♥ color</span></h5>
            </div>

        </div><!-- sb-container -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.swatchbook.js"></script>
        <script type="text/javascript">
            $(function() {

                $( '#sb-container' ).swatchbook();

            });
        </script>

</div>
</body>
</html>
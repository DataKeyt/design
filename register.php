<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/style2.css">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
    <meta charset="UTF-8">
    <title>CSS3 vs PhotoShop</title>
</head>
<body>
<div class="header">
    <div class="nav">
        <?php
        function echoActiveClassIfRequestMatches($requestUri)
        {
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active"';
        }
        ?>
        <ul>
            <li ><a href="index.php" <?=echoActiveClassIfRequestMatches("index")?>>Home</a></li>
            <li><a href="register.php" <?=echoActiveClassIfRequestMatches("register")?>>Register</a></li>
            <li><a href="portfolio.php" <?=echoActiveClassIfRequestMatches("portfolio")?>>Portfolio</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

    </div>
</div>
<div class="container">
    <section class="box translucent">
        <div id="main">

            <h1>Sign up, it's AWESOME!</h1>

            <form class="" method="post" action="">

                <div class="row email">
                    <input type="text" id="email" name="email" placeholder="Email" />
                </div>

                <div class="row pass">
                    <input type="password" id="password1" name="password1" placeholder="We will steal it" />
                </div>

                <div class="row pass">
                    <input type="password" id="password2" name="password2" placeholder="Repeat, so we could steal" disabled="true" />
                </div>

                <!-- The rotating arrow -->
                <div class="arrowCap"></div>
                <div class="arrow"></div>

                <p class="meterText">Password Meter</p>

                <input type="submit" value="Register" />

            </form>
        </div>
</div>
<!-- JavaScript includes - jQuery, the complexify plugin and our own script.js -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="assets/js/jquery.complexify.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
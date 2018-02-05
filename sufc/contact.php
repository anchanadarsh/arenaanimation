<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />

    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <title>SUFC</title>
</head>

<body>

    <div class=" wrapper">
        <header>
            <div class="menu">
                <div id="nav-icon3">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div class="logo">
                <img src="images/sufc_logo_small.png" width="60" height="60">
            </div>

            <div class="head">
                <h1 style="font-size:48px;margin:0;color:#f7f3eb">skorost united</h1>
            </div>

            <div class="short_head">
                <h1 style="font-size:48px;margin:0;color:#f7f3eb">SUFC</h1>
            </div>
        </header>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="team.html">TEAM</a></li>
                <li><a href="database.html">DATABASE</a></li>
                <li><a href="contact.php" class="active">CONTACT</a></li>
            </ul>
        </nav>

        <div class="side_nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="team.html">TEAM</a></li>
                <li><a href="database.html">DATABASE</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>

        <div class="banner">
            <img class="img_resp" src="images/contact_banner1.jpg" alt="image1" />
        </div>

        <div class="content_area">
            <div class="container">
                <h1 class="wow tada animated">contact us</h1>
                <form action="processform.php" method="post">
                    <input class="contact_form" type="text" name="firstname" placeholder="Firstname" />
                    <input class="contact_form" type="text" name="lastname" placeholder="lastname" />
                    <input class="contact_form" type="text" name="email_id" placeholder="email id" />
                    <input class="contact_form" type="text" name="mobile" placeholder="phone" />
                    <textarea class="contact_form" name="comment" rows="10" placeholder="comment"></textarea>
                    <button class="submit" type="submit">Submit</button>
                </form>

                <div id="googleMap" style="width:500px;height:380px;"></div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="sponsors">
                    <img src="images/pixoloLogo.png" width="100" height="100">
                </div>
                <div class="follow_us">
                    <img src="images/facebook.png" width="30" height="30">
                    <img src="images/twitter.png" width="30" height="30">
                    <img src="images/linkedin.png" width="30" height="30">
                </div>
                <p class="copyright">@2016 Skorost United.All rights reserved.</p>
            </div>
        </footer>

        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/sufc.js" type="text/javascript"></script>
        <script src="http://maps.googleapis.com/maps/api/js"></script>
        <script src="js/wow.js" type="text/javascript"></script>
        <script>
            new WOW().init();
        </script>

        <script>
            function initialize() {
                var mapProp = {
                    center: new google.maps.LatLng(19.080053, 72.914136),
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

</body>

</html>
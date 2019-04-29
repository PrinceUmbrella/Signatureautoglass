<!DOCTYPE html>
<html lang="en">
    <title>Signature Auto Glass</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}

        /* For the social media icons */
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .w3-red, .w3-hover-red:hover {
            background-color: #194478 !important;
            color: #f8f2b1 !important;
        }
        .w3-text-red, .w3-hover-text-red:hover {
            color: #194478!important;
        }
    </style>
<body>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
        <div class="w3-container">
            <h3 class="w3-padding-64"><b>Signature<br>Auto Glass</b></h3>
        </div>
        <div class="w3-bar-block">
            <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a>
            <a href="index.php#aboutus" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a>
            <a href="services.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a>
            <a href="fleetManagement.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Fleet Management</a>
            <a href="freeQuote.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Free Quote</a>
            <a href="index.php#warranty" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Warranty</a>
            <a href="index.php#referral" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Referral Program</a>
        </div>
            <a href="https://www.facebook.com/SignatureAG/?ref=br_rs" class="fa fa-facebook" target="_blank"></a>
            <a href="https://www.instagram.com/signatureautoglassga/" class="fa fa-instagram" target="_blank"></a>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
    <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
    <span>Signature Auto Glass</span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:340px;margin-right:40px">

    <!-- Header -->
    <div class="w3-container" style="margin-top:80px" id="showcase">
        <img src="../images/logo.jpg" style="max-height: 100px; max-width: 100%; display: block; margin-left: auto; margin-right: auto" onclick="onClick(this)" alt="Concrete meets bricks">
        <h4 style="text-align: center; color: #194478;">Using cutting edge technology with old school practicality to deliver the safest and highest quality auto glass installation</h4>
        <hr style="width:50px;border:5px solid #f8ee7f; display: block; margin-left: auto; margin-right: auto" class="w3-round">
    </div>

    <!-- Fleet Management -->
    <div class="w3-container" id="fleet" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Fleet Management</b></h1>
        <hr style="width:50px;border:5px solid #f8ee7f" class="w3-round">
        <p>The best team in the world.</p>
        <p>
            We have a team of local Auto Glass Installers ready to take care of your auto glass replacement needs.

            Your needs are our priority! At Signature Auto Glass, we are committed to providing excellent customer service and quality auto glass replacement and other areas nearby.
            Your safety is top priority with our experienced team of auto glass technicians, we want to keep you and your vehicle safe and on the road.
            Signature Auto Glass will gladly service your import, domestic or high performance exotic car.
        <p><b>Our designers are thoughtfully chosen</b>:</p>
    </div>
    
    <!-- End page content -->
    </div>
    <script>
        // Script to open and close sidebar
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }
    </script>

    </body>
</html>

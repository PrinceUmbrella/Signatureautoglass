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
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-none"><h3 class="w3-padding-64"><b>Signature<br>Auto Glass</b></h3></a>
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

    <!-- Free Quote -->
    <!-- Put the form in this area -->
    <div class="w3-container" id="freequote" style="margin-top:20px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Free Quote</b></h1>

        <hr style="width:50px;border:5px solid #f8ee7f" class="w3-round">
        <p>Do you want us to give you a Quote!!!</p>

        <form action="/action_page.php" target="_blank">
        <div class="w3-section">
            <label>Year</label>
            <input class="w3-input w3-border" type="text" name="Year" required>
        </div>
        <div class="w3-section">
            <label>Make</label>
            <input class="w3-input w3-border" type="text" name="Make" required>
        </div>
        <div class="w3-section">
            <label>Model</label>
            <input class="w3-input w3-border" type="text" name="Model" required>
        </div>
            <div class="w3-section">
            <label>Style</label>
            <input class="w3-input w3-border" type="text" name="Style" required>
        </div>
        <div class="w3-section">
            <label>Vin</label>
            <input class="w3-input w3-border" type="text" name="Vin" required>
        </div>
        <div class="w3-section">
            <label>Name</label>
            <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-section">
            <label>Address</label>
            <input class="w3-input w3-border" type="text" name="Address" required>
        </div>
        <div class="w3-section">
            <label>Phone</label>
            <input class="w3-input w3-border" type="text" name="Phone" required>
        </div>
        <div class="w3-section">
            <label>Email</label>
            <input class="w3-input w3-border" type="email" name="Email" required>
        </div>
        <div class="w3-section">
            <label class="w3-input" >Please select the damaged glass</label>
        </div>
        <div class="w3-section">
            <label>Windshield Repair</label>
            <select class="w3-input w3-border" iid = "repair">
                <option value="hide">-- Repair --</option>
                <option value="six">6 Inches</option>
                <option value="threeOrLess">3 or less Inches</option>
            </select>
        </div>
        <div class="w3-section">
            <label>How Many Chips Selection</label>
            <select class="w3-input w3-border" iid = "Chips">
                <option value="hide">-- Selection --</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <div class="w3-section">
            <label class="w3-input">Replacement</label>
        </div>
        <div class="w3-section">
            <label>Back Glass</label>
            <select class="w3-input w3-border" id = "Back_Glass">
                <option value="hide">-- Back Glass --</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Side Glass</label>
            <select class="w3-input w3-border" id = "Side_Glass">
                <option value="hide">-- Side Glass --</option>
                <option value="left">Left Front</option>
                <option value="right">Right Front</option>
                <option value="rearright">Rear Right</option>
                <option value="rearleft">Rear</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Door Glass</label>
            <select class="w3-input w3-border" id = "Door_Glass">
                <option value="hide">-- Door Glass --</option>
                <option value="left">Left Front</option>
                <option value="right">Right Front</option>
                <option value="rearright">Rear Right</option>
                <option value="rearleft">Rear</option>
            </select>
        </div>
        <div class="w3-section">
            <label>Vent Glass</label>
            <select class="w3-input w3-border" id = "Vent_Glass">
                <option value="hide">-- Vent Glass --</option>
                <option value="left">Left Front</option>
                <option value="right">Right Front</option>
                <option value="rearright">Rear Right</option>
                <option value="rearleft">Rear</option>
            </select>
        </div>
        <div class="w3-section" >
            <label>Quarter Glass</label>
            <select class="w3-input w3-border" id = "Quarter_Glass">
                <option value="hide">-- Quarter Glass --</option>
                <option value="left">Left Front</option>
                <option value="right">Right Front</option>
                <option value="rearright">Rear Right</option>
                <option value="rearleft">Rear</option>
            </select>
        </div>
        <div class="w3-section" >
            <label>Payment Method</label>
            <select class="w3-input w3-border" id = "Payment">
                <option value="hide">-- Payment --</option>
                <option value="left">Self Pay</option>
                <option value="right">Insurance</option>
            </select>
        </div>

        <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Send Message</button>
        </form>
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

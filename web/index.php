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
            <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">LogIn</a>
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

    <!-- Photo grid (modal) (Homepage) -->
    <div class="w3-row-padding">
        <div class="w3-half">
        <img src="../images/image11.png" style="width:100%" onclick="onClick(this)" alt="Front">
        <img src="../images/image12.png" style="width:100%" onclick="onClick(this)" alt="Side">
        <img src="../images/image13.png" style="width:100%" onclick="onClick(this)" alt="Front">
        </div>

        <div class="w3-half">
        <img src="../images/image14.png" style="width:100%" onclick="onClick(this)" alt="Windows">
        <img src="../images/image13.png" style="width:100%" onclick="onClick(this)" alt="Mirrors">
        <img src="../images/image11.png" style="width:100%" onclick="onClick(this)" alt="Front">
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
        <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption"></p>
        </div>
    </div>

    <!-- About Us -->
    <div class="w3-container" id="aboutus" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>About Us</b></h1>
        <hr style="width:50px;border:5px solid #f8ee7f" class="w3-round">

        <p><b>Mission:</b></p>
        <p>Our mission is to establish Signature Auto Glass as the premier leaders in the auto glass replacement and repair industry, by delivering exceptional customer service, exceeding safety standards and maintaining fair pricing.</p>
        <p><b>What We Do:</b></p>
        <p>Signature Auto Glass uses cutting edge technology with old school practicality to deliver the safest and highest quality auto glass installation and repair.
            We have a team of local Auto Glass Installers ready to take care of your auto glass replacement needs. Your needs are our priority!
            At Signature Auto Glass, we are committed to providing excellent customer service and quality auto glass replacement. Your safety is top priority with our experienced team of auto glass technicians, we want to keep you and your vehicle safe and on the road. Signature Auto Glass will gladly service your import, domestic or high performance exotic car. We take pride in our work, offering excellent customer service and using high quality Auto Glass, Moulding and Urethane.
            Regardless of whether your need is as a result of something that flew into your windshield as you drove down the road or because you were the victim of a crime, Signature Auto glass is here to help. If necessary, we are also able to work with your insurance provider to properly file your insurance claim.
            As an added convenience for our customers, we offer Free MOBILE SERVICE in Atlanta and nearby areas We bring our Auto Glass Shop to you! Signature Auto Glass will gladly come to you! When you call our office (404) 850-1072, our phone representatives will ask you for the essential information in order to be able to provide you with a free quote and answer your questions.

        </p>
    </div>

    <!-- Warranty -->
    <div class="w3-container" id="warranty" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Warranty and Disclaimer</b></h1>
        <hr style="width:50px;border:5px solid #f8ee7f" class="w3-round">
        <p><b>Windshield Repair:</b></p>
        <p style="color: red"><b>
            Due to the process of using pressure and vacuum cycles to repair laminated glass and the unstable properties of broken glass,
            the damaged area may develop additional cracks or existing cracks may increase in length.
            </b>
        </p>
        <p>This problem is very rare and occurs in less than .1% of all windshield repairs performed using the Windshield Repair System.</p>
        <p>Appearance AFTER the Repair (Not a cosmetic fix)</p>
        <p>
            It’s important to understand that a successful repair DOES NOT mean the rock chip repair will become invisible or improve significantly in appearance.
            The process for windshield rock chip repair is primarily a structural repair. The cosmetic appearance AFTER the repair is not a reflection of whether or not the repair was successful.
            With that being said, the repaired chip may also disappear almost completely.
        </p>
        <p><b>Auto Glass Warranty:</b></p>
        <p>
            Signature Auto Glass offers a Lifetime Warranty against leaks (air or water) and workmanship as long as the initial customer owns the vehicle. The warranty is non-transferable.
            Power and Manual sliding back glasses are warranted for 6 months from date of installation.
            Please call <b>(404) 850-1072 </b>as soon as any leaks or defects are noticed. Customers must present the original receipt for warranty work.

        <p><b>Warranty Limitations:</b></p>
        <p>
            The warranty only covers workmanship and leaks. Signature Auto Glass will not be held liable for damages that occur as a result of previous damages, rust, rock chips, vandalism, theft, accidents or natural occurrences.
            Warranty will not be honored if repairs or replacement are conducted without prior authorization from Signature Auto Glass.
            If damages occur to the vehicle as a result of auto glass replacement, Signature Auto Glass reserves the right to select a vendor to repair the damages.
            Signature Auto Glass is not responsible for regulator or motor issues that occur as a result of broken door glass.
            Signature Auto Glass does not re calibrate vehicles with lane departure warning system/forward collision.
        </p>
    </div>

    <!-- Referral Program -->
    <div class="w3-container" id="referral" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Auto Glass Ambassador Referral Program</b></h1>
        <hr style="width:50px;border:5px solid #f8ee7f" class="w3-round">
        <p>Refer potential Auto Glass customers with your Auto Glass Ambassador Code (use your resources: Social Media, Craigslist, Nextdoor, Friends, Family etc be creative with integrity All post must be approved before posting</p>
        <p>If the customer receives auto glass service from Signature Auto Glass</p>
        <p><b>You will receive $5.00 for each customer that receives service Money will be sent via cash app PayPal or Venmo (to collect $600.00 or more must have a w9 on file)</b></p>

        <p>There are an estimated 3.5 million vehicles on the road in Atlanta many of them have or will have broken auto glass that will need replacement or repair. Spread the word and get paid today!</p>

        </p>
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

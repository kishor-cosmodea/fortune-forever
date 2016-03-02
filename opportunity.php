<!doctype html>

<!-- If multi-language site, reconsider usage of html lang declaration here. -->
<html lang="en">

  <head>

    <meta charset="utf-8">

    <title>Fortune Forever | Opportunity</title>

    <!-- 120 word description for SEO purposes goes here. Note: Usage of lang tag. -->
    <meta name="description" lang="en" content="">

    <!-- Keywords to help with SEO go here. Note: Usage of lang tag.  -->
    <meta name="keywords" lang="en" content="">

    <!-- View-port Basics: http://mzl.la/VYREaP -->
    <!-- This meta tag is used for mobile device to display the page without any zooming,
         so how much the device is able to fit on the screen is what's shown initially.
         Remove comments from this tag, when you want to apply media queries to the website. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- To adhear no-cache for Chrome 
    <meta http-equiv="cache-control" content="no-store, no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-store, no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="robots" content="index, follow" /> -->

    <!-- Place favicon.ico in the root directory: mathiasbynens.be/notes/touch-icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- Default style-sheet is for 'media' type screen (color computer display).  -->
    <link rel="stylesheet" media="screen" href="assets/css/style.css" >

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!--jQuery -->
    <script src="assets/vendor/jquery-2.2.0.min.js"></script>
   <!-- <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->

    <!-- For IE9 browsers. -->
    <!--[if IE 9 ]><html class="ie9"> <![endif]-->

    <!-- html5shiv aka html5 shim. Supporting HTML5 and CSS for IE browsers less than IE9. -->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <script type="text/javascript">
        function hide() {
            document.getElementById('main-quote').style.visibility="hidden";
        }

        function show() {
            document.getElementById('main-quote').style.visibility="visible";
        }
        
        function hideshow() {
            if(document.getElementById('main-quote').style.visibility=="visible"){
                hide();
            } else {
                show();
            }
        }
    </script>

  </head>

  <body onload="hide()">

    <div class="container">

        <!-- Header starts here -->
        <header>
            <div class="wrapper cf">
                <div class="main">
                    <h1>
                        <a href="http://lodha.prelaunch.house/" title="Prelaunch">Prelaunch</a>
                    </h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="opportunity.php" title="Opportunity" class="active">Opportunity</a></li>
                        <li><a href="urban-oasis.php" title="Urban Oasis">Urban Oasis</a></li>
                        <li><a href="location.php" title="Location">Location</a></li>
                        <li><a href="whyinvestearly.php" title="Why Invest Early">Why Invest Early</a></li>
                        <li><a href="plans.php" title="Plans">Plans</a></li>
                        <li><a href="price.php" title="Price">Price</a></li>
                        <li><a href="contact-us.php" title="Contact Us">Contact Us</a></li>
                    </ul>
                </nav>
                <div class="download" id="gquote">
                    <a href="#" title="Get Quote" id="quote" onclick="hideshow()">Get Quote</a>
                </div>
            </div>
        </header>
        <!-- Header ends here -->

        <!-- Pop up starts-->
        <div class="quote-details" id="main-quote">
            <img src="assets/images/close.png" alt="Slider" width="24px" height="24px" onclick="hide()"/>
            <div class="get-details">
                <form method="post" action="quote.php">
                    Name*<input type="text" name="gname" id="gname">
                    E-mail*<input type="text" name="gemail" id="gemail">
                    Mobile*<input type="text" name="gmobile" id="gmobile">
                    <button id="submit-data">Submit</button>
                </form>
            </div>
        </div>
        <!-- Pop up ends-->

        <!-- content starts here -->
        <div class="content" onclick="hide()">
            <div class="wrapper">
                <div class="opp-content">
                    <div class="opp-left">
                        <img src="assets/images/opport.jpg" alt="Img"  />
                    </div>
                    <div class="opp-right">
                        <h2>Early Booking Window Open From 20th Feb To 28th Feb.</h2>
                        <ul>
                            <li>A world class new neighbourhood designed on the principles of new urbanism and inspired by the successful developments of Powai and Palava.</li>
                            <li>Branded urban neighbourhoods in MMR, provide an enriched lifestyle, filled with numerable experiences that fulfil the promise of a happy future.</li>
                            <li>Buying early into master-planned neighbourhoods has given unprecedented & market-beating returns which transform into a fortune.</li>
                            <li>Located at Prime Central Thane, synonymous with everything that is superlative in Thane</li>
                            <li>Mega development with a clear land title</li>
                            <li>All requisite approvals in place</li>
                            <li>Construction in full swing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- content ends here -->

        <!-- footer starts here -->
        <footer>
            <div class="wrapper">
                <p>Copyright © 2016 <a href="index.php" title="PreLaunchHouse">PreLaunchHouse</a></p>
            </div>
        </footer>
        <!-- footer ends here -->

    </div>


    <script src="assets/js/script.js"></script>
  </body>
</html>

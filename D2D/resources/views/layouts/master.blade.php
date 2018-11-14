<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <title>D2D Groceries - @yield('title')</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media= "all"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="cms-index-index cms-home-page">
        <header>
            <div class="header-container">
               <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-5 hidden-xs"> 
                                <!-- Default Welcome Message --> 
                                <div class="welcome-msg">Welcome to D2D! </div>
                                <span class="welcome-msg">Call Us: +123.456.789</span>                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
          

            <!-- JS --> 

        <!-- jquery js --> 
        <script type="text/javascript" src="js/jquery.min.js"></script> 

        <!-- bootstrap js --> 
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 

        <!-- owl.carousel.min js --> 
        <script type="text/javascript" src="js/owl.carousel.min.js"></script> 

        <!-- bxslider js --> 
        <script type="text/javascript" src="js/jquery.bxslider.js"></script> 

        <!-- Slider Js --> 
        <script type="text/javascript" src="js/revolution-slider.js"></script> 

        <!-- megamenu js --> 
        <script type="text/javascript" src="js/megamenu.js"></script> 
        <script type="text/javascript">
        /* <![CDATA[ */   
        var mega_menu = '0';
        
        /* ]]> */
        </script> 

        <!-- jquery.mobile-menu js --> 
        <script type="text/javascript" src="js/mobile-menu.js"></script> 

        <!--jquery-ui.min js --> 
        <script type="text/javascript" src="js/jquery-ui.js"></script> 

        <!-- main js --> 
        <script type="text/javascript" src="js/main.js"></script> 

        <!-- countdown js --> 
        <script type="text/javascript" src="js/countdown.js"></script> 

        <!-- Revolution Slider --> 
        <script type="text/javascript">
                jQuery(document).ready(function() {
                        jQuery('.tp-banner').revolution(
                        {
                            delay:9000,
                            startwidth:1920,
                            startheight:790,
                            hideThumbs:10,

                            navigationType:"bullet",							
                            navigationStyle:"preview1",

                            hideArrowsOnMobile:"on",
                            
                            touchenabled:"on",
                            onHoverStop:"on",
                            spinner:"spinner4"
                        });
                });
        </script> 

        <!-- Hot Deals Timer 1--> 
        <script type="text/javascript">
            var dthen1 = new Date("12/25/16 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow1 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow1)-(dthen1));
            else
                ddiff = new Date((dthen1)-(dnow1));
            gsecs1 = Math.floor(ddiff.valueOf()/1000);
            
            var iid1 = "countbox_1";
            CountBack_slider(gsecs1,"countbox_1", 1);
        </script>
    </body>
    
</html>

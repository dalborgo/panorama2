<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home | Hotel Panorama Ristorante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">

    <!-- fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>-->

    <!-- REVOSLIDER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.min.css" media="screen" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- uikit -->
    <!--<link rel="stylesheet" href="css/uikit.min.css" />-->
    <!--<link rel="stylesheet" href="https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=2206" />-->

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <!--<link rel="stylesheet" href="css/rev-slider2/settings.css" />-->
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">




    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css"/>


    <link id="data-uikit-theme" rel="stylesheet" href="css/uikit.docs.css">
    <script src="js/jquery.js"></script>
    <script src="js/uikit.min.js"></script>
    <!-- Autocomplete CSS -->
    <!-- Autocomplete Javascript -->
    <script src="js2/components/slideshow.js"></script>
    <script src="js2/components/slideshow-fx.js"></script>
    <script src="js2/core/modal.js"></script>
    <script src="js2/components/lightbox.js"></script>
    <link href="js/ks/ks_booking2.css" rel="stylesheet" type="text/css" />
    <script language="javascript" src="js/ks/ks_booking_calendar.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        var cal_1 = new CalendarPopup("ks_booking_cal_1_div", "it"); // Secondo parametro => lingua ("it" per l'italiano, "en" per l'inglese)
        var cal_2 = new CalendarPopup("ks_booking_cal_2_div", "it"); // Secondo parametro => lingua ("it" per l'italiano, "en" per l'inglese)
    </script>
    <script language="javascript" type="text/javascript">document.write(getCalendarStyles());</script>
    <script language="javascript" type="text/javascript" src="js/ks/ks_booking_func.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <style>

    </style>

</head>
<?php include_once 'prenota3.php' ?>
<?php include_once 'slider2.php' ?>
<!--<style>
    @font-face {
        font-family: HelveticaNeueLTW1G-Roman;
        src: url('fonts/HelveticaNeueLTW1G-Roman.otf');
    }
</style>-->
<body id="home_two" style="font-family: 'Helvetica Neue','Arial'">

<!-- start preloader -->
<div id="loader-wrapper">
    <div class="logo"><a href="#"><img src="images/loading2.gif"></a></div>
</div>
<!-- start header -->
<?php include_once "testa.php" ?>
<!-- end header -->
<?= prenota('Village') ?>
<!-- start main slider -->
<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay:true, autoplayInterval:6500,slices:5}">

    <ul class="uk-slideshow uk-overlay-active" >
        <li><img src="images/garda/1h.jpg" width="800" height="400" alt="">
            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center bordoSfumato ">
                <div>
                    <p class="citazione uk-position-medium uk-position-center padding-top-5">“…a pochi passi da me c’era questo maestoso spettacolo della natura,<br> questo delizioso quadro che è il Lago di Garda.”
                    </p>
                    <p class="autore uk-position-medium uk-position-center">(Johann Wolfgang von Goethe - 12 settembre 1786)</p>
                </div>
            </div>
        </li>
        <li><img src="images/garda/2h.jpg" width="800" height="400" alt="">
            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center bordoSfumato">
                <div>
                    <p class="citazione uk-position-medium uk-position-center padding-top-5">“…a pochi passi da me c’era questo maestoso spettacolo della natura,<br> questo delizioso quadro che è il Lago di Garda.”
                    </p>
                    <p class="autore uk-position-medium uk-position-center">(Johann Wolfgang von Goethe - 12 settembre 1786)</p>
                </div>
            </div>
        </li>
        <li><img src="images/garda/3h.jpg" width="800" height="400" alt="">
            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center bordoSfumato">
                <div>
                    <p class="citazione uk-position-medium uk-position-center padding-top-5">“…a pochi passi da me c’era questo maestoso spettacolo della natura,<br> questo delizioso quadro che è il Lago di Garda.”
                    </p>
                    <p class="autore uk-position-medium uk-position-center">(Johann Wolfgang von Goethe - 12 settembre 1786)</p>
                </div>
            </div>
        </li>
        <li><img src="images/garda/4h.jpg" width="800" height="400" alt="">
            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center bordoSfumato">
                <div>
                    <p class="citazione uk-position-medium uk-position-center padding-top-5">“…a pochi passi da me c’era questo maestoso spettacolo della natura,<br> questo delizioso quadro che è il Lago di Garda.”
                    </p>
                    <p class="autore uk-position-medium uk-position-center">(Johann Wolfgang von Goethe - 12 settembre 1786)</p>
                </div>
            </div>
        </li>
        <li><img src="images/garda/5h.jpg" width="800" height="400" alt="">
            <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-flex uk-flex-center uk-flex-middle uk-text-center bordoSfumato">
                <div>
                    <p class="citazione uk-position-medium uk-position-center padding-top-5">“…a pochi passi da me c’era questo maestoso spettacolo della natura,<br> questo delizioso quadro che è il Lago di Garda.”
                    </p>
                    <p class="autore uk-position-medium uk-position-center">(Johann Wolfgang von Goethe - 12 settembre 1786)</p>
                </div>
            </div>
        </li>
    </ul>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous" style="color: rgba(255,255,255,0.4)"></a>
    <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next" style="color: rgba(255,255,255,0.4)"></a>
</div>

<!-- end main slider -->
<div class="hotel_booking_area margin-bottom-80" >
    <div class="container">

        <div class="col-lg-12 col-md-12 margin-top-110 padding-22">
            <div class="section_title content-left margin-bottom-5">
                <!--                    <h4 class="uk-card-title"></h4>-->
                <div class="section_title nice_title content-center">
                    <h3 class="uk-heading-line uk-text-center"><div class="titoloBasso2">“l ’arte del ricevere dal 1962…”</div><span class="titoloBasso">Family Atmosphere</span></h3>
                </div>

            </div>

            <div class="room_facilities_des padding-bottom-10" >
                <div class="row margin-top-115 margin-bottom-20">
                    <div class="col-lg-9 col-md-9">
                <p class="uk-clearfix text-justify">
                    <!--<a href="images/home/famiglia.jpg" data-uk-lightbox title="" class=""><img class="imgIn uk-align-medium-right " src="images/home/famiglia.jpg" width="260px" alt="Famiglia Martinelli G."></a>
                    <a href="images/home/oggi.jpg" data-uk-lightbox title="" class=""><img class="imgIn uk-align-medium-left " src="images/home/oggi.jpg" width="200px" alt="Oggi"></a><br><br><br>-->
                    Benvenuti all’Hotel Panorama Ristorante ad Albisano di Torri del Benaco sul Lago di Garda!</br></br>
                    Siamo lieti di accoglierVi per un soggiorno piacevole e distensivo nel nostro Hotel Ristorante che rappresenta da oltre 50 anni e tre generazioni il simbolo della migliore ospitalità fatta di stile, eleganza e personalità.</br></br>
<!--                    <a href="images/home/vintage.jpg" data-uk-lightbox title="" class=""><img class="imgIn uk-align-medium-left " src="images/home/vintage.jpg" width="200px" alt="Vintage"></a>    -->
                    La sua ubicazione panoramica in un incantevole centro tra il verde degli ulivi e l'azzurro del lago di Garda, Vi permetterà di godere di una vista mozzafiato e di un soggiorno spensierato e di assoluto relax lontano dalla frenesia quotidiana.</br></br>
                    Da sempre con passione cerchiamo di porre la massima cura nei dettagli per soddisfare al meglio le Vostre esigenze con l’obiettivo di farVi trascorrere una vacanza all’insegna della tranquillità.</br></br>
                    Il vostro benessere è il nostro unico impegno!

                </p>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <?= getSlider('home','home') ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- start welcome section -->
<!--<div class="other_room_area">
    <div class="container">
        <div class="row">
            <section class="hotel_showcase_area margin-bottom-115 margin-top-110">
                <div class="container-fluid">
                    <div class="row">
                        <div class="hotel_showcase">
                            <div class="section_title nice_title content-center">
                                <h3><span style="color: #E14C97;" class="titoloBasso">Hotel Gallery</span></h3>
                            </div>
                            <div class="section_content">
                                <div class="showcase_slider">
                                    <div class="item">
                                        <a href="images/home/famiglia.jpg" data-uk-lightbox><img src="images/home/famiglia.jpg" alt="img">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="images/home/vintage.jpg" data-uk-lightbox><img src="images/home/vintage.jpg" alt="img">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>-->
<!-- end welcome section -->

<!-- start Hotel Facilities section -->
<!-- end Hotel Facilities section -->

<!-- start Hotel Showcase section -->

<!-- end Hotel Showcase section -->



<!-- start footer -->
<?php include_once 'footer.php' ?>
<!-- end footer -->



<!-- jquery library -->
<!--<script src="js/vendor/jquery-1.11.2.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- uikit -->
<!--<script src="js/uikit.min.js"></script>-->
<!--<script src="https://getuikit.com/assets/uikit/dist/js/uikit.js?nc=2206"></script>-->
<!-- easing -->
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/datepicker.js"></script>
<!-- scroll up -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- owlcarousel -->
<script src="js/owl.carousel.min.js"></script>




<!-- APPEAR -->
<script type="text/javascript" src="js/jquery.appear.js"></script>




<!-- lightslider -->
<script src="js/lightslider.js"></script>
<!-- rev slider -->
<!--<script src="js/rev-slider/rs-plugin/jquery.themepunch.plugins.min.js"></script>
<script src="js/rev-slider/rs-plugin/jquery.themepunch.revolution.js"></script>
<script src="js/rev-slider/rs.home.js"></script>-->
<!-- wow Animation -->
<script src="js/wow.min.js"></script>
<!--Activating WOW Animation only for modern browser-->
<!--[if !IE]><!-->
<script type="text/javascript">new WOW().init();</script>
<!--<![endif]-->

<!--Oh Yes, IE 9+ Supports animation, lets activate for IE 9+-->
<!--[if gte IE 9]>
<script type="text/javascript">new WOW().init();</script>
<![endif]-->





<!-- my js -->

<script src="js/main.js"></script>
<!--<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution-parallax.min.js"></script>-->

</body>
</html>

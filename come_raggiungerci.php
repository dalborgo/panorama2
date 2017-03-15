<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Come Raggiungerci | Hotel Panorama Ristorante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">


    <!-- fonts -->
    <!--    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>-->

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css"/>

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--    <link rel="stylesheet" href="css/uikit2.min.css" />-->

    <!-- uikit -->
    <link rel="stylesheet" href="css3/uikit.min.css"/>
    <!--    <link id="data-uikit-theme" rel="stylesheet" href="css/uikit2.min.css">-->
    <!--    <link rel="stylesheet" href="https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=2206" />-->
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/datepicker.css"/>
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider2/settings.css"/>
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css"/>
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css"/>
    <script src="js3/jquery.js"></script>
    <script src="js3/uikit.min.js"></script>
    <!-- Autocomplete CSS -->
    <!-- Autocomplete Javascript -->
    <!--    <script src="js2/components/slideshow.js"></script>-->
    <!--    <script src="js2/components/slideshow-fx.js"></script>-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- This Template Is Fully Coded By Aftab Zaman from swiftconcept.com -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    -->
    <style>
        .breadcrumb_main.nice_title > h2::after {
            height: 30%;
        }
    </style>
</head>
<body id="gallery_page" style="font-family: 'Helvetica Neue','Arial'">

<?php include_once "testa.php" ?>
<?php include_once 'slider.php' ?>

<!-- start header -->
<!-- end header -->

<!-- start breadcrumb -->
<section class="breadcrumb_main_area margin-bottom-80">


    <div style="width: 100%; background-image: url(images/garda/sfondo_<?= $base ?>.jpg); background-color: #AB2A58"
         class="uk-background-cover uk-height-large uk-background-primary uk-inline">
        <div class="breadcrumb_main nice_title uk-overlay uk-light uk-position-center">
            <h2 class="titAlto" style="line-height: 72px;background-color: rgba(0, 0, 0, 0.0);padding-bottom: 60px">Come
                Raggiungerci</h2>
        </div>
        <div class="uk-overlay bordoSfumato uk-light uk-position-top-right">
            <span style="float: right;text-align:right;"><b>“Viaggiare è la sola cosa che compri che ti arricchisce.”</b></span>

        </div>

    </div>
</section>


<div class="other_room_area margin-bottom-80  padding-top-50">
    <div class="container">
        <div class="row">
            <div class="other_room">
                <div role="tabpanel">

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active uk-animation-fade" id="colazione">

                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin"
                                 uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <div class="contact_google_map_area margin-bottom-75">
                                        <div class="container">
                                            <div class="contact_google_map">
                                                <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyCO3xI6psC0Vdo_IHErtx4MiCZXWmjMMD4 '></script>
                                                <div style='overflow:hidden;height:850px;width:700px;'>
                                                    <div id='gmap_canvas' style='height:850px;width:700px;'></div>
                                                    <style>#gmap_canvas img {
                                                            max-width: none !important;
                                                            background: none !important
                                                        }</style>
                                                </div>
                                                <a href='http://maps-generator.com/it'>&nbsp;</a>
                                                <script type='text/javascript'
                                                        src='https://embedmaps.com/google-maps-authorization/script.js?id=c266130836df98eb7742117d064f09da561ea3c0'></script>
                                                <script type='text/javascript'>function init_map() {
                                                        var myOptions = {
                                                            zoom: 8,
                                                            center: new google.maps.LatLng(45.6125154, 10.702097999999978),
                                                            mapTypeId: google.maps.MapTypeId.HYBRID
                                                        };
                                                        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                                                        marker = new google.maps.Marker({
                                                            map: map,
                                                            position: new google.maps.LatLng(45.6125154, 10.702097999999978)
                                                        });
                                                        infowindow = new google.maps.InfoWindow({content: '<div><div style=\'float:left\'><img src=\'images/logo23.png\' width="50" style="margin-right: 16px"></div><div style=\'float:left\'><strong>Hotel Panorama Ristorante</strong><br>Via S.Zeno, 9<br>Albisano di Torri del Benaco<br>37010, Verona<br></div></div>'});
                                                        google.maps.event.addListener(marker, 'click', function () {
                                                            infowindow.open(map, marker);
                                                        });
                                                        infowindow.open(map, marker);
                                                    }
                                                    google.maps.event.addDomListener(window, 'load', init_map);</script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-heading-line"><span>In Auto</span></h3>
                                        <p>
                                        <ul>
                                            <li>Autostrada BRENNERO-MODENA-A22, uscita AFFI-LAGO DI GARDA SUD
                                            </li>
                                            <li> Autostrada MILANO-VENEZIA-A4, uscita PESCHIERA DEL GARDA
                                            </li>
                                        </ul>
                                        per entrambe le uscite seguire direzione GARDA e poi ALBISANO.
                                        </p>
                                        <br>
                                        <h3 class="uk-card-title uk-heading-line"><span>In Treno</span></h3>
                                        <p>
                                        <ul>
                                            <li>FS Peschiera del Garda + Linea autobus APTV
                                            </li>
                                            <li>FS Verona Porta Nuova + Linea autobus APTV
                                            </li>
                                            <li>FS Rovereto
                                            </li>
                                        </ul>
                                        <a class="uk-link-muted" href="http://www.trenitalia.com" target="_blank">www.trenitalia.com</a>
                                        - <a class="uk-link-muted" href="http://www.atv.verona.it" target="_blank">www.atv.verona.it</a>
                                        </p>
                                        <br>
                                        <h3 class="uk-card-title uk-heading-line"><span>In Aereo</span></h3>
                                        <p>
                                        <ul>
                                            <li>Aeroporto “Valerio Catullo” di Villafranca Veronese Verona + Linea
                                                autobus APTV<br>
                                                <a class="uk-link-muted" href="http://www.aeroportoverona.it"
                                                   target="_blank">www.aeroportoverona.it</a> - <a class="uk-link-muted"
                                                                                                   href="http://www.atv.verona.it"
                                                                                                   target="_blank">www.atv.verona.it</a>
                                            </li>
                                            <li>Aeroporto “Gabriele D’Annunzio” di Montichiari Brescia<br><a
                                                        class="uk-link-muted" href="http://www.aeroportobrescia.it"
                                                        target="_blank">www.aeroportobrescia.it</a>
                                            </li>
                                            <li>Aeroporto Internazionale “Il Caravaggio” di Orio al Serio Bergamo<br>
                                                <a class="uk-link-muted" href="http://www.orioaeroporto.it"
                                                   target="_blank">www.orioaeroporto.it</a>
                                            </li>
                                            <li>Aeroporto “Marco Polo” di Venezia<br>
                                                <a class="uk-link-muted" href="http://www.veniceairport.it"
                                                   target="_blank">www.veniceairport.it</a>
                                            </li>
                                        </ul>
                                        Su richiesta servizio di taxi transfer da/per stazioni e aeroporti (minibus).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- start contact us area -->
<?php include_once 'footer.php' ?>
<!-- end footer -->


<!-- jquery library -->
<script src="js/vendor/jquery-1.11.2.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- uikit -->
<!--<script src="js/uikit.min.js"></script>-->
<!-- <script src="js/uikit-modal.js"></script> -->
<script src="js/uikit-lightbox.js"></script>
<!-- easing -->
<script src="js/jquery.easing.1.3.min.js"></script>
<script src="js/datepicker.js"></script>
<!-- scroll up -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- owlcarousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- lightslider -->
<script src="js/lightslider.js"></script>
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

<!--<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>

    var myCenter = new google.maps.LatLng(-37.831208, 144.998499);

    function initialize() {
        var mapProp = {
            center: myCenter,
            zoom: 15,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("contactgoogleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
            animation: google.maps.Animation.BOUNCE,
            icon: 'img/google-pin-one.png'
        });

        var infowindow = new google.maps.InfoWindow({
            content: "united-states"
        });

        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>-->

</body>
</html>

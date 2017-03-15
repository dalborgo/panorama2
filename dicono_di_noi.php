<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mangiare | Hotel Panorama Ristorante</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/favicon.ico" sizes="16x16">


    <!-- fonts -->
    <!--    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Karla:700,400' rel='stylesheet' type='text/css'>-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>-->

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--    <link rel="stylesheet" href="css/uikit2.min.css" />-->

    <!-- uikit -->
    <link rel="stylesheet" href="css3/uikit.min.css" />
    <!--    <link id="data-uikit-theme" rel="stylesheet" href="css/uikit2.min.css">-->
    <!--    <link rel="stylesheet" href="https://getuikit.com/assets/uikit/dist/css/uikit.css?nc=2206" />-->
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/datepicker.css" />
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <link rel="stylesheet" href="css/rev-slider2/settings.css" />
    <!-- lightslider -->
    <link rel="stylesheet" href="css/lightslider.css">
    <!-- Theme -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
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

</head>
<body id="gallery_page" style="font-family: 'Helvetica Neue','Arial'">

<?php include_once "testa.php" ?>
<?php include_once 'slider.php' ?>
<?php include_once 'citazioni.php' ?>

<!-- start header -->
<!-- end header -->

<!-- start breadcrumb -->
<section class="breadcrumb_main_area margin-bottom-80">



    <div style="width: 100%; background-image: url(images/garda/sfondo_<?= $base ?>.jpg); background-color: #AB2A58" class="uk-background-cover uk-height-large uk-background-primary uk-inline">
        <div class="breadcrumb_main nice_title uk-overlay uk-light uk-position-center">
            <h2 class="titAlto" style="line-height: 72px;background-color: rgba(0, 0, 0, 0.0);text-shadow: 0 0 20px yellow;">Dicono di noi</h2>
        </div>
        <div class="uk-overlay bordoSfumato uk-light uk-position-top-right">
            <!--            <span style="float: right;text-align:right;"><b>“Il vero lusso, che nessuno pensa più di offrirsi, è prendersi il proprio tempo.”<br>(Paul Morand)</b></span>-->
            <!--<br>
            <span style="float: center"><b></b></span>-->
        </div>
        <!--   <div class="uk-overlay uk-light uk-position-bottom">
               <div><b>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b></div>
           </div>-->
    </div>
</section>


<div class="other_room_area margin-bottom-55  padding-top-50">
    <div class="container">
        <div class="row">
            <div class="other_room">
                <div role="tabpanel">
                    <!-- <div class="section_title content-center"> -->

                    <!-- Nav tabs -->

                    <div class="container">
                        <div class="section_title">
                            <ul class="nav nav-tabs margin-bottom-60 uk-flex-center " role="tablist" uk-tab>
                                <li role="presentation" class="active"><a href="#i1" aria-controls="deluxe_room" role="tab" data-toggle="tab" aria-expanded="true" >Guide e Riviste</a></li>
                                <li role="presentation"><a href="#i2" aria-controls="deluxe_room" role="tab" data-toggle="tab">Clienti</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- <div class="section_content"> -->
                        <div role="tabpanel" class="tab-pane active uk-animation-fade" id="i1">

                            <div class="uk-card uk-card-default uk-grid-collapse  uk-margin" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-background-cover uk-card-media-top" align="center">
                                       <img src="images/garda/spalla_<?= $base ?>.jpg" alt="dicono di noi">
                                    </div>
                                    <!--<div id="modal-center2" uk-modal="center: true" >
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-outside" type="button" uk-close></button>
                                            <img src="images/mangiare/colazione/c2.jpg" alt="">
                                        </div>
                                    </div>-->
                                </div>
                                <div class="uk-width-2-3@s">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-heading-line titoloBasso4" style="line-height: 60px"><span>Guide e riviste</span></h3>
                                        <ul uk-accordion="collapsible: false">
                                            <?= $cita ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane uk-animation-fade" id="i2">

                            <div class="uk-card uk-card-default uk-grid-collapse uk-margin" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-card-media-left uk-cover-container" align="center">
                                        <img src="images/garda/spalla_<?= $base ?>.jpg" alt="dicono di noi">
                                    </div>
                                   <!-- <div id="modal-center3" uk-modal="center: true" >
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-outside" type="button" uk-close></button>
                                            <img src="images/mangiare/colazione/c4.jpg" alt="mezza pensione">
                                        </div>
                                    </div>-->
                                </div>
                                <div class="uk-width-2-3@s">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-heading-line titoloBasso4" style="line-height: 60px"><span>Clienti</span></h3>
                                        <div id="TA_selfserveprop235" class="TA_selfserveprop" style="font-size:30pt"><ul id="lHZGs6" class="TA_links BmzAr8s"><li id="h84u7tKVgdb" class="h5aHiXERxX" ><a target="_blank" href="https://www.tripadvisor.it/"><img src="https://www.tripadvisor.it/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=235&amp;locationId=665073&amp;lang=it&amp;rating=false&amp;nreviews=4&amp;writereviewlink=false&amp;popIdx=false&amp;iswide=true&amp;border=false&amp;display_version=2"></script>
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


</body>
</html>

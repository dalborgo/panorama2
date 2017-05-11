<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dormire | Hotel Panorama Ristorante</title>
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
    <!--    <link rel="stylesheet" href="css/datepicker.css" />-->
    <!-- Owl carousel 2 css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- rev slider -->
    <!--    <link rel="stylesheet" href="css/rev-slider2/settings.css" />-->
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
    <link href="js/ks/ks_booking.css" rel="stylesheet" type="text/css" />
    <script language="javascript" src="js/ks/ks_booking_calendar.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">
        var cal_1 = new CalendarPopup("ks_booking_cal_1_div", "it"); // Secondo parametro => lingua ("it" per l'italiano, "en" per l'inglese)
        var cal_2 = new CalendarPopup("ks_booking_cal_2_div", "it"); // Secondo parametro => lingua ("it" per l'italiano, "en" per l'inglese)
    </script>
    <script language="javascript" type="text/javascript">document.write(getCalendarStyles());</script>
    <script language="javascript" type="text/javascript" src="js/ks/ks_booking_func.js"></script>
</head>
<body id="room_detail_page" style="font-family: 'Helvetica Neue','Arial'">

<?php include_once "testa.php" ?>
<?php include_once "facilities.php" ?>
<?php include_once 'prenota.php' ?>
<?php include_once 'slider.php' ?>

<!-- start header -->
<!-- end header -->

<!-- start breadcrumb -->

<section class="breadcrumb_main_area margin-bottom-80">



    <div style="width: 100%; background-image: url(images/garda/sfondo_<?= $base ?>.jpg); background-color: #E14C97" class="uk-background-cover uk-height-large uk-background-primary uk-inline">
        <div class="breadcrumb_main nice_title uk-overlay uk-light uk-position-center">
            <h2 class="titAlto" style="line-height: 72px;background-color: rgba(0, 0, 0, 0.0);text-shadow: 0 0 20px #223E60;">Solarium Superior</h2>
        </div>
        <div class="uk-overlay bordoSfumato uk-light uk-position-top-right">
            <span style="float: right;text-align:right"><b>“Il sonno è per tutti gli uomini ciò che la carica è per l’orologio.”<br>(Arthur Schopenhauer)</b></span>
            <!--<br>
            <span style="float: center"><b></b></span>-->
        </div>
        <!--   <div class="uk-overlay uk-light uk-position-bottom">
               <div><b>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</b></div>
           </div>-->
    </div>
</section>
<!--<div class="uk-background-blend-multiply uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(images/garda/garda2.jpg);">
    <p class="uk-h4">Multiply</p>
</div>-->
<!-- end breadcrunb -->
<div class="room_detail_main margin-bottom-55">
    <div class="container" uk-scrollspy="cls:uk-animation-fade">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section_title content-left margin-bottom-5"
                     style="padding:20px">
                    <!--                    <h4 class="uk-card-title"></h4>-->
                    <div class="section_title nice_title content-center" style="height: 70%;" uk-scrollspy="cls: uk-animation-slide-left; repeat: false">
                        <h3 class=""><div class="titoloBasso2">Dormire</div><span class="titoloBasso">Enjoy the Silence</span></h3>
                    </div>

                </div>
                <div class="room_facilities_des padding-top-40 padding-bottom-20 ">
                    <p class="text-justify">
                        Tutte le nostre camere sono state recentemente rinnovate ed arredate ognuna in stile e colori diversi, troverete ogni confort, comodi cuscini e materassi per garantirVi un riposo sereno e poterVi così rigenerare nella quite più assoluta. L'Hotel Panorama Ristorante è un edificio situato in centro storico per questo motivo le camere pur essendo della stessa categoria possono variare nelle dimensioni.<br><br>
                        Check-In: dalle ore 14:00 / Check-Out: <b>entro le ore 11:00.</b>
                    </p>
                </div>
            </div>
        </div>
        <div class="row margin-top-115">
            <div class="col-lg-9 col-md-9">
                <div class="deluxe_room_detail">
                    <div class="section_title content-left margin-bottom-5">

                        <h3 class="uk-heading-bullet uk-heading-line"><span class="titoloBasso3">Stanza Solarium Superior</span>
                        </h3>
                    </div>
                    <div class="section_content margin-top-10">
                        <p>
                            Con roof-garden e grande terrazza vista lago.
                        </p>
                        <div class="showcase">
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <?= getSlider('solarium') ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="facil margin-top-65">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="section_title margin-bottom-35 padding-bottom-25 border-bottom-whitesmoke">
                                                <h5 class="uk-heading-bullet uk-heading-line">Servizi Stanza "Solarium Superior"</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Pavimento in legno','floor') ?>
                                                <?= get_fac('Doccia','doccia2','Bagno completo con doccia') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">

                                                <?= get_fac('TV sat','tv2','TV sat schermo piatto') ?>
                                                <?= get_fac('Nécessaire','necess','Nécessaire personalizzato con beauty kit all’olio d’oliva (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Wi-fi','wifi') ?>
                                                <?= get_fac('Asciugacapelli','asciuga') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Aria condizionata','risc1') ?>
                                                <?= get_fac('Riscaldamento','risc') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Telefono','telefono','Telefono con chiamata diretta') ?>
                                                <?= get_fac('Frigorifero','fridge', 'Frigorifero con acqua minerale (all’arrivo)') ?>
                                                <?= get_fac('Ombrellone','ombre') ?>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Cassetta di sicurezza','sicurezza') ?>
                                                <?= get_fac('Tavolo e sedie','tavolino', 'Tavolo e sedie da esterno') ?>
                                                <?= get_fac('Plaid per esterno','plaid') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Telo piscina','telo','Telo piscina (all’arrivo)') ?>
                                                <?= get_fac('Specchietto','236', 'Specchieto ingranditore') ?>
                                                <?= get_fac('Bollitore','bollitore3', 'Bollitore con kit di benvenuto') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <ul class="">
                                                <?= get_fac('Set da scrittura','scrittura') ?>
                                                <?= get_fac('Lettino prendisole','sdraio') ?>
                                                <!--                                                --><?//= get_fac('Cassetta di sicurezza','sicurezza') ?>
                                                <!--                                                --><?//= get_fac('Riscaldamento','risc2') ?>
                                            </ul>
                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-3">
                <!-- start hotel booking -->
                <?= prenota('Solarium Superior') ?>
                <!-- end hotel booking -->
            </div>
            <hr class=" margin-top-80">
            <ul class="tabPers uk-flex-center uktab" style="border:none;padding: 10px">
                <li><a href="#" style="cursor: default;color: #E14C97">Stanze:</a></li>
                <li><a href="village.php" >“Village”</a></li>
                <li><a href="lake.php">“Lake”</a></li>
                <li><a href="solarium.php"><span style="color: #333; border-bottom: 1px solid #A82B57;cursor: default;">“Solarium Superior”</span></a></li>
                <li><a href="garden.php">“Garden Superior”</a></li>
            </ul>
            <hr class="">
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
<!--<script src="js/datepicker.js"></script>-->
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

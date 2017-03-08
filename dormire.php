<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Camera Singola | Hotel Demo Garda</title>
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

</head>
<body id="room_detail_page" style="font-family: 'Helvetica Neue'">

<?php include_once "testa.php" ?>
<?php include_once "facilities.php" ?>
<?php include_once 'prenota.php' ?>

<!-- start header -->
<!-- end header -->

<!-- start breadcrumb -->

<section class="breadcrumb_main_area margin-bottom-80">



    <div style="width: 100%; background-image: url(images/garda/sfondo_dormire.jpg); background-color: #AB2A58" class="uk-background-cover uk-height-large uk-background-primary uk-inline">
        <div class="breadcrumb_main nice_title uk-overlay uk-light uk-position-center">
            <h2 style="font-size: 48pt;background-color: rgba(0, 0, 0, 0.6);padding: 40px">Dormire</h2>
        </div>
        <div class="uk-overlay bordoSfumato uk-light uk-position-top-right">
            <span style="float: right"><b>“Il sonno è per tutti gli uomini ciò che la carica è per l’orologio.”</b></span>
            <br>
            <span style="float: right"><b>(Arthur Schopenhauer)</b></span>
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
                <div class="section_title content-left margin-bottom-5"  uk-scrollspy="cls: uk-animation-slide-left; repeat: false"
                     style="padding:20px">
                    <!--                    <h4 class="uk-card-title"></h4>-->
                    <div class="section_title nice_title content-center" style="height: 70%;">
                       <h3 class=""><span>Enjoy the silence</span></h3>
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
        <p><a id="target1" class="uk-button"></a></p>
        <ul uk-tab class="tabPers uk-flex-center" style="border:none">
            <li><a href="#target1" uk-scroll=""><span style="color: #333; border-bottom: 1px solid #A82B57;">“Village”</span></a></li>
            <li><a href="#target2" uk-scroll="">“Lake”</a></li>
            <li><a href="#target3" uk-scroll="">“Solarium Superior”</a></li>
            <li><a href="#target4" uk-scroll="">“Garden Superior”</a></li>
        </ul>
        <div class="row margin-top-115">
            <div class="col-lg-9 col-md-9">
                <div class="deluxe_room_detail">
                    <div class="section_title content-left margin-bottom-5">

                        <h3 class="uk-heading-bullet uk-heading-line"><span>“Village”</span>
                        </h3>
                    </div>
                    <div class="section_content margin-top-10">
                        <p>
                            Con vista sul paese di Albisano.
                        </p>
                        <div class="showcase margin-top-35">
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="clearfix" style="">
                                            <ul class="gallery list-unstyled cS-hidden image-gallery2">
                                                <!-- <ul id="vertical" class="gallery list-unstyled"> -->
                                                <li data-thumb="img/lightslider-img/cS-52.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-52.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-51.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-51.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-50.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-50.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-49.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-49.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-48.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-48.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-47.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-47.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-46.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-46.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-45.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-45.jpg" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="facilities_name clearfix margin-bottom-30 margin-top-65">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="section_title margin-bottom-35 padding-bottom-25 border-bottom-whitesmoke">
                                                <h5>Servizi "Village"</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Pavimento in ceramica','pav') ?>
                                                <?= get_fac('Doccia','doccia','Bagno completo con doccia') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">

                                                <?= get_fac('TV sat','tv2','TV sat schermo piatto') ?>
                                                <?= get_fac('Nécessaire','necess','Nécessaire personalizzato con beauty kit all’olio d’oliva (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Wi-fi','wifi') ?>
                                                <?= get_fac('Asciugacapelli','asciuga') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Aria condizionata','freddo') ?>
                                                <?= get_fac('Riscaldamento','risc2') ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facilities_name clearfix margin-bottom-30">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telefono','telefono','Telefono con chiamata diretta') ?>
                                                <?= get_fac('Frigorifero','frigo2', 'Frigorifero con acqua minerale (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Cassetta di sicurezza','sicurezza') ?>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telo piscina','telo','Telo piscina (all’arrivo)') ?>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Set da scrittura','scrittura') ?>
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
                <?= prenota('“VILLAGE”') ?>
                <!-- end hotel booking -->
            </div>
        </div>
        <p><a id="target2" class="uk-button"></a></p>
        <ul uk-tab class="tabPers uk-flex-center" style="border:none">
            <li><a href="#target1" uk-scroll="">“Village”</a></li>
            <li><a href="#target2" uk-scroll=""><span style="color: #333; border-bottom: 1px solid #A82B57;">“Lake”</span></a></li>
            <li><a href="#target3" uk-scroll="">“Solarium Superior”</a></li>
            <li><a href="#target4" uk-scroll="">“Garden Superior”</a></li>
        </ul>
        <div class="row margin-top-80">
            <div class="col-lg-9 col-md-9">
                <div class="deluxe_room_detail">
                    <div class="section_title content-left margin-bottom-5">
                        <h3 class="uk-heading-bullet uk-heading-line"><span>“Lake”</span>
                        </h3>
                    </div>
                    <div class="section_content margin-top-10">
                        <p>
                            Con balcone vista lago.
                        </p>
                        <div class="showcase margin-top-35">
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="clearfix" style="">
                                            <ul class="gallery list-unstyled cS-hidden image-gallery2">
                                                <!-- <ul id="vertical" class="gallery list-unstyled"> -->
                                                <li data-thumb="img/lightslider-img/cS-52.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-52.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-51.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-51.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-50.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-50.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-49.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-49.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-48.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-48.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-47.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-47.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-46.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-46.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-45.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-45.jpg" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="facilities_name clearfix margin-bottom-30 margin-top-65">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="section_title margin-bottom-35 padding-bottom-25 border-bottom-whitesmoke">
                                                <h5>Servizi "Lake"</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Pavimento in ceramica','pav') ?>
                                                <?= get_fac('Doccia','doccia','Bagno completo con doccia') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">

                                                <?= get_fac('TV sat','tv2','TV sat schermo piatto') ?>
                                                <?= get_fac('Nécessaire','necess','Nécessaire personalizzato con beauty kit all’olio d’oliva (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Wi-fi','wifi') ?>
                                                <?= get_fac('Asciugacapelli','asciuga') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Aria condizionata','freddo') ?>
                                                <?= get_fac('Riscaldamento','risc2') ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facilities_name clearfix margin-bottom-30">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telefono','telefono','Telefono con chiamata diretta') ?>
                                                <?= get_fac('Frigorifero','frigo2', 'Frigorifero con acqua minerale (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Cassetta di sicurezza','sicurezza') ?>
                                                <?= get_fac('Tavolo e sedie da esterno','tavolino') ?>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telo piscina','telo','Telo piscina (all’arrivo)') ?>

                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Set da scrittura','scrittura') ?>
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
                <?= prenota('“LAKE”') ?>
                <!-- end hotel booking -->
            </div>
        </div>
        <p><a id="target3" class="uk-button"></a></p>
        <ul uk-tab class="tabPers uk-flex-center" style="border:none">
            <li><a href="#target1" uk-scroll="">“Village”</a></li>
            <li><a href="#target2" uk-scroll="">“Lake”</a></li>
            <li><a href="#target3" uk-scroll=""> <span style="color: #333; border-bottom: 1px solid #A82B57;">“Solarium Superior”</span></a></li>
            <li><a href="#target4" uk-scroll="">“Garden Superior”</a></li>
        </ul>
        <div class="row margin-top-80">
            <div class="col-lg-9 col-md-9">
                <div class="deluxe_room_detail">
                    <div class="section_title content-left margin-bottom-5">
                        <h3 class="uk-heading-bullet uk-heading-line"><span>“Solarium Superior”</span>
                        </h3>
                    </div>
                    <div class="section_content margin-top-10">
                        <p>
                            Con balcone e giardino privato vista lago.
                        </p>
                        <div class="showcase margin-top-35">
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="clearfix" style="">
                                            <ul class="gallery list-unstyled cS-hidden image-gallery2">
                                                <!-- <ul id="vertical" class="gallery list-unstyled"> -->
                                                <li data-thumb="img/lightslider-img/cS-52.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-52.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-51.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-51.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-50.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-50.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-49.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-49.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-48.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-48.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-47.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-47.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-46.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-46.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-45.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-45.jpg" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="facilities_name clearfix margin-bottom-30 margin-top-65">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="section_title margin-bottom-35 padding-bottom-25 border-bottom-whitesmoke">
                                                <h5>Servizi “Solarium Superior”</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Pavimento in ceramica','pav') ?>
                                                <?= get_fac('Doccia','doccia','Bagno completo con doccia') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">

                                                <?= get_fac('TV sat','tv2','TV sat schermo piatto') ?>
                                                <?= get_fac('Nécessaire','necess','Nécessaire personalizzato con beauty kit all’olio d’oliva (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Wi-fi','wifi') ?>
                                                <?= get_fac('Asciugacapelli','asciuga') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Aria condizionata','freddo') ?>
                                                <?= get_fac('Riscaldamento','risc2') ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facilities_name clearfix margin-bottom-30">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telefono','telefono','Telefono con chiamata diretta') ?>
                                                <?= get_fac('Frigorifero','frigo2', 'Frigorifero con acqua minerale (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Cassetta di sicurezza','sicurezza') ?>
                                                <?= get_fac('Tavolo e sedie da esterno','tavolino') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telo piscina','telo','Telo piscina (all’arrivo)') ?>
                                                <?= get_fac('Specchietto ingranditore','') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Set da scrittura','scrittura') ?>
                                                <?= get_fac('Lettini prendisole','sdraio','Lettini e sdraio prendisole') ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facilities_name clearfix margin-bottom-30">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Ombrellore','') ?>


                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Plaid','','Plaid per esterno') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Bollitore','bollitore3','Bollitore con kit di benvenuto') ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!--            <a id="target3"></a>-->
            <div class="col-lg-3 col-md-3">
                <!-- start hotel booking -->
                <?= prenota('“Solarium Superior”') ?>
                <!-- end hotel booking -->
            </div>
        </div>
        <p><a id="target4" class="uk-button"></a></p>
        <ul uk-tab class="tabPers uk-flex-center" style="border:none">
            <li><a href="#target1" uk-scroll="">“Village”</a></li>
            <li><a href="#target2" uk-scroll="">“Lake”</a></li>
            <li><a href="#target3" uk-scroll="">“Solarium Superior”</a>
            <li><a href="#target4" uk-scroll=""> <span style="color: #333; border-bottom: 1px solid #A82B57;">“Garden Superior”</span></a></li>
        </ul>
        <div class="row margin-top-80">
            <div class="col-lg-9 col-md-9">
                <div class="deluxe_room_detail">
                    <div class="section_title content-left margin-bottom-5">
                        <h3 class="uk-heading-bullet uk-heading-line"><span>“Garden Superior”</span>
                        </h3>
                    </div>
                    <div class="section_content margin-top-10">
                        <p>
                            Con roof-garden e grande terrazza vista lago.
                        </p>
                        <div class="showcase margin-top-35">
                            <div class="section_description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="clearfix" style="">
                                            <ul class="gallery list-unstyled cS-hidden image-gallery2">
                                                <!-- <ul id="vertical" class="gallery list-unstyled"> -->
                                                <li data-thumb="img/lightslider-img/cS-52.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-52.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-51.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-51.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-50.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-50.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-49.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-49.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-48.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-48.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-47.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-47.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-46.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-46.jpg" />
                                                </li>
                                                <li data-thumb="img/lightslider-img/cS-45.jpg">
                                                    <img alt="slider" src="img/lightslider-img/cS-45.jpg" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="facilities_name clearfix margin-bottom-30 margin-top-65">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="section_title margin-bottom-35 padding-bottom-25 border-bottom-whitesmoke">
                                                <h5>Servizi “Solarium Superior”</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Pavimento in ceramica','pav') ?>
                                                <?= get_fac('Doccia','doccia','Bagno completo con doccia') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">

                                                <?= get_fac('TV sat','tv2','TV sat schermo piatto') ?>
                                                <?= get_fac('Nécessaire','necess','Nécessaire personalizzato con beauty kit all’olio d’oliva (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Wi-fi','wifi') ?>
                                                <?= get_fac('Asciugacapelli','asciuga') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Aria condizionata','freddo') ?>
                                                <?= get_fac('Riscaldamento','risc2') ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facilities_name clearfix margin-bottom-30">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telefono','telefono','Telefono con chiamata diretta') ?>
                                                <?= get_fac('Frigorifero','frigo2', 'Frigorifero con acqua minerale (all’arrivo)') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Cassetta di sicurezza','sicurezza') ?>
                                                <?= get_fac('Tavolo e sedie da esterno','tavolino') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Telo piscina','telo','Telo piscina (all’arrivo)') ?>
                                                <?= get_fac('Specchietto ingranditore','') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Set da scrittura','scrittura') ?>
                                                <?= get_fac('Lettini prendisole','sdraio','Lettini e sdraio prendisole') ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="facilities_name clearfix margin-bottom-30">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 padding-left">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Ombrellore','') ?>


                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Plaid','','Plaid per esterno') ?>
                                            </ul>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <ul class="single_facilities_name clearul">
                                                <?= get_fac('Bollitore','bollitore3','Bollitore con kit di benvenuto') ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <a id="target3"></a>-->
            <div class="col-lg-3 col-md-3">
                <!-- start hotel booking -->
                <?= prenota('“Garden Superior”') ?>
                <!-- end hotel booking -->
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

<!--Opacity & Other IE fix for older browser-->
<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
<![endif]-->



<!-- my js -->
<script src="js/main.js"></script>


</body>
</html>

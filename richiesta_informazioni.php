<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Info | Hotel Panorama Ristorante</title>
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

</head>
<body id="gallery_page" style="font-family: 'Helvetica Neue','Arial'">

<?php include_once "testa.php" ?>
<?php include_once 'slider.php' ?>
<?php include_once 'citazioni.php' ?>

<!-- start header -->
<!-- end header -->

<!-- start breadcrumb -->
<section class="breadcrumb_main_area margin-bottom-80">


    <div style="width: 100%; background-image: url(images/garda/sfondo_<?= $base ?>.jpg); background-color: #AB2A58"
         class="uk-background-cover uk-height-large uk-background-primary uk-inline">
        <div class="breadcrumb_main nice_title uk-overlay uk-light uk-position-center">
            <h2 class="titAlto"
                style="line-height: 72px;background-color: rgba(0, 0, 0, 0.0);text-shadow: 0 0 20px #710F0B;padding: 10px 10px 40px 10px">
                Richiesta informazioni</h2>
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
                                 <li role="presentation" class="active"><a href="#colazione" aria-controls="deluxe_room" role="tab" data-toggle="tab" aria-expanded="true" >Contattaci</a></li>
                                 <li role="presentation"><a href="#mezzapensione" aria-controls="deluxe_room" role="tab" data-toggle="tab">Scarica la nostra Brochure</a></li>
                             </ul>
                         </div>
                     </div>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- <div class="section_content"> -->
                        <div role="tabpanel" class="tab-pane active uk-animation-fade" id="colazione">
                            <div class="uk-card uk-card-default uk-grid-collapse  uk-margin" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-card-media-left uk-cover-container">
                                        <a href="#modal-center3" uk-toggle> <img src="images/mangiare/colazione/c3.jpg"
                                                                                 alt="mezza pensione">
                                        </a>
                                    </div>
                                    <div id="modal-center3" uk-modal="center: true">
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-outside" type="button" uk-close></button>
                                            <img src="images/mangiare/colazione/c4.jpg" alt="mezza pensione">
                                        </div>
                                    </div>
                                </div>

                                <div class="uk-width-2-3@s">
                                    <div class="uk-card-body" style="padding-bottom:0px">
                                        <h3 class="uk-card-title uk-heading-line titoloBasso4"><span>Contattaci</span></h3>


                                        <div class="send_mail">
                                            <form method="post" id="contact-form" action="php/contact-form.php"
                                                  novalidate="novalidate">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <input id="name" type="text" placeholder="Nome *" name="name"
                                                               required data-msg-required="Inserisci il Nome.">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 ">
                                                        <input id="lname" type="text" placeholder="Cognome *" required
                                                               name="lname" data-msg-required="Inserisci il Cognome.">
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input id="email" type="email" placeholder="E-mail *" required
                                                               name="email" data-msg-required="Inserisci l'Email."
                                                               data-msg-email="Inserisci un indirizzo email valido."/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <input id="phone" type="text" placeholder="Telefono *" required
                                                               name="phone"
                                                               data-msg-required="Inserisci il numero di Telefono."/>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12">
                                                        <textarea id="message" name="message" placeholder="Messaggio *"
                                                                  required
                                                                  data-msg-required="Inserisci il Messaggio."></textarea>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4">
                                                        <!-- <a href="#" class="btn btn-warning btn-md"></a> -->
                                                        <input class="btn btn-warning btn-md" style="font-size:12pt"
                                                               type="submit" data-loading-text="Carica..." name="submit"
                                                               value="INVIA"/>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="alert alert-success hidden" id="contactSuccess">
                                                <strong>Inviato!</strong> Il tuo messaggio è stato spedito.
                                            </div>

                                            <div class="alert alert-danger hidden" id="contactError">
                                                <strong>Errore!</strong> C'è stato un errore nella spedizione.
                                            </div>

                                        </div>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane uk-animation-fade" id="mezzapensione">

                            <div class="uk-card uk-card-default uk-grid-collapse uk-margin" uk-grid>
                                <div class="uk-width-1-3@s">
                                    <div class="uk-card-media-left uk-cover-container">

                                        <a href="#modal-center3" uk-toggle> <img src="images/mangiare/colazione/c3.jpg"
                                                                                 alt="mezza pensione">
                                        </a>
                                    </div>
                                    <div id="modal-center3" uk-modal="center: true">
                                        <div class="uk-modal-dialog">
                                            <button class="uk-modal-close-outside" type="button" uk-close></button>
                                            <img src="images/mangiare/colazione/c4.jpg" alt="mezza pensione">
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-width-2-3@s">
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-heading-line titoloBasso4"><span>Depliant</span>
                                        </h3>
                                        <p>
                                        <ul>
                                            <li><a href="pdf/brochure.pdf" class="uk-link-muted" target="_blank" style="text-decoration: none;"><i class="fa fa-file-pdf-o"></i> Hotel Panorama Ristorante</a>
                                            </li>
                                        </ul>
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

<!-- FORMS VALIDATION	-->
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact-form-validation.min.js"></script>


<!-- my js -->
<script src="js/main.js"></script>


</body>
</html>


    <div class="ks_booking" style="margin-top:0px;width:100%;z-index:300;left: calc(50% - 17%);position:absolute">
       <!-- <h1><span style="font-size: 13pt"></span><span class="titoloBasso"
                                                                  style="color:white;line-height: 50px">Prenota</span>
        </h1>-->

        <form name="ks_booking_form" target="_blank" method="post"
              action="https://secure.kosmosol.it/booking/check-availability.php?h=panorama-torridelbenaco&l=it"
              onsubmit="return controllaForm_it();"
        <div class="row">
            <div class="col-lg-12 col-md-12">
                  <b>Data di arrivo</b>

                    <input type="text" id="bd" name="bd" class="it" value=""/>
                    <a href="#"
                           onclick="cal_1.select(document.forms[\'ks_booking_form\'].bd, document.forms[\'ks_booking_form\'].ed, \'ks_booking_cal_1\', \'dd/MM/yyyy\'); return false;"
                           name="ks_booking_cal_1" id="ks_booking_cal_1"><img src="js/ks/ks_booking_calendar.png"
                                                                              width="19" height="20" alt="" border="0"
                                                                              style="margin-left:7px;"/></a>
                   <b>Data di partenza</b>
                   <input type="text" id="ed" name="ed" class="it" value=""/>
                    <a href="#"
                           onclick="cal_2.select(document.forms[\'ks_booking_form\'].ed, null, \'ks_booking_cal_2\', \'dd/MM/yyyy\'); return false;"
                           name="ks_booking_cal_2" id="ks_booking_cal_2"><img src="js/ks/ks_booking_calendar.png"
                                                                              width="19" height="20" alt="" border="0"
                                                                              style="margin-left: 7px;"/></a>
                    <input type="submit" class="button" value="VERIFICA DISPONIBILITA\'"/>
                    <input type="hidden" name="ca" value="1"/>

            </div>

        </form>


    </div>
    <!--<button id="mios"
            onclick="window.open(\'https://partner.erv-italia.it/app_partner/apri/veronesi/b6e0f0288a7894f22e26fd7b4c30af64cf1f0cfa764882d4725c684bee8170c8/toprod/stornohotel_formulapartner/classeA\')"
            class="uk-button uk-button-secondary"><b>SCOPRI COME ASSICURARE LA TUA VACANZA</b></button>-->


        <div id="ks_booking_cal_1_div"
             style="position: absolute; visibility: hidden; background-color: white; z-index:10000;"></div>
        <div id="ks_booking_cal_2_div"
             style="position: absolute; visibility: hidden; background-color: white; z-index:10000;"></div>
<?php
function prenota($tit){
    $out='
<div align="center">
<div class="ks_booking">
       <h1><span style="font-size: 13pt;line-height: 40px">Prenota</span><br><span class="titoloBasso4" style="color:white;">Stanza '.$tit.'</span></h1>
      
      <form name="ks_booking_form" target="_blank" method="post" action="https://secure.kosmosol.it/booking/check-availability.php?h=panorama-torridelbenaco&l=it"  onsubmit="return controllaForm_it();" >

  
      <table cellspacing="0" cellpadding="0" border="0" style="margin: 15px 0px 15px 0px;">
        <tr>
          <td colspan="2"><strong>Data di arrivo</strong></td>
        </tr>
        <tr>
          <td><input type="text" id="bd" name="bd" class="it" value="" /></td>
          <td><a href="#" onclick="cal_1.select(document.forms[\'ks_booking_form\'].bd, document.forms[\'ks_booking_form\'].ed, \'ks_booking_cal_1\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_1" id="ks_booking_cal_1"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left:7px;" /></a></td>
        </tr>
        <tr>
          <td colspan="2" style="padding-top: 10px;"><strong>Data di partenza</strong></td>
        </tr>
        <tr>
          <td><input type="text" id="ed" name="ed" class="it" value="" /></td>
          <td><a href="#" onclick="cal_2.select(document.forms[\'ks_booking_form\'].ed, null, \'ks_booking_cal_2\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_2" id="ks_booking_cal_2"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left: 7px;" /></a></td>
        </tr>
     
      </table>
      <input type="submit" class="button" value="VERIFICA DISPONIBILITA\'" />
      <input type="hidden" name="ca" value="1" />
      </form>
      </div>
<div><button id="mios" onclick="window.open(\'pdf/brochure.pdf\')"  class="uk-button uk-button-secondary"><b><i class="fa fa-download"></i> &nbsp;SCARICA LA NOSTRA BROCHURE</b></button></div>
    <button id = "mios2" onclick = "window.open(\'https://partner.erv-italia.it/app_partner/apri/veronesi/b6e0f0288a7894f22e26fd7b4c30af64cf1f0cfa764882d4725c684bee8170c8/toprod/stornohotel_formulapartner/classeA\')"  class="uk-button uk-button-secondary" ><b > SCOPRI COME ASSICURARE LA TUA VACANZA </b></button >  
    
  </div>
  </div>
  <div id="ks_booking_cal_1_div" style="position: absolute; visibility: hidden; background-color: white; z-index:10000;"></div>
  <div id="ks_booking_cal_2_div" style="position: absolute; visibility: hidden; background-color: white; z-index:10000;"></div>
  

    ';
    return $out;
}
?>

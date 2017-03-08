<?php
function prenota($tit){
    $out='
<div class="ks_booking hidden-xs" style="position: absolute;z-index: 300;margin-top:0px;width:800px;left: calc(50% - 400px);">

      
      <form name="ks_booking_form2" target="_blank" method="post" action="https://secure.kosmosol.it/booking/check-availability.php?h=panorama-torridelbenaco&l=it"  onsubmit="return controllaForm_it2();" >

      <!--
        MODIFICARE IL TAG FORM (obbligatorio):
        - action => Indirizzo booking online, al quale va passata la lingua tramite parametro GET (l=it per l\'italiano, l=en per l\'inglese).
        - onsubmit => Funzione di controllo dei parametri, modificabile nel file "ks_booking_func.js" (controllaForm_it() per l\'italiano, controllaForm_en() per l\'inglese).
      -->
      
      <table cellspacing="0" cellpadding="0" border="0" style="margin: 15px 0px 15px 0px;width: 100%">
        <tr>
          <td  style="vertical-align: middle;text-align: right"><strong>Data di arrivo:</strong></td>
        
          <td style="vertical-align: middle"><input type="text" id="bd" name="bd" class="it" value="" /><a href="#" onclick="cal_1.select(document.forms[\'ks_booking_form2\'].bd, document.forms[\'ks_booking_form2\'].ed, \'ks_booking_cal_4\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_4" id="ks_booking_cal_4"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left:7px;" /></a></td>
        
          <td  style="vertical-align: middle;text-align: right"><strong>Data di partenza:</strong></td>
        
          <td style="vertical-align: middle"><input type="text" id="ed" name="ed" class="it" value="" /><a href="#" onclick="cal_2.select(document.forms[\'ks_booking_form2\'].ed, null, \'ks_booking_cal_3\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_3" id="ks_booking_cal_3"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left: 7px;" /></a></td>
          <td style="vertical-align: middle"> <input type="submit" class="button" value="VERIFICA DISPONIBILITA\'" />
      <input type="hidden" name="ca" value="1" /></td>
        </tr>
       

      </table>
     
      </form>
      

      
    </div>
 <div id="ks_booking_cal_4_div" style="position: absolute; visibility: hidden; background-color: white; z-index:1000;"></div>
  <div id="ks_booking_cal_3_div" style="position: absolute; visibility: hidden; background-color: white; z-index:1000;"></div>
  </div>
  
  <div class="ks_booking hidden-sm hidden-md hidden-lg" style="padding: 10px 10px 20px">
      <form name="ks_booking_form" target="_blank" method="post" action="https://secure.kosmosol.it/booking/check-availability.php?h=panorama-torridelbenaco&l=it"  onsubmit="return controllaForm_it();" >

      <!--
        MODIFICARE IL TAG FORM (obbligatorio):
        - action => Indirizzo booking online, al quale va passata la lingua tramite parametro GET (l=it per l\'italiano, l=en per l\'inglese).
        - onsubmit => Funzione di controllo dei parametri, modificabile nel file "ks_booking_func.js" (controllaForm_it() per l\'italiano, controllaForm_en() per l\'inglese).
      -->
      
      <table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
        <tr>
          <tr><td style="text-align:right;vertical-align: middle"><strong>Data di arrivo:</strong></td>
        
          <td><input style="margin-top:10px;margin-bottom: 10px" type="text" id="bd" name="bd" class="it" value="" /><a href="#" onclick="cal_1.select(document.forms[\'ks_booking_form\'].bd, document.forms[\'ks_booking_form\'].ed, \'ks_booking_cal_1\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_1" id="ks_booking_cal_1"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left:7px;" /></a></td></tr>
        
          <tr><td style="text-align:right;vertical-align: middle"><strong>Data di partenza:</strong></td>
        
          <td ><input style="margin-top:10px;margin-bottom:5px" type="text" id="ed" name="ed" class="it" value="" /><a href="#" onclick="cal_2.select(document.forms[\'ks_booking_form\'].ed, null, \'ks_booking_cal_2\', \'dd/MM/yyyy\'); return false;" name="ks_booking_cal_2" id="ks_booking_cal_2"><img src="js/ks/ks_booking_calendar.png" width="19" height="20" alt="" border="0" style="margin-left: 7px;" /></a></td></tr>
          <tr><td colspan="2" style="text-aling:center"><input type="submit" class="button" value="VERIFICA DISPONIBILITA\'"  style="margin-top:20px">
      <input type="hidden" name="ca" value="1" /></td></tr>
        </tr>
       

      </table>
     
      </form>
      

      
    </div>

  </div>
  <div id="ks_booking_cal_1_div" style="position: absolute; visibility: hidden; background-color: white; z-index:1000;"></div>
  <div id="ks_booking_cal_2_div" style="position: absolute; visibility: hidden; background-color: white; z-index:1000;"></div>

    ';
    return $out;
}
?>

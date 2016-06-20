<?PHP


$main_content .= '
<b>SMS DONATION</b></CENTER><br /><br />

<ol>
	<li>Enter your account number.</li>
	<li>Choose your payment price.</li>
	<li>Click on the red Pay by mobile button.</li>
	<li>Follow the instructions.</li>
	<li>Your points will be added automatically.</li>

</ol>
</br>
<center><b><li>10 Premium Points for 10 BRL</li>
<li>20 Premium Points for 20 BRL</li>
<li>30 Premium Points for 30 BRL</li>
<li>50 Premium Points for 40 BRL</li>
</center></b>

</br>
';

$main_content .= '<center>
<!-- PayGol JavaScript -->
<script src="http://www.paygol.com/micropayment/js/paygol.js" type="text/javascript"></script> 

<!-- PayGol Form -->
<form name="pg_frm">
 Enter account number:<p>
 <input type="text" name="pg_custom" value=""><p>
 <input type="hidden" name="pg_serviceid" value="353444">
 <input type="hidden" name="pg_currency" value="BRL">
 <input type="hidden" name="pg_name" value="Premium Points">

 <!-- With Option buttons -->
 <input type="radio" name="pg_price" value="1"checked>10 Premium Points for 10 BRL<p>
 <input type="radio" name="pg_price" value="2">20 Premium Points for 20 BRL<p>
 <input type="radio" name="pg_price" value="3">30 Premium Points for 30 BRL<p>
 <input type="radio" name="pg_price" value="3">50 Premium Points for 40 BRL<p>
 <input type="hidden" name="pg_return_url" value="http://mindfreakot.com/index.php?subtopic=shopsystem">
 <input type="hidden" name="pg_cancel_url" value="">
 <input type="image" name="pg_button" class="paygol" src="http://www.paygol.com/micropayment/img/buttons/125/red_en_pbm.png" border="0" alt="Make payments with PayGol: the easiest way!" title="Make payments with PayGol: the easiest way!" onClick="pg_reDirect(this.form)">
</form>  </center>'; 

?>

<h2>RICAMBI E ACCESSORI COMPATIBILI FOLLETTO</h2>
<p>
	<center>
		<i>Vuoi risparmiare sull'acquisto di ricambi e accessori <b>FOLLETTO</b>?</i>
	</center>
	<br>
<p>
	Presso il nostro negozio trovera ricambi e accessori compatibili con qualit&agrave; paragonabile all'originale ad un prezzo particolarmente conveniente.
	<br>
	<div class="logo-group" style="text-align:center">
		<img src="/areas/compatibili/images/filterplus.jpg">
		<img src="/areas/compatibili/images/mondo.jpg">
	</div>
</p>
<p>
	<center>
		Ricorda che non tutti i compatibili Folletto sono uguali!
	</center>
	<br>
	Con i prodotti FilterPlus e Mondo  puoi risparmiare senza rinunciare alla qualit&agrave;;da noi trovi in pronta consegna sacchetti, filtri Hepa, griglie protezione motore e accessi per tutti i modelli Folletto.
</p>
</p>
<br>
<span style="clear:both"/>
<div class="cialde">
	<?php
	$xml=simplexml_load_file($base."data.xml") or die("Error: Cannot create object");
	$current=0;
	foreach($xml->children() as $element) {
	$current=$current+1;
	if($current%2==0) {
	echo "<div class=\"left-box ".$element->code."\">";
	} else {
	echo "<div class=\"right-box ".$element->code."\">";
	}
	echo "<img src=\"".$base."images/".$element->image."\">";
	echo "<div class=\"text-box\">";
	echo "<b>".$element->title."</b><br /><p>";
	echo str_replace("\n","<br>",$element->description)."</p>";
	echo "</div>";
	echo "</div>";
	}
?>
</div>
<script type="text/javascript">
	$(document).ready(function() {
	$('img[code]').click(function() {
	var code=$(this).attr('code');
	console.log(code);
	$('.cialde>div').hide();
	$('.cialde div.'+code).show();
	});
	});
</script>

<p>
	Su ordinazione possiamo fornire la gamma completa di accessori e ricambi adattabili per tutti gli aspirapolvere Folletto.
</p>

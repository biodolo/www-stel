<h2>Capsule compatibili con Lavazza A Modo Mio</h2>
<p>
Le capsule compatibili Lavazza a Modo Mio offrono la possibilità di scegliere, 
in ogni momento della giornata, l’aroma che preferisci per un risultato in tazza a casa, come al bar. 
Nel nostro negozio ti offriamo capsule compatibili Lavazza a Modo Mio delle migliori torrefazioni
 in un'ampia scelta di miscele adatte a soddisfare tutti i palati.
</p>
<img code="borbone" src="<?php echo $base; ?>images/borbone.gif" style="float:right;margin-right:2em;">
<img code="lacompatibile" src="<?php echo $base; ?>images/lacompatibile.png" style="float:left;">
<img code="gimoka" src="<?php echo $base; ?>images/gimoka.png" style="float:right;margin-right:5em;">
<span style="clear:both"/>
<div class="cialde">
<?php
$xml=simplexml_load_file($base . "data.xml") or die("Error: Cannot create object");
$current=0;
foreach($xml->children() as $element) {
	$current = $current+1;
	if ($current % 2 ==0){
		echo "<div class=\"left-box " . $element->code . "\">"; 
	}else{
		echo "<div class=\"right-box " . $element->code . "\">"; 
	}
    echo "<img src=\"" . $base . "images/" . $element->image . "\">"; 
	echo "<div class=\"text-box\">";
    echo "<b>" . $element->title . "</b><br /><p>"; 
    echo str_replace("\n", "<br>", $element->description) . "</p>"; 
    echo "</div>"; 
	echo "</div>"; 
} 
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('img[code]').click(function(){
		var code=$(this).attr('code');
		console.log(code);
		$('.cialde>div').hide();
		$('.cialde div.'+code).show();
	});
});
</script>

<h2>CAPSULE CAFFITALY</h2>
<p>
Caffitaly ha scelto torrefattori d’eccellenza e un’azienda leader nella lavorazione delle erbe aromatiche per offrire il più ricco e completo sistema in capsule.<br>
Tante differenti miscele di caff&egrave; selezionate tra le tipologie pi&ugrave; qualificate provenienti da diverse aree geografiche, ed inoltre ginseng, orzo, bevande al cacao e a base di latte, camomilla, tea e tisane: una gamma completa pensata per soddisfare ogni esigenza.  
</p>

<img code="ecaffe" src="<?php echo $base; ?>images/ecaffe.jpg" style="float:right;margin-right:2em;">
<img code="caffita" src="<?php echo $base; ?>images/cuba.jpg" style="float:left;">
<img code="cagliari" src="<?php echo $base; ?>images/cagliaricaffe.jpg" style="float:right;margin-right:5em;">
<img code="chiccodoro" src="<?php echo $base; ?>images/chiccodoro.jpg" style="float:left;">

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

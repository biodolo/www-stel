<h2>RICAMBI E ACCESSORI ORIGINALI FOLLETTO</h2>
<p>
 I Ricambi Originali Vorwerk Folletto garantiscono la perfetta efficienza degli apparecchi, in particolare del sistema di filtraggio, per mantenere elevate performance di qualit&agrave;.<br> 
Nel nostro negozio potete trovare un vasto assortimento di accessori e ricambi originali Vorwerk Folletto.
</p>

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



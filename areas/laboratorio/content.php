<h2>Riparazioni in Laboratorio</h2>
<p>
	Effettuiamo servizio di assistenza tecnica autorizzata per <b>piccoli elettrodomestici</b> dei marchi
	<div class="logo-group" style="text-align:center">
    <a href="http://www.polti.it/" target="_blank"><img src="/areas/laboratorio/images/polti.jpg"></a>
    <a href="http://www.electrolux-rex.it/" target="_blank"><img src="/areas/laboratorio/images/electrolux-rex.png"></a>
    <a href="http://www.gisowatt.it/" target="_blank"><img src="/areas/laboratorio/images/gisowatt.png"></a>
    <a href="http://www.caffitaly.com/" target="_blank"><img src="/areas/laboratorio/images/caffitaly.png"></a>
    <a href="http://www.argoclima.com/" target="_blank"><img src="/areas/laboratorio/images/argo.jpg"></a>
    <a href="http://www.olimpiasplendid.it/" target="_blank"><img src="/areas/laboratorio/images/olimpia.jpg"></a>
    <a href="http://www.mo-el.com/" target="_blank"><img src="/areas/laboratorio/images/moel-logo.jpg"></a>
    <a href="http://www.vortice.it/it//" target="_blank"><img src="/areas/laboratorio/images/vortice.png"></a>
</div>
</p>

<?php
$xml=simplexml_load_file($base . "data.xml") or die("Error: Cannot create object");
$current=0;
foreach($xml->children() as $element) {
	$current = $current+1;
	if ($current % 2 ==0){
		echo "<div class=\"left-box\">"; 
	}else{
		echo "<div class=\"right-box\">"; 
	}
    echo "<img src=\"" . $base . "images/" . $element->image . "\">"; 
	echo "<div class=\"text-box\">";
    echo "<b>" . $element->title . "</b><br /><p>"; 
    echo str_replace("\n", "<br>", $element->description) . "</p>"; 
	
    echo "<a href=\"" . $base ."images/" . $element->manuale . "\" target=\"_blank\">Scarica il manuale</a>"; 
    echo "</div>"; 
	echo "</div>"; 
} 
?>
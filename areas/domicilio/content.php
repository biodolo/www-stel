<h2>Assistenza a domicilio</h2>
<p>
	Effettuiamo servizio di assistenza tecnica autorizzata per <b>grandi elettrodomestici</b> dei marchi
	<div class="logo-group" style="text-align:center">
    <a href="http://www.electrolux-rex.it/" target="_blank"><img src="/areas/domicilio/images/electrolux-rex.png"></a>
    <a href="http://www.zoppas.it/" target="_blank"><img src="/areas/domicilio/images/zoppas.png"></a>
    <a href="http://www.aeg.it/" target="_blank"><img src="/areas/domicilio/images/aeg.png"></a>
    <a href="http://www.zanussi.com/" target="_blank"><img src="/areas/domicilio/images/zanussi.jpg"></a>
    <a href="http://www.franke.com/kitchensystems/it/it/home.html" target="_blank"><img src="/areas/domicilio/images/franke.gif"></a>
    <a href="http://www.faberspa.com/" target="_blank"><img src="/areas/domicilio/images/faber.png"></a>
        <a href="http://www.lofra.it/" target="_blank"><img src="/areas/domicilio/images/lofra.jpg"></a>
</div>
</p>
<p>
	Effettuiamo servizio di assistenza tecnica autorizzata per <b>climatizzatori</b> dei marchi
	<div class="logo-group" style="text-align:center">
    <a href="http://www.argoclima.com/" target="_blank"><img src="/areas/domicilio/images/argo.jpg"></a>
    <a href="http://www.vortice.it/it/" target="_blank"><img src="/areas/domicilio/images/vortice.png"></a>
    <a href="http://www.olimpiasplendid.it/" target="_blank"><img src="/areas/domicilio/images/olimpia.jpg"></a>
    <a href="http://www.aircon.panasonic.eu/IT_it/" target="_blank"><img src="/areas/domicilio/images/panasonic-logo.jpg"></a>
    <a href="http://www.electrolux-rex.it/" target="_blank"><img src="/areas/domicilio/images/electrolux-rex.png"></a>
    <a href="http://www.mitsubishi-termal.it/" target="_blank"><img src="/areas/domicilio/images/mitsubishi heavy.jpg"></a>
    <a href="http://www.toshibaclima.it/" target="_blank"><img src="/areas/domicilio/images/toshiba.png"></a>
    <a href="http://www.haiercondizionatori.it/" target="_blank"><img src="/areas/domicilio/images/haier.jpg"></a>
    <a href="http://www.aircon.panasonic.eu/IT_it/" target="_blank"><img src="/areas/domicilio/images/sanyo.png"></a>
    <a href="http://www.samsung.com/it/consumer/home-appliances/air-conditioners/" target="_blank"><img src="/areas/domicilio/images/samsung-ac.jpg"></a>
        
</div>
</p>
<p>
	Effettuiamo servizio di assistenza tecnica autorizzata per <b>addolcitori</b> dei marchi
	<div class="logo-group" style="text-align:center">
    <a href="http://www.chibro.it/" target="_blank"><img src="/areas/domicilio/images/chibro.jpg"></a>
    <a href="http://www.acqva.eu/" target="_blank"><img src="/areas/domicilio/images/aqua.jpg"></a>
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
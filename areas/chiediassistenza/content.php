<h2>Richiedere Assistenza</h2>
<br>
Per richiedere assistenza tecnica &egrave; necessario contattare telefonicamente il nostro ufficio fornendo tutti i dati necessari all'apertura della pratica.
<br>
<center> 
<h2>ORARIO DI RICEZIONE TELEFONICA</h2>
<p style="text-align:center;margin:10px;">
dal Luned&igrave; al Venerd&igrave;<br>
mattino 8,30 - 12,30 &nbsp; pomeriggio 15,00 - 19,00<br>
telefono: 0584 962801 - 0584 961718
</p>
<br>
</center>
<p>I dati da fornire relativi all'apparecchiatura possono essere individuati seguendo le istruzioni che seguono ... </p>
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
    echo "</div>"; 
	echo "</div>"; 
} 
?>

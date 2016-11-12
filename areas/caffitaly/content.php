<h2>Macchine da caff&egrave; e Accessori Caffitaly</h2>
<p>
	<b>Caffitaly System</b> nasce nel 2004, da un gruppo di imprenditori uniti dalla passione per il caff&egrave;. <br>
	Grazie alla rapida affermazione nella produzione e commercializzazione di capsule di caff&egrave;, il primo stabilimento di Gaggio Montano vede un importante sviluppo, fino all'apertura nel 2010 del nuovo stabilimento produttivo di Rozzano, nel cuore dell’area industriale milanese.<br>
	Caffitaly ha scelto di dedicarsi ad un processo di ricerca unico nel settore del caff&egrave;: selezionare il meglio della tecnologia, applicandola per ottenere il meglio dal caff&egrave;. <br>
	Da questa intuizione &egrave; nato il <b>Caffitaly System</b>, un sistema combinato macchina-capsula coperto da brevetti internazionali.<br> 
	Così potrete gustare il caff&egrave; che preferite, con la sicurezza di avere sempre la qualit&agrave; che desiderate. 
	Da noi trovi le macchine da caff&egrave; Caffitaly ... ed anche il <a href="?area=vendicaffitaly">caff&egrave;!</a>
</p>
<p>Le capsule vendute nel nostro negozio NON sono compatibili con le macchine da caff&egrave; a marchio Caffitaly Professional e/o Coffee for you.</p>
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
<?php include 'promo.php' ?> 

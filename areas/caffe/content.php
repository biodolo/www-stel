<h2>Il mondo Caffitaly</h2>
<br>
<p> Caffitaly System nasce nel 2004, da un gruppo di imprenditori uniti dalla passione per il caffè. Grazie alla rapida affermazione nella produzione e commercializzazione di capsule di caffè, il primo stabilimento di Gaggio Montano vede un importante sviluppo, fino all'apertura nel 2010 del nuovo stabilimento produttivo di Rozzano, nel cuore dell’area industriale milanese. Caffitaly ha scelto di dedicarsi ad un processo di ricerca unico nel settore del caffè: selezionare il meglio della tecnologia, applicandola per ottenere il meglio dal caffè. Da questa intuizione è nato il Caffitaly System, un sistema combinato macchina-capsula coperto da brevetti internazionali. Così potrete gustare il caffè che preferite, con la sicurezza di avere sempre la qualità che desiderate. 
</p>
<h3>LE CAPSULE VENDUTE NEL NOSTRO NEGOZIO NON SONO COMPATIBILI CON LE MACCHINE DA CAFFÈ A MARCHIO CAFFITALY PROFESSIONAL E/O COFFEE FOR YOU.</h3>
<br>
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
    echo "<i>Codice : <acronym>" . $element->code . "</acronym></i>";
	echo "</div>"; 
	echo "</div>"; 
} 
?>


<h2>Macchine da caff&egrave; Lavazza A Modo Mio</h2>
<p>
	Lavazza A Modo Mio &egrave; stata pensata per i veri amanti dell’espresso italiano.<br>  
	&Egrave; stata <b>Electrolux</b> ad accaparrarsi la corsa per realizzare le macchine da caff&egrave; espresso della Lavazza e l’azienda svedese non poteva fare scelta migliore.<br> 
Da noi trovi l'intera gamma di macchine da caff&egrave; Lavazza a Modo Mio prodotte da Electrolux... ed anche il <a href="?area=vendiamodomio">caff&egrave;!</a>
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
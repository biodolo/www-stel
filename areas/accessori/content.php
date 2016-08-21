<h2>Accessori</h2>
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
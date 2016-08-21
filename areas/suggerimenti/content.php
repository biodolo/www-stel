<h2>Rendi migliori le performance del tuo elettrodomestico</h2>
<br>
<p>
I nostri tecnici sono formati, e si tengono in costante aggiornamento, presso le aziende per cui lavorano. 
La professionalità e l'esperienza acquisita rappresentano un valido supporto, e la miglior garanzia, 
che offriamo a tutti coloro che desiderano avere qualità e durata nel tempo dei propri elettrodomestici.
</p>
<br>
<?php
	$sections =[
		[
			"id"			=> "lavatrici",
			"titolo"		=> "LAVATRICI",
			"immagine"	=> "lavatrice.jpg",
			"content"		=> "copy of lavatrici.php"
		],[
			"id"			=> "asciugatrici",
			"titolo"		=> "ASCIUGABIANCHERIA",
			"immagine"	=> "asciugatrice.jpg",
			"content"		=> "asciugatrici.php"
		],[
			"id"			=> "lavastoviglie",
			"titolo"		=> "LAVASTOVIGLIE",
			"immagine"	=> "lavastoviglie.jpg",
			"content"		=> "lavastoviglie.php"
		],[
			"id"			=> "frigoriferi",
			"titolo"		=> "FRIGORIFERI",
			"immagine"	=> "frigo.jpg",
			"content"		=> "frigoriferi.php"
		],[
			"id"			=> "microonde",
			"titolo"		=> "MICROONDE",
			"immagine"	=> "microonde.jpg",
			"content"		=> "microonde.php"
		],[
			"id"			=> "piani-cottura",
			"titolo"		=> "PIANI COTTURA",
			"immagine"	=> "piano cottura.jpg",
			"content"		=> "piani-cottura.php"
		],[
			"id"			=> "forni",
			"titolo"		=> "FORNI",
			"immagine"	=> "forno.jpg",
			"content"		=> "forni.php"
		],[
			"id"			=> "piccoli-elettrodomestici",
			"titolo"		=> "MACCHINE PER IL CAFFE'",
			"immagine"	=> "macchina da caffe.jpg",
			"content"		=> "piccoli-elettrodomestici.php"
		],[
			"id"			=> "aspirapolveri",
			"titolo"		=> "LINEA PULIZIA",
			"immagine"	=> "aspirapolvere.jpg",
			"content"		=> "aspirapolveri.php"
		],[
			"id"			=> "climatizzatori",
			"titolo"		=> "CLIMATIZZATORI",
			"immagine"	=> "climatizzatore.jpg",
			"content"		=> "climatizzatori.php"
		]
	];
?>

<div class="suggerimenti">
<?php

	foreach ( $sections as $section) {
		echo "<div class=\"slot\">";
		echo "	<img src=\"" . $base . $section["immagine"] . "\">";
		echo "	<a class=\"overlay\" href=\"javascript:showModal('dialog-" . $section["id"] . "');\"><span>" . $section["titolo"] . "</span></a>";
		echo "</div>";
	};	
?>
</div>
<br>&nbsp;
<?php

	foreach ( $sections as $section) {
		echo "<div id=\"dialog-" . $section["id"] . "\" class=\"suggestion_dialog\"\">";
		echo "	<div class=\"suggestion_title\">";
		echo "		<b>" . $section["titolo"] . "</b>";
		echo "		<a href=\"javascript:hideModal()\" style=\"float:right;\"><i style=\"color:red\" class=\"fa fa-times-circle\"></i></a>";
		echo "	</div>";
		echo "	<div class=\"suggestion_content\">";
		include $section["content"];
		echo "	</div>";
		echo "</div>";
		
	};
	
?>

<script type="text/javascript">
$(document).ready(function(){
	$(".suggestion_dialog h3").click(function(){
		var div = $(this).next('div');
		if (div.css('display')=='block'){
			div.css('display','none');
		}else{
			div.css('display','block');
		}
	});
});
</script>
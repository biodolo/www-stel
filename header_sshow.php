	<script type="text/javascript" style="display:none;">
        //+ Jonas Raoni Soares Silva
        //@ http://jsfromhell.com/array/shuffle [v1.0]
        function shuffle(o){ //v1.0
            for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            return o;
        };
		$(document).ready(function() {
			$('#header-slideshow').mosaiqy({
				template        : "mosaiqy_tpl",
				rows            : 1,
				cols            : 3,
				avoidDuplicates : true,
				animationDelay  : 800,
				animationSpeed  : 1200,
				loop            : true,
				loadTimeout     : 5000,
				data            : shuffle([<?php

if ($handle = opendir('head_sshow')) {
	$supported_image = array(
		'gif',
		'jpg',
		'jpeg',
		'png'
	);
	$sep = '';
	while (false !== ($entry = readdir($handle))) {
		if (in_array(strtolower(pathinfo($entry, PATHINFO_EXTENSION)), $supported_image)) {
			echo "$sep{img:'head_sshow/$entry'}";
			$sep=",";
		}
	}

	closedir($handle);
}
				?>])
			});
		});
	</script> 

	<div id="header-slideshow" class="loading mosaiqy">
		<ul></ul>
	</div>


	<div id="promo-dialog" style="display:none;z-index:1000;width:50%;background-color: white;padding: 3px;border-radius: 5px;position:absolute;top:20px;left:50%;margin-left:-25%">
		<div class="button-gradient" style="border-radius: 3px;padding: 5px;">
			<b id="promo-dialog-title">Promozione</b>
			<a href="javascript:hideModal()" style="float:right;"><i style="color:red" class="fa fa-times-circle"></i></a>
		</div>		
        <a id="promo-dialog-link" href="javascript:void(0);" target="_blank"><img id="promo-dialog-image" src="javascript:void(0);" style="margin: 1%;width: 98%;"></a>
	</div>
	<script type="text/javascript">
        var immagine="promo_home.png";
        var titolo_promozione="Promozione Caffitaly";
        var promozione=true;
        
        if (promozione)
            $(document).ready(function() {
                $( "#promo-dialog-link" ).attr('href',immagine);
                $( "#promo-dialog-image" ).attr('src',immagine);
                $( "#promo-dialog-title" ).text(titolo_promozione);
            	showModal("promo-dialog");
            });
	</script> 


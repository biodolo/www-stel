<!--chiudo contieneblocchi-->
</div>

<!--chiudo dx-->
</div>

<!--chiudo bound-->
</div>

<div id="footer">
	<div id="footmen">
		<ul>
			<li>
				<a href="?area=privacy" title="privacy">Privacy</a>
			</li>
			<li>
				<a href="?area=chi_siamo" title="chi siamo">La nostra azienda</a>
			</li>
		</ul>
	</div>
	<!--chiudo footer-->
</div>
<div id="modal">
	&nbsp;
</div>
<script type="text/javascript">
	function showModal(id) {
		$("#modal , #" + id).css('display', 'block');
		$("#" + id).addClass("modal-shown");
	}

	function hideModal() {
		$("#modal , .modal-shown").css('display', 'none');
		$(".modal-shown").removeClass("modal-shown");
	}


	$(document).ready(function() {
		$("#modal").click(hideModal);
	}); 
</script>
</body>
</html>
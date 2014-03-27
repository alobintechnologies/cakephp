



	<!-- start: Java Script -->
	<?php
	echo $this->Html->script('jquery-1.10.2');
	echo $this->Html->script('bootstrap');
	?>
	<?php echo $this->Html->script('plugins/datepicker/bootstrap-datepicker'); ?>
	<!-- end: Java Script -->
	
    <script type="text/javascript">
	$(window).scroll(function() {
	    if ($(".navbar").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	    } else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	    }
	});
    </script>
    </body>
</html>
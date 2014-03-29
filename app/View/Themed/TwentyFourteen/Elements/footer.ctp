



	<!-- start: Java Script -->
	<?php
	echo $this->Html->script('jquery-1.10.2');
	echo $this->Html->script('bootstrap');
	echo $this->Html->script('plugins/datepicker/bootstrap-datepicker');
	echo $this->Html->script('plugins/skitter/jquery.easing.1.3');
	echo $this->Html->script('plugins/skitter/jquery.animate-colors-min');
	echo $this->Html->script('plugins/skitter/jquery.skitter.min');

	?>
	<!-- end: Java Script -->
	
    <script type="text/javascript">
	$(window).scroll(function() {
	    if ($(".navbar").offset().top > 50) {
		$(".navbar-fixed-top").addClass("top-nav-collapse");
	    } else {
		$(".navbar-fixed-top").removeClass("top-nav-collapse");
	    }
	});
	jQuery(document).ready(function($) {
	    $(".box_skitter_large").skitter();
	});
    </script>
    </body>
</html>
<?php echo $this->element('header'); ?>

<?php echo $this->element('page_header'); ?>
<!--start: Wrapper-->
<div id="wrapper">				
    <!--start: Container -->
    <div class="container">     	 
	<?php echo $this->element('login_left_sidebar'); ?>	
	<?php echo $this->fetch('content'); ?>
	<?php echo $this->element('login_right_sidebar'); ?>
    </div>
    <!--end: Container-->	
</div>
<!-- end: Wrapper  -->			

<?php echo $this->element('page_footer'); ?>

<?php echo $this->element('footer'); ?>
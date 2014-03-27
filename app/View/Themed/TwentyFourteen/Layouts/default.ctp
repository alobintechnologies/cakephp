<?php echo $this->element('header'); ?>

<?php echo $this->element('page_header'); ?>
<?php echo $this->element('top_banner'); ?>
<!--start: Wrapper-->
<div id="wrapper">				
    <!--start: Container -->
    <div class="container">     	    
	<?php echo $this->fetch('content'); ?>
    </div>
    <!--end: Container-->	
</div>
<!-- end: Wrapper  -->			

<?php echo $this->element('page_footer'); ?>

<?php echo $this->element('footer'); ?>
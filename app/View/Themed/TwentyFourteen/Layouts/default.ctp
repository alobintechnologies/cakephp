<?php echo $this->element('header'); ?>

<?php echo $this->element('page_header'); ?>
<?php echo $this->element('top_banner'); ?>
<!--start: Wrapper-->
<div id="wrapper">			    
	<?php echo $this->fetch('content'); ?>
</div>
<!-- end: Wrapper  -->			

<?php echo $this->element('page_footer'); ?>

<?php echo $this->element('footer'); ?>
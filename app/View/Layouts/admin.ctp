<?php echo $this->element('admin_header'); ?>
	<?php echo $this->element('admin_page_header'); ?>
	<?php echo $this->element('admin_nav_sidebar'); ?>
	<div id="page-wrapper">		
		<?php echo $this->fetch('content'); ?>
	</div>	
<?php echo $this->element('admin_footer'); ?>